<?php

namespace App\Controllers;
use App\Models\InfoModel;

class Auth extends BaseController
{
    protected $InfoModel;

    public function __construct()
    {
    
    }

    public function index()
    {
        $data = [
            'title' => 'Login'];
        return view('pages/Login',$data);
    }
}
