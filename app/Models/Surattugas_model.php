<?php namespace App\Models;
use CodeIgniter\Model;

class Surattugas_model extends Model
{
    protected $table = "surat_tugas";
    function __construct()
    {
        $this->db = db_connect();
    }
    function data_surat(){
        return $this->db->table('surat_tugas')->get();
    }
}

?>