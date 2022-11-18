<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if(!$this->session->get('user_id')) {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/index';
        return view('layout', $data);
    }
    
    public function dashboard()
    {
        if(!$this->session->get('user_id')){
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/dashboard';
        return view('layout', $data);
    }

    public function event()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/event';
        return view('layout', $data);
    }

    public function layout()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/layout';
        return view('layout', $data);
    }

    public function penjualan()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/penjualan';
        return view('layout', $data);
    }

    public function pembelian()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/pembelian';
        return view('layout', $data);
    }

    public function sisa()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='pages/sisa';
        return view('layout', $data);
    }

    public function new()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        
        $data['main_view']='items/new';
        return view('layout', $data);
    }
}