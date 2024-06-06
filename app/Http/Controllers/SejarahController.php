<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use stdClass;

class SejarahController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'sejarah ukm ptq unimal, ukm ptq unimal, ukm ptq, ukm, ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur’an (UKM-PTQ) didirikan pada tanggal 15 sya’ban 1430 H atau bertepat pada tanggal 07 Agustus 2009.';
        $this->meta->url = 'https://ptq.unimal.ac.id/sejarah';
        $this->meta->type = 'sejarah';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }

    public function index()
    {
        return view('sejarah', [
            'title' => 'Sejarah Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh',
            'meta' => $this->meta,
            'content' => Sejarah::all()
        ]);
    }
}
