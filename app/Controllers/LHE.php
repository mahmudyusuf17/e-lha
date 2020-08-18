<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Audit_model;

class LHE extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $audit = new audit_model();
        $data = [
            'title' => 'Laporan Hasil Evaluasi (LHE)',
            'evaluasi' => $audit->data_audit()->getResult(),
            'isi'   => 'lhe/evaluasi_audit'
        ];
        echo view('layout/wrapper', $data);
    }
}

?>