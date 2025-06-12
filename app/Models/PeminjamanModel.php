<?php namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    // Sesuaikan dengan nama tabel di database lama Anda
    protected $table = 'tb_pinjam_alat';
    protected $primaryKey = 'id'; // Ganti jika primary key Anda berbeda

    protected $useAutoIncrement = true;
    protected $returnType     = 'array'; // 'array' atau 'object'
  //  protected $useSoftDeletes = false; // Set ke true jika tabel Anda punya kolom 'deleted_at'

    // Daftar kolom yang diizinkan untuk diisi (misalnya saat menyimpan data baru)
    protected $allowedFields = [
        'name',
        'user_id', 
        'keperluan',
        'tempat',
        'judul'
    ]; // Sesuaikan dengan kolom tabel Anda
}