<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = true;

    public function getComics($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        //kalau slag nya kosong cari semua, kalo tidak jalankan dibawah ini

        return $this->where(['slug' => $slug])->first();
        //yang dari method detail($slug)
    }
}
