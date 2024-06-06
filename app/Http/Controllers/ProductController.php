<?php

namespace App\Http\Controllers;

use App\Models\Product;
use stdClass;

class ProductController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'ptq shop, berita ukm ptq unimal, ukm ptq unimal, ukm ptq, ukm, ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Shop Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh';
        $this->meta->url = 'https://ptq.unimal.ac.id/toko';
        $this->meta->type = 'toko';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('toko', [
            'title' => 'PTQ Shop',
            'meta' => $this->meta,
            'products' => Product::latest()->paginate(8)
        ]);
    }
}
