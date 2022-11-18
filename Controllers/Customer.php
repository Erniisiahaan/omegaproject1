<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;

class Customer extends BaseController
{
    protected $session;

    function __construct(){
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $customer_model = new CustomerModel();
        $data['customer'] = $customer_model->get_all_data();
        $data['main_view'] = 'customer/index';
        return view('layout', $data);
    }

    public function new(){
        $data['main_view'] = 'customer/new';
        return view('layout', $data);
    }

    public function create(){
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'status_id' => "required|int",
            'phone_number' => "required|int",
            'email' => "required|alpha_numeric_space"
        ])) {
            $data['main_view'] = 'items/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $customer_model = new CustomerModel();
        $customer_model->create_data($this->request);
        $this->session->setFlashData('success', 'Artist berhasil disimpan');
        return redirect()->to('/customer');
    }
}
