<?php namespace App\Models;
use CodeIgniter\Model;

class User_model extends Model
{
    protected $table ='users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'created_at'];


    public function __construct() 
    {
        $this->db = db_connect();
    }

    function tampil_data(){
        // return $this->db->table('users')->get();
        return $this->db->table('role_user')
        ->join('users', 'users.id = role_user.user_id')
        ->join('roles', 'roles.id = role_user.role_id')
        ->get()->getResultArray();
    }

    function all_user(){
        return $this->db->table('users')->get();
    }

    function tampildata_id($id)
    {
        return $this->db->table('role_user')
        ->join('users', 'users.id = role_user.user_id')
        ->join('roles', 'roles.id = role_user.role_id')
        ->where(['user_id' => $id])
        ->getRow();
        
    }

    function data_user($id)
    {
        return $this->db->table('users')->getWhere(['id' => $id]);
    }

    function update_user($data, $id)
    {
        return $this->db->table('users')->update($data, ['id' => $id]);
    }

    function tambah_user($data){
        return $this->db->table('users')->insert([
            'nip'          => $data['nip'],
            'name'         => $data['nama'],
            'email'        => $data['email'],
            'password'     => password_hash($data['password'], PASSWORD_BCRYPT),
            'unit_kerja'  => $data['unit_kerja'],
            'jabatan' => $data['jabatan'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // $this->db->table('role_user')->insert([
        //     'role_id'        => $data['role'],
        // ]);
        // $this->db->table('roles')->insert($data_role);
    }
    function input_role($data, $id_user)
    {
        return $this->db->table('role_user')->insert([
            'user_id' => $id_user,
            'role_id' => $data['role_id'],
        ]);
    }

    function delete_user($id)
    {
        $this->db->table('users')->delete(array('id' => $id));
        return $this->db->table('role_user')->delete(array('user_id' => $id));
    }
}   