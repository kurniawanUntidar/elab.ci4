<?php

namespace App\Controllers;
use App\Models\InfoModel;

class Home extends BaseController
{
    protected $InfoModel;

    public function __construct()
    {
        $this->InfoModel = new InfoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home',
            'article' => $this->InfoModel->findAll()
        ];
        return view('guest/Home',$data);
    }
}
