<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Surattugas_model;
use App\Models\Data_model;
use Dompdf\Dompdf;
use Dompdf\Options;

class SuratTugas extends BaseController
{
    public function index(){
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Surat Tugas',
            'surat'   => $model->data_surat()->getResult(),
            'isi'           => 'surattugas/surat_tugas'
        ];
        echo view('layout/wrapper', $data);
    }

    public function input_surat_tugas()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        
        $user_model = new Data_model();
        $user = session()->get('id');
        $data = [
            'title'         => 'Input Surat Tugas',
            'role'          =>  $user_model->data_user($user)->getRow(),
            'isi'           => 'surattugas/input_surat_tugas'
        ];
        echo view('layout/wrapper', $data);
    }

    public function input(){
        $validation = \Config\Services::validation();
        $id = session()->get('id');
        $data = [
            'judul'              => htmlspecialchars($this->request->getpost('judul')),
            'tgl_awal'           => $this->request->getpost('tgl_awal'),
            'tgl_akhir'          => $this->request->getpost('tgl_akhir'),
            'dasar'              => htmlspecialchars($this->request->getpost('dasar')),
            'kepada'             => htmlspecialchars($this->request->getpost('kepada')),
            'untuk'              => htmlspecialchars($this->request->getpost('untuk')),
            'n_status'           => $this->request->getpost('status_surat'),
            'tembusan'           => htmlspecialchars($this->request->getpost('tembusan')),
            
        ];
        
        if ($validation->run($data, 'surat')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surattugas/input_surat_tugas'));
        }else{
            $surat = new Surattugas_model();
            $input = $surat->input_surat($data, $id);
        
            if ($input){
                session()->setFlashdata('sukses', $this->request->getpost());
                $idSurtu = $surat->insertID();
                return redirect()->to(base_url('surattugas/input_surattugas/'.$idSurtu));
                
            }
        }
    }

    public function input_surattugas($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }

        $user_model = new Data_model();
        $user = session()->get('id');
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Input Surat Tugas',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'role'          =>  $user_model->data_user($user)->getRow(),
            'isi'           => 'surattugas/input_surattugas'
        ];
        echo view('layout/wrapper', $data);
    }

    public function input_team($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Input Team',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
            'isi'           => 'surattugas/input_team'
        ];
        echo view('layout/wrapper', $data);
    }

    // public function input_datateam($idSurtu)
    // {
    //     $validation = \Config\Services::validation();
    //     $data = [
    //         'nip'               => htmlspecialchars($this->request->getpost('nip')),
    //         'nama'              => htmlspecialchars($this->request->getpost('nama')),
    //         'unit'              => htmlspecialchars($this->request->getpost('unit')),
    //         'jabatan'           => htmlspecialchars($this->request->getpost('jabatan')),
    //         'tgl_awal'          => htmlspecialchars($this->request->getpost('tgl_awal')),
    //         'tgl_akhir'         => htmlspecialchars($this->request->getpost('tgl_akhir')),
    //     ];
        
    //     if ($validation->run($data, 'team')==false) {
    //         session()->setFlashdata('errors', $validation->getErrors());
    //         return redirect()->to(base_url('surattugas/input_team/'.$idSurtu));
    //     }else{
    //         $surat = new Surattugas_model();
    //         $input = $surat->input_team($data, $idSurtu);
    //         if ($input){
    //             session()->setFlashdata('sukses', $this->request->getpost());
    //             return redirect()->to(base_url('surattugas/input_team/'.$idSurtu));
                
    //         }
    //     }
    // }

    public function preview($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Preview Surat Tugas',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
            'isi'           => 'surattugas/preview'
        ];
        echo view('layout/wrapper', $data);
    }

    public function pdf($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $options = new Options();
        $options->set('isRemoteEnabled',true);      
        $dompdf = new Dompdf($options);
        $model = new Surattugas_model();
        $data = [
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
        ];
        // $judul = $this->request->getVar('judul');
        $html = view('surattugas/pdf_surtu', $data);
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potret');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('surat tugas.pdf', array('Attachment' =>0));
    }

    public function download_pdf($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $options = new Options();
        $options->set('isRemoteEnabled',true);      
        $dompdf = new Dompdf($options);
        $model = new Surattugas_model();
        $data = [
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
        ];
        $html = view('surattugas/pdf_surtu', $data);
        // $filename = array(get('judul') . '.pdf');
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potret');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream('surat tugas.pdf', array('Attachment' =>1));
    }

    public function preview_edit($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Preview Surat Tugas',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'isi'           => 'surattugas/preview_edit'
        ];
        echo view('layout/wrapper', $data);
    }

    public function edit_surat_tugas($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }

        $user_model = new Data_model();
        $user = session()->get('id');
        $model = new Surattugas_model();
        $data = [
                'title'         => 'Edit Surat Tugas',
                'surat'         =>  $model->ambil_data($idSurtu)->getRow(),
                'role'          =>  $user_model->data_user($user)->getRow(),
                'isi'           => 'surattugas/edit_surat_tugas'
        ];
            echo view('layout/wrapper', $data);
    }

    public function update_surtu($idSurtu)
    {
        $validation = \Config\Services::validation();
        
        $data=[
            'no_surat'           => htmlspecialchars($this->request->getpost('no_surat')),
            'judul'              => htmlspecialchars($this->request->getpost('judul')),
            'tgl_awal'           => $this->request->getpost('tgl_awal'),
            'tgl_akhir'          => $this->request->getpost('tgl_akhir'),
            'dasar'              => htmlspecialchars($this->request->getpost('dasar')),
            'kepada'             => htmlspecialchars($this->request->getpost('kepada')),
            'untuk'              => htmlspecialchars($this->request->getpost('untuk')),
            'n_status'           => $this->request->getpost('status_surat'),
            'tembusan'           => htmlspecialchars($this->request->getpost('tembusan')),
        ];

        if ($validation->run($data, 'surat')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surattugas/input_surat_tugas'));
        }else{
            $surat = new Surattugas_model();
            $input = $surat->update_surat($data, $idSurtu);
        
            if ($input){
                session()->setFlashdata('sukses', $this->request->getpost());
                return redirect()->to(base_url('surattugas/edit_surat_tugas/'.$idSurtu));
            }
        }
        
    }

    public function edit_team($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Edit Team',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
            'isi'           => 'surattugas/editteam'
        ];
        echo view('layout/wrapper', $data);
    }

    public function edit_member($id)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $model = new Surattugas_model();
        $data = [
            'title'         => 'Edit Anggota Team',
            'team'          => $model->data_member($id)->getRow(),
            'isi'           => 'surattugas/edit_member'
        ];
        echo view('layout/wrapper', $data);
    }

    public function tambah_team($idSurtu)
    {
        $validation = \Config\Services::validation();
        $data = [
            'nip'               => htmlspecialchars($this->request->getpost('nip')),
            'nama'              => htmlspecialchars($this->request->getpost('nama')),
            'unit'              => htmlspecialchars($this->request->getpost('unit_kerja')),
            'jabatan'           => htmlspecialchars($this->request->getpost('jabatan')),
            'tgl_awal'          => htmlspecialchars($this->request->getpost('tgl_awal')),
            'tgl_akhir'         => htmlspecialchars($this->request->getpost('tgl_akhir')),
        ];
        
        if ($validation->run($data, 'team')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surattugas/input_team/'.$idSurtu));
        }else{
            $surat = new Surattugas_model();
            $input = $surat->input_team($data, $idSurtu);
            if ($input){
                session()->setFlashdata('sukses', $this->request->getpost());
                return redirect()->to(base_url('surattugas/input_team/'.$idSurtu));
            }
        }
    }

    

    public function edit_datateam($id)
    {
        $idSurtu = $this->request->getpost('idSurtu');
        $validation = \Config\Services::validation();
        $data = [
            'nip'               => htmlspecialchars($this->request->getpost('nip')),
            'nama'              => htmlspecialchars($this->request->getpost('nama')),
            'unit_kerja'        => htmlspecialchars($this->request->getpost('unit')),
            'jabatan'           => htmlspecialchars($this->request->getpost('jabatan')),
            
        ];
        
        if ($validation->run($data, 'team')==false) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('surattugas'));
        }else{
            $surat = new Surattugas_model();
            $input = $surat->edit_team($data, $id);
        
            if ($input){
                session()->setFlashdata('sukses', $this->request->getpost());
                return redirect()->to(base_url('surattugas/edit_team/' . $idSurtu));
                
            }
        }
    }

    public function input_surtu()
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        $data = [
            'title'         => 'Input Surat Tugas',
            'isi'           => 'surattugas/input_surtu'
        ];
        echo view('layout/wrapper', $data);

    }

    // public function input_data_team()
    // {
    //     $validation = \Config\Services::validation();

    //     $nip                = htmlspecialchars($this->request->getpost('nip'));
    //     $nama               = htmlspecialchars($this->request->getpost('nama'));
    //     $unit               = htmlspecialchars($this->request->getpost('unit'));
    //     $jabatan            = htmlspecialchars($this->request->getpost('jabatan'));
        
    //     $data = [
    //         'nip'              => $nip,
    //         'nama'           => $nama,
    //         'unit'          => $unit,
    //         'jabatan'              => $jabatan,
            
    //     ];

        
    //     if ($validation->run($data, 'team')==false) {
    //         session()->setFlashdata('errors', $validation->getErrors());
    //         return redirect()->to(base_url('surattugas/input_surtu'));
    //     }else{
    //         $surat = new Surattugas_model();
    //         $input = $surat->input_team($data);
        
    //         if ($input){
    //             session()->setFlashdata('team', $this->request->getpost());
    //             return redirect()->to(base_url('surattugas/input_surtu'));
                
    //         }
    //     }
    // }

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

    public function view_cetak_surtu($idSurtu)
    {
        if (session()->get('email')=='') {
            return redirect()->to(base_url('auth'));
        }
        helper('tanggal');
        $model = new Surattugas_model();
        $data = [
            'title'         => 'View Cetak Surat Tugas',
            'surat'         => $model->ambil_data($idSurtu)->getRow(),
            'team'          => $model->data_team($idSurtu)->getResult(),
            'isi'           => 'surattugas/view_cetak_surtu'
        ];
        echo view('layout/wrapper', $data);
    }

    public function hapus_data($idSurtu)
    {
        $surat = new Surattugas_model();
        $surat->delete_surtu($idSurtu);
        return redirect()->to(base_url('surattugas'));
    }

    public function hapus_team($id)
    {
        $surat = new Surattugas_model();
        $idSurtu= [
            'idSurtu'         => $surat->data_member($id)->getRow('idSurtu')
        ];
            $surat->delete_team($id);
            return redirect()->to(base_url('surattugas/edit_team/' . $idSurtu['idSurtu']));

    }

}

?>