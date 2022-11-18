<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    protected $session;
    
    function __construct()
        {
            $this->session = \Config\Services::session();
        }
    public function index()
    {
        $users_model = new UsersModel();
        $data['users'] = $users_model->get_all_data();
        $data['main_view'] = 'users/index';
        return view('layout', $data);
    }

    public function new(){
        $data['main_view'] = 'users/new';
        return view('layout', $data);
    }

    public function create(){
        if (!$this->validate([
            'name' => "required|alpha_numeric_space"
        ])) {
            $data['main_view'] = 'users/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $users_model = new UsersModel();
        $users_model->create_data($this->request);
        $this->session->setFlashData('success', 'Pengguna berhasil disimpan');
        return redirect()->to('/users');
    }


}
