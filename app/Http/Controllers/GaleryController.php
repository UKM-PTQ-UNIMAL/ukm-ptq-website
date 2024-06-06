<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use stdClass;

class GaleryController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'galery foto berita ukm ptq unimal, ukm ptq unimal, ukm ptq, ukm, ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh';
        $this->meta->url = 'https://ptq.unimal.ac.id/galery';
        $this->meta->type = 'galery';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        $posts = Post::latest()->get();
        $images = [];

        foreach ($posts as $post) {
            $images[] = [
                'title' => $post->title,
                'image' => $post->image,
            ];
        }

        return view('galeri', [
            'title' => 'Galery Foto Berita',
            'meta' => $this->meta,
            'images' => $images
        ]);
    }
}
