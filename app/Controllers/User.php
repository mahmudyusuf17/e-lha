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

    // public function view_user($id){
    //     $user = new User_model();

    //     $data = [
    //         'title' => 'Data User',
    //         'isi'   => 'admin/data_user',
    //     ];
        
    //     if ($user->getResult() > 0) {
    //         $row = $user->getRow();    

    //     $data2 = [
    //         'views'  => $user->data_user($id),
    //         'id' => $id,
    //         'nama' => $row->name,
    //         'email' => $row->email,
    //         'role_id' => $row->role_id,
    //         'created_at' => $row->created_at,
    //         'updated_at' => $row->updated_at
    //     ];
    //     echo view('layout/wrapper', $data);
    //     }
    // }

    public function data_user($id)
    {
        $user = new Data_model();
        $data = [
            'title' => 'Data User',
            'data' => $user->find($id),
            'isi'   => 'admin/data_user',
        ];
        echo view('layout/wrapper', $data);
    }

    public function edit_user($id)
    {
        $user = new Data_model();
        $data = [
            'title' => 'Data User',
            'data' => $user->find($id),
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

    public function delete($id)
    {
        // $url = service('url');
        // $id = $url->getSegment('3');
        $user = new User_model();
        $user->delete_user($id);
        session()->setFlashdata('hapus', 'Data User Telah Dihapus');
        return $this->response->redirect(base_url('user'));
    }
}

?>

