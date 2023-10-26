<?php

namespace App\Models;

use CodeIgniter\Model;

class mahasiswaModel extends Model{
    protected $table = 'mhs';
    protected $primaryKey ='id';

    protected $useTimestamps = true;

    public function getAllMhs(){
        return $this->findAll();
    }
}