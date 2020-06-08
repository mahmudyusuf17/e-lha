<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Admin_model;
use App\Models\User_model;

class Admin extends Controller
{
    protected $helpers = ['url', 'form'];
    // protected $Admin_model;
    // public function __construct() {
    //     $this->Admin_model = new Admin_model();
    // }

    public function index(){
        $admin = new Admin_model();
        $data = [
            'title' => 'Data User',
            'admin' => $admin->tampil_data()->getResult(),
            'isi'   => 'admin/admin'
        ];
        echo view('layout/wrapper', $data);
        
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
    }
    
    public function delete($id)
    {
        
        $user = new User_model();
        $user->delete_user($id);
        session()->setFlashdata('hapus', 'Data User Telah Dihapus');
        return $this->response->redirect(base_url('admin'));
    }

    // public function testing()
    // {
    //     $data = [
    //         'title' => 'Data User',
    //         'isi'   => 'admin/testing'
    //     ];
    //     echo view('layout/wrapper', $data);
    // }

}

?>