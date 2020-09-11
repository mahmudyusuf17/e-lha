<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User_model;
use App\Models\Data_model;


class User extends Controller
{
    
    protected $helpers = ['url', 'form'];
    public function index(){
        $user = new User_model();
        $data = [
            'title' => 'Data Users',
            'users' => $user->tampil_data(),
            'isi'   => 'admin/user'
        ];
        echo view('layout/wrapper', $data);
        
        // proteksi halaman
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
    }

    public function registration()
    {
        $data = [
            'title' => 'Registrasi User',
            'isi'   => 'admin/registrasi'
        ];
        echo view('layout/login', $data);
        
        // session berhasil login
        if (!session()->get('email')=='') {
            return redirect()->to(base_url('dashboard'));
        }
    }

    public function registrasi()
    {
        $validation = \Config\Services::validation();
        $data = [
            'nip'               => htmlspecialchars($this->request->getpost('nip')),
            'nama'              => htmlspecialchars($this->request->getpost('nama')),
            'role_id'           => $this->request->getpost('role_id'),
            'email'             => htmlspecialchars($this->request->getpost('email')),
            'password'          => htmlspecialchars($this->request->getpost('password')),
            'confirm_pass'   => htmlspecialchars($this->request->getpost('password2')),
            'unit_kerja'        => htmlspecialchars($this->request->getpost('unit_kerja')),
            'jabatan'           => htmlspecialchars($this->request->getpost('jabatan')),
        ];
        
        if ($validation->run($data, 'user')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/registration'));
        }else{
            $user = new User_model();
            $input = $user->tambah_user($data);
            $id_user = $user->insertID();
            $input_role = $user->input_role($data, $id_user);
            if ($input_role){
                session()->setFlashdata('berhasil_regis', $this->request->getpost());
                return redirect()->to(base_url('auth'));
                
            }
        }
    }


    public function data_user($user)
    {
        $user_model = new Data_model();
        $data = [
            'title' => 'Data User',
            'data' => $user_model->find($user),
            'role' => $user_model->data_user($user)->getRow(),
            'isi'   => 'admin/data_user',
        ];
        echo view('layout/wrapper', $data);
    }

    public function edit_user($user)
    {
        $user_model = new Data_model();
        $data = [
            'title' => 'Data User',
            'data' => $user_model->find($user),
            'role' => $user_model->data_user($user)->getRow(),
            'isi'   => 'admin/edit_user',
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_user(){
        $validation = \Config\Services::validation();

        $name            = htmlspecialchars($this->request->getpost('name'));
        $email           = htmlspecialchars($this->request->getpost('email'));
        $password        = $this->request->getpost('password');
        $confirm_pass    = $this->request->getpost('password2');
        // $role            = $this->request->getpost('role');
        $data = [
            'name'         => $name,
            'email'        => $email,
            'password'     => $password,
            'confirm_pass' => $confirm_pass,
            // 'role'         => $role
            
        ];

        
        if ($validation->run($data, 'user')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user'));
        }else{
            $user = new User_model();
            // $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
            // $user->insert($_POST);
            $tambah = $user->tambah_user($data);
        
            if ($tambah){
                session()->setFlashdata('sukses', $this->request->getpost());
                return redirect()->to(base_url('user'));
            }
        }
        
    }

    public function update_user($id)
    {
        $validation = \Config\Services::validation();
        $data = [
            'nip'               => htmlspecialchars($this->request->getpost('nip')),
            'name'              => htmlspecialchars($this->request->getpost('name')),
            'email'             => htmlspecialchars($this->request->getpost('email')),
            'unit_kerja'        => htmlspecialchars($this->request->getpost('unit_kerja')),
            'jabatan'           => htmlspecialchars($this->request->getpost('jabatan')),
            'updated_at'        => date('Y-m-d H:i:s')
        ];
        if ($validation->run($data, 'user_edit')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('user/edit_user/'.$id));
        }else{
            $user = new User_model();
            $tambah = $user->update_user($data, $id);
        
            if ($tambah){
                session()->setFlashdata('sukses', $this->request->getpost());
                return redirect()->to(base_url('user/edit_user/'.$id));
            }
        }

    }

    public function delete($id)
    {
        $user = new User_model();
        $user->delete_user($id);
        session()->setFlashdata('hapus', 'Data User Telah Dihapus');
        return $this->response->redirect(base_url('user'));
    }
}

?>

