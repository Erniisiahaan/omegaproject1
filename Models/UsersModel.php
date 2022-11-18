<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'username', 'password', 'status_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function create_data($params){
        $data = [
            'name' => $params->getVar('name'),
            'username' => $params->getVar('username'),
            'password' => password_hash($params->getVar('password'), PASSWORD_DEFAULT),
            'status_id' => 1
        ];
        return $this->save($data);
    }
    public function auth_user($username, $password){
        $query = $this->where('LOWER(email)', strtolower(trim($username)));
        $result = $query->get()->getRowArray();
        if($result === NULL){
            $user = null;
        } else if(password_verify($password, $result['password'])){
            $user = $result;
        } else {
            $user = null;
        }
        return $user;
    }

    function get_all_data(){
        return $this->get()->getResult();
    }

    public function get_data($id){
        return $this->find($id);
    }
}
