<?php
namespace App\Controllers;
class Home extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'nama' => 'Nurmala Dewi',
        ];

        echo view('templates/header', $data);
        echo view('home', $data);
        echo view('templates/footer');
    }
}
