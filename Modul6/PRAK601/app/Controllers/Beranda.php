<?php

namespace App\Controllers;

use App\Models\ProfilModel;

class Beranda extends BaseController
{
    public function index()
    {
        $model = new ProfilModel();
        $data['profil'] = $model->getProfil();
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new ProfilModel();
        $data['profil'] = $model->getProfil();
        return view('profil', $data);
    }
}