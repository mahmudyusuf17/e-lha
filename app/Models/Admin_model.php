<?php namespace App\Models;
use CodeIgniter\Model;

class Admin_model extends Model
{
    protected $table = "users";
    function __construct()
    {
        $this->db = db_connect();
    }
    function tampil_data(){
        // return $this->db->table('role_user')
        // ->join('users', 'users.id = role_user.user_id')
        // ->join('roles', 'roles.id = role_user.role_id')
        // ->get()->getResultArray();

        return $this->db->table('users')->get();
        
    }
}

?>