<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EventModel;

class Event extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $event_model = new EventModel();
        $data['event'] = $event_model->get_all_data();
        $data['main_view'] = 'event/index';
        return view('layout', $data);
    }

    public function new(){
        $data['main_view'] = 'event/new';
        return view('layout', $data);
    }

    public function create(){
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'iamge_name' => 'required|alpha_numeric_space',
            'artis_id' => 'required|integer',
            'ticket_limit' => 'required|integer',
            'status_id' => 'required|integer',
            'event_date' => 'required|valid_date',
            'user_id' => 'required|integer',
            'price' => 'required|integer',
        ])) {
            $data['main_view'] = 'event/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $event_model = new EventModel();
        $event_model->create_data($this->request);
        $this->session->setFlashData('success', 'Event berhasil disimpan');
        return redirect()->to('/event');
    }
}
