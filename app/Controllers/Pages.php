<?php

namespace App\Controllers;
use App\Models;
use App\Models\UsersModel;

class Pages extends BaseController
{
    protected $UsersModel;
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    public function index(): string
    {
  
        $data['title'] = 'Dashboard';
        $data['users'] = $this->UsersModel->findAll();
       // $count = sizeof($data['users']);
        return view('pages/Dashboard',$data);
    }

    public function about()
    {
        $data['title'] = 'About Us';
        return view('pages/About',$data);
    }
}
