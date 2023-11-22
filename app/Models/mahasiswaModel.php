<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model{
    protected $table = 'mahasiswa';
    protected $primaryKey ='id';

    protected $protectFields = false;
    
    protected $useTimestamps = false;

    public function createMahasiswa($data){
        return $this->insert($data);
    }

    // public function create($data){
    // return $this->insert($data);
    // }

    public function getDetailMahasiswa($id){
    return $this->find($id);
    }

    public function updateMahasiswa($id, $data){
    return $this->update($id, $data);
    }

    public function getAllMahasiswa(){
         return $this->findAll();
     }
}