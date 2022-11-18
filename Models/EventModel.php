<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'event';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'image_name', 'artist_id', 'ticket_limit', 'status_id', 'event_date', 'user_id', 'price'];

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

    public function get_all_data(){
        return $this->get()->getResult();
    }

    public function get_data($id){
        return $this->find($id);
    }

    public function create_data($params){
        $data = [
            'name' => $params->getVar('name'),
            'image_name' => $params->getVar('image_name'),
            'artist_id' => $params->getVar('artist_id'),
            'ticket_limit' => $params->getVar('ticket_limit'),
            'status_id' => $params->getVar('status_id'),
            'event_date' => $params->getVar('event_date'),
            'user_id' => $params->getVar('user_id'),
            'price' => $params->getVar('price')
        ];
        return $this->save($data);
    }

    public function update_data($id, $params){
        $data = [
            'name' => $params->getVar('name'),
            'image_name' => $params->getVar('image_name'),
            'artist_id' => $params->getVar('artist_id'),
            'ticket_limit' => $params->getVar('ticket_limit'),
            'status_id' => $params->getVar('status_id'),
            'event_date' => $params->getVar('event_date'),
            'user_id' => $params->getVar('user_id'),
            'price' => $params->getVar('price')
        ];
        return $this->update($id, $data);
    }
}
