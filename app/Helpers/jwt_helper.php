<?php
// app/Helpers/jwt_helper.php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function getJWTKey()
{
    return getenv('JWT_SECRET_KEY');
}

function createJWT($data)
{
    $key = getJWTKey();
    $iat = time(); // issued at
    $exp = $iat + 3600; // token expired after 1 hour (sesuaikan)

    $payload = [
        'iss' => 'CodeIgniter RESTful API', // Issuer of the token
        'aud' => 'users', // Audience
        'iat' => $iat,
        'exp' => $exp,
        'data' => $data // Data yang ingin disimpan di token (misal: user_id, role)
    ];

    return JWT::encode($payload, $key, 'HS256');
}

function validateJWT($token)
{
    $key = getJWTKey();
    try {
        $decoded = JWT::decode($token, new Key($key, 'HS256'));
        return (array) $decoded->data;
    } catch (\Exception $e) {
        return false; // Token tidak valid atau expired
    }
}