<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Audit_model;

class RekapAudit extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }

        $audit = new audit_model();
        $data = [
            'title' => 'Rekap Audit',
            'audit' => $audit->data_audit()->getResult(),
            'isi'   => 'pkpt/rekap_audit'
        ];
        echo view('layout/wrapper', $data);
    }

    public function peta_audit()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $audit = new audit_model();
        $data = [
            'title' => 'Peta Audit',
            'audit' => $audit->data_audit()->getResult(),
            'isi'   => 'pkpt/peta_audit'
        ];
        echo view('layout/wrapper', $data);
    }

    public function upload_pkpt()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        // $audit = new audit_model();
        $data = [
            'title' => 'Upload PKPT Final',
            // 'audit' => $audit->data_audit()->getResult(),
            'isi'   => 'pkpt/upload_pkpt'
        ];
        echo view('layout/wrapper', $data);
    }
}

?>