<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Audit_model;

class LHR extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $audit = new audit_model();
        $data = [
            'title' => 'Laporan Hasil Review (LHR)',
            'review' => $audit->data_audit()->getResult(),
            'isi'   => 'lhr/review_audit'
        ];
        echo view('layout/wrapper', $data);
    }
}

?>