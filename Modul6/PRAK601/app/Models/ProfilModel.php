<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    public function getProfil()
    {
        return [
            'nama'    => 'Rachel Wina Yuda',   
            'nim'     => '2410817220030',        
            'prodi'   => 'Teknologi Informasi',
            'hobi'    => 'Coding, Membaca, Gaming',
            'skill'   => ['PHP', 'JavaScript', 'MySQL', 'Kotlin'],
            'email'   => '2410817220030@mhs.ulm.ac.id',
        ];
    }
}