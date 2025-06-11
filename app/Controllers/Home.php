<?php

namespace App\Controllers;
use Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $query = 'SELECT * FROM `tb_users` WHERE `is_active`=1';
        $jumlah_users = $db->query($query);
        // $jumlah_users = $query_users->result;
        var_dump($jumlah_users);
        $data['title'] = 'Dashboard';
        return view('Dashboard',$data);
    }
}
