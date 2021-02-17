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
        // echo view('layout/header', $data);
        // echo view('pages/home');
        // echo view('layout/footer');

        return view('pages/home', $data); //setelah di rapikan (template.php)
    }


    public function about()
    {
        //kirim data dalam tiap view yang kita punya
        $data = [
            'title' => 'About Me'
        ];
        // // return view('pages/about');
        // echo view('layout/header', $data);
        // echo view('pages/about');
        // echo view('layout/footer');
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl ngawi',
                    'kota' => 'ngawi'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jl batam',
                    'kota' => 'batam kota'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
