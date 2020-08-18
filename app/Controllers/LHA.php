<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Audit_model;

class LHA extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $audit = new audit_model();
        $data = [
            'title' => 'Laporan Hasil Audit (LHA)',
            'proker' => $audit->data_audit()->getResult(),
            'isi'   => 'lha/proker_audit'
        ];
        echo view('layout/wrapper', $data);
    }
}

?>