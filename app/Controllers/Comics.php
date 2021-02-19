<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Comics extends BaseController
{

    protected $komikModel;
    public function __construct() //semua methode bisa pakai
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'daftar komik',
            'komik' => $komik
        ];


        return view('comics/index', $data);
    }
}
