<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\UsersModelModel; // Pastikan untuk mengimpor Model yang baru Anda buat

class Test extends BaseController
{
    protected $testModel; // Deklarasikan properti untuk instance Model

    public function __construct()
    {
        $this->testModel = new UsersModel(); // Inisialisasi Model di constructor
    }

    public function index(): string
    {
        // Ambil data dari tabel yang terhubung dengan TestModel
        $data['records'] = $this->testModel->findAll();
       // var_dump($data['records']);

        // Mengirim data ke view dan memuat view
        $data['title'] = 'Test'; // Judul halaman
        return view('Test', $data); // Asumsikan Anda akan membuat view bernama 'test_view.php'
    }

    // Anda bisa menambahkan metode lain di sini (misalnya untuk show, create, update, delete)
}