<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\Post;
use stdClass;

class HomeController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'ukm ptq unimal, ukm ptq, ukm, ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an adalah sebuah organisasi yang terdiri dari mahasiswa-mahasiswa UNIMAL yang berkompeten dalam bidang Al-Qur\'an. UKM PTQ bertujuan untuk menjadi wadah bagi mahasiswa/i UNIMAL yang ingin memulai dan mengembangkan bakatnya dalam seni Al-Qur\'an, seperti Tilawatil Qur\'an, Syarhil Qur\'an, Tahsin Qur\'an dan lain-lain.';
        $this->meta->url = 'https://ptq.unimal.ac.id';
        $this->meta->type = 'website';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('home', [
            'title' => 'Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an',
            'meta' => $this->meta,
            'divisi' => Divisi::find2(),
            'posts' => Post::latest()->paginate(3)
        ]);
    }
}
