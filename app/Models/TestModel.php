<?php namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    // Sesuaikan dengan nama tabel di database lama Anda
    protected $table = 'tb_users';
    protected $primaryKey = 'id'; // Ganti jika primary key Anda berbeda

    protected $useAutoIncrement = true;
    protected $returnType     = 'array'; // 'array' atau 'object'
    protected $useSoftDeletes = false; // Set ke true jika tabel Anda punya kolom 'deleted_at'

    // Daftar kolom yang diizinkan untuk diisi (misalnya saat menyimpan data baru)
    protected $allowedFields = ['name', 'user_id', 'email']; // Sesuaikan dengan kolom tabel Anda

    // Jika tabel Anda memiliki kolom created_at dan updated_at, set ini ke true
    // protected $useTimestamps = false; // Atau true jika ada created_at, updated_at
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at'; // Hanya jika useSoftDeletes = true
}