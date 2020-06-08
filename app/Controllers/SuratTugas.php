<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Surattugas_model;

class SuratTugas extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }

        $model = new Surattugas_model();
        $data = [
            'title'         => 'Surat Tugas',
            'surat'   => $model->data_surat()->getResult(),
            'isi'           => 'surattugas/surat_tugas'
        ];
        echo view('layout/wrapper', $data);
    }

    public function input_surtu()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $data = [
            'title'         => 'Input Surat Tugas',
            // 'surat'         => $model->data_surat()->getResult(),
            'isi'           => 'surattugas/input_surtu'
        ];
        echo view('layout/wrapper', $data);
    }

    public function view_tgspegawai()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $model = new Surattugas_model();
        $data = [
            'title'         => 'View Tugas Pegawai',
            'view'          => $model->data_surat()->getResult(),
            'isi'           => 'surattugas/view_tgspegawai'
        ];
        echo view('layout/wrapper', $data);
    }

}

?>