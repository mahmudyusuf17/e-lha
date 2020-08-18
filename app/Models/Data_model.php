<?php namespace App\Models;
use CodeIgniter\Model;

class Data_model extends Model
{
    protected $table ='users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'created_at'];

    public function data_user($user)
    {
        return $this->db->table('role_user')->getWhere(['user_id' => $user]);
    }
}