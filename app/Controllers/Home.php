<?php
namespace App\Controllers;
class Home extends BaseController {

    public function __construct()
    {
        $this->session = \Config\Services::session();
        // ...
    }

    public function createMahasiswa(){
        $nama = $this->request->getVar("nama");
        $npm = $this->request->getVar("npm");
        $prodi = $this->request->getVar("prodi");

        $data =[
            "nama" => $nama,
            "npm" => $npm,
            "prodi" => $prodi,
        ];

        $this -> mahasiswaModel -> create($data);
        $this -> session->setFlashData("success", "mahasiswa has been added");
        //$this->session = \Config\Services::session();
        return redirect ()-> to (base_url("/"));
    }

    
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
        return view('templates/header', $data) .view('home', $data) . view('templates/footer', $data). view('form', $data);
    }
    
}