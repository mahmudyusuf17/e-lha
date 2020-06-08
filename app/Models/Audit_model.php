<?php namespace App\Models;
use CodeIgniter\Model;

class Audit_model extends Model
{
    protected $table = "audit";
    function __construct()
    {
        $this->db = db_connect();
    }
    function data_audit(){
        return $this->db->table('audit')->get();
    }
}

?>