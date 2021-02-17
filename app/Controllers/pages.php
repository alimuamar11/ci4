<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        //kirim data dalam tiap view yang kita punya
        $data = [
            'title' => 'Home | Muamar'
        ];
        // return view('pages/home');
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }


    public function about()
    {
        //kirim data dalam tiap view yang kita punya
        $data = [
            'title' => 'About Me'
        ];
        // return view('pages/about');
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
}
