<?php namespace App\Models;
use CodeIgniter\Model;

class Surattugas_model extends Model
{
    protected $table = "surat_tugas";
    protected $primaryKey = 'idSurtu';
    protected $allowedFields = ['judul', 'tgl_awal', 'tgl_akhir', 'n_status', 'dasar', 'kepada', 'untuk'];
    function __construct()
    {
        $this->db = db_connect();
    }
    function data_surat(){
        return $this->db->table('surat_tugas')->get();
    }

    function ambil_data($idSurtu){
        return $this->db->table('surat_tugas')->getWhere(['idSurtu' => $idSurtu]);
    }
    
    function data_team($idSurtu){
        return $this->db->table('peserta')->getWhere(['idSurtu' => $idSurtu]);
    }
    function data_member($id){
        return $this->db->table('peserta')->getWhere(['id' => $id]);
    }

    function input_surat($data, $id){
        return $this->db->table('surat_tugas')->insert([
            'judul'              => $data['judul'],
            'tgl_awal'           => $data['tgl_awal'],
            'tgl_akhir'          => $data['tgl_akhir'],
            'dasar'              => $data['dasar'],
            'kepada'             => $data['kepada'],
            'untuk'              => $data['untuk'],
            'n_status'           => $data['n_status'],
            'tembusan'           => $data['tembusan'],
            'created_time'       => date('Y-m-d H:i:s'),
            'update_time'        => date('Y-m-d H:i:s'),
            'user_id'            => $id
        ]);
        
    }

    function update_surat($data, $idSurtu)
    {
        return $this->db->table('surat_tugas')->update($data,['idSurtu' => $idSurtu]);
    }

    function input_team($data, $idSurtu){
        return $this->db->table('peserta')->insert([
            'idSurtu'=> $idSurtu,
            'nip' => $data['nip'],
            'nama' => $data['nama'],
            'unit_kerja' => $data['unit'],
            'jabatan' => $data['jabatan'],
            'tgl_awal' => $data['tgl_awal'],
            'tgl_akhir' => $data['tgl_akhir'],
            'create_time' => date('Y-m-d H:i:s'),
            'update_time' => date('Y-m-d H:i:s')
        ]);
        
    }

    function edit_team($data, $id)
    {
        return $this->db->table('peserta')->update($data,['id' => $id]);
    }

    function tampil_surat(){
        $this->db->order_by('idSurtu', 'desc');
        return $this->db->get('surat_tugas');
    }

    function delete_surtu($idSurtu){
        $this->db->table('surat_tugas')->delete(array('idSurtu' => $idSurtu));
        return $this->db->table('peserta')->delete(array('idSurtu' => $idSurtu));
    }

    function delete_team($id){
        return $this->db->table('peserta')->delete(array('id' => $id));
    }
}

?>