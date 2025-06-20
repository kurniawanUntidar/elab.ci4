<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Userapi extends ResourceController
{
    protected $modelName = 'App\Models\UsersModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $user = $this->model->find($id);
        if ($user) {
            return $this->respond($user);
        } else {
            return $this->failNotFound('Data user tidak ditemukan.');
        }
    }
}

