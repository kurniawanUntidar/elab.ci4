<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use App\Models\UsersModel; // Sesuaikan dengan model user Anda

class Auth extends BaseController
{
    use ResponseTrait;

    public function login()
    {
        $allSessionData = $this->session->get();
        var_dump($allSessionData);
        $data = [
            'title' => 'Login'];

        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $userModel = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        return view('pages/Login',$data);

        // if (!$user || !password_verify($password, $user['password'])) {
        //     return $this->failUnauthorized('Email atau password salah.');
        // }

        // // User ditemukan dan password cocok, buat JWT
        // helper('jwt_helper'); // Pastikan helper dimuat
        // $token = createJWT(['user_id' => $user['id'], 'email' => $user['email']]);

        //return $this->respond(['message' => 'Login berhasil!', 'token' => $token]);
    }
}
