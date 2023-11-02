<?php
namespace App\Controllers;
class Home extends BaseController {

    public function index() : string
    {
      $mahasiswa = $this->mahasiswaModel->getAllMahasiswa();  
      $data = [
            'title' => 'Home Page',
            'nama' => 'Nurmala Dewi',
            "mahasiswa" => $mahasiswa,
        ];

        //echo view('templates/header', $data);
        //echo view('home', $data);
        //echo view('templates/footer');
        return view('templates/header', $data) .view('home', $data) . view('templates/footer', $data);
    }
}