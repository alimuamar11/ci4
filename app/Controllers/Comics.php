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
        //$komik = $this->komikModel->findAll(); note1

        $data = [
            'title' => 'daftar komik',
            //'komik' => $komik note1
            'komik' => $this->komikModel->getComics() //tidak perlu parameter karena findall
        ];


        return view('comics/index', $data);
    }

    public function detail($slug) //detail menerima paraameter slug
    {
        //$komik = $this->komikModel->where(['slug' => $slug])->first();
        //supaya rapi ditaruh di komikModel
        //kita ambil komikModel panggil methode where nya adalah slug=slug kemudian ambil data pertama


        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getComics($slug)
        ];
        return view('comics/detail', $data);
    }
}
