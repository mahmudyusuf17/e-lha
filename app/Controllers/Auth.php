<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Data_model;

class Auth extends BaseController
{
    protected $helpers = ['url', 'form'];
    public function index(){
        $data = [
            'title' => 'Login Admin',
            'isi'   => 'admin/auth'
        ];
        echo view('layout/login', $data);
        
        // session berhasil login
        if (!session()->get('email')=='') {
            return redirect()->to(base_url('dashboard'));
        }
    }
    
    public function login()
    {
        $data = [
            'email'        => htmlspecialchars($this->request->getpost('email')),
            'password'     => $this->request->getpost('password'),
            
        ];
        $validation = \Config\Services::validation();
        if ($validation->run($data, 'login')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('auth'));
        }

        if ($this->exist($_POST['email'], $_POST['password']) != NULL) {
            $session = session();
            $session->set('email', $_POST['email']);
            return $this->response->redirect(base_url('dashboard'));
        }else{
                session()->setFlashdata('gagal', 'Email/Password Salah!!!');
                return redirect()->to(base_url('auth'));
            }
    
    }

    private function exist($email, $password){
        $user  = new Data_model();
        $login = $user->where('email', $email)->first();
        
        if ($login != NULL) {
            if (password_verify($password, $login['password'])) {
                $this->setUserSession($login);
                return $login;
            }
        } return NULL;
    }

    private function setUserSession($login)
    {
        $data = [
            'id' => $login['id'],
            'nip' => $login['nip'],
            'nama' => $login['name'],
            'email' => $login['email'],
            'unit_kerja' => $login['unit_kerja'],
            'jabatan' => $login['jabatan'],
            'created' => $login['created_at'],
            'updated' => $login['updated_at']
        ];
        
        session()->set($data);
        // print_r($_SESSION);
        // exit();
        return false;
    }
    
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('auth'));
    }
}


?>