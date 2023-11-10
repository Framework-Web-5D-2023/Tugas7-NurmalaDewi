<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model{
    protected $table = 'mahasiswa';
    protected $primaryKey ='id';

    protected $protectFields = false;
    
    protected $useTimestamps = false;

    public function create($data){
        return $this->insert($data);
    }

     public function getAllMahasiswa(){
         return $this->findAll();
     }
}