<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArtistModel;

class Artists extends BaseController
{
    protected $session;

    function __construct(){
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $artist_model = new ArtistModel();
        $data['artists'] = $artist_model->get_all_data();
        $data['main_view'] = 'artists/index';
        return view('layout', $data);
    }

    public function new(){
        $data['main_view'] = 'artists/new';
        return view('layout', $data);
    }

    public function create(){
        if (!$this->validate([
            'name' => "required|alpha_numeric_space"
        ])) {
            $data['main_view'] = 'items/new';
            $data['errors'] = $this->validator;
            return view('layout', $data);
        }

        $artist_model = new ArtistModel();
        $artist_model->create_data($this->request);
        $this->session->setFlashData('success', 'Artist berhasil disimpan');
        return redirect()->to('/artists');
    }
}
