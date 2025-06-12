<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;
use App\Models\UsersModel;

class Pages extends BaseController
{
    protected $UsersModel;
    protected $PeminjamanModel;

    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        $this->PeminjamanModel = new PeminjamanModel();
    }

    public function index(): string
    {
  
        $data['title'] = 'Dashboard';
        $data['users'] = $this->UsersModel->findAll();
        $data = [
            'title' => 'Dashboard',
            'users' => $this->UsersModel->findAll(),
            'peminjaman' => $this->PeminjamanModel->findAll()
        ];
        return view('pages/Dashboard',$data);
    }

    public function about()
    {
        $data['title'] = 'About Us';
        return view('pages/About',$data);
    }
}
