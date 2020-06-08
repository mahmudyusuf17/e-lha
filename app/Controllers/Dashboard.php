<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Data_model;

class Dashboard extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $data = [
            'title' => 'Dashboard Admin',
            'isi'   => 'admin/index'
        ];
        echo view('layout/wrapper', $data);
    }
}

?>