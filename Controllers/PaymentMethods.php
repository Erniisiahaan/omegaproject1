<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PaymentMethodsModel;

class PaymentMethods extends BaseController
{
    protected $session;

    function __construct(){
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $payment_methods_model = new PaymentMethodsModel();
        $data['payment_methods'] = $payment_methods_model->get_all_data();
        $data['main_view'] = 'payment_methods/index';
        return view('layout', $data);
    }

    public function new(){
        $data['main_view'] = 'payment_methods/new';
        return view('layout', $data);
    }

    public function create(){
        if (!$this->validate([
            'name' => "required|alpha_numeric_space"
        ])) {
            $data['main_view'] = 'payment_methods/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $payment_methods_model = new PaymentMethodsModel();
        $payment_methods_model->create_data($this->request);
        $this->session->setFlashData('success', 'Metode Pembayaran berhasil disimpan');
        return redirect()->to('/payment_methods');
    }
}
