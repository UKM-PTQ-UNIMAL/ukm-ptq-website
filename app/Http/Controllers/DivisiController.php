<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisi;
use stdClass;

class DivisiController extends Controller
{
    public $meta;

    public function __construct()
    {
        $this->meta = new stdClass();
        $this->meta->keywords = 'divisi ptq - unimal, ptq - unimal, ptq, unimal, mahasiswa ptq';
        $this->meta->author = 'PUBDOK PTQ UNIMAL';
        $this->meta->description = 'Semua Divisi Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh';
        $this->meta->url = 'https://ptq.unimal.ac.id/divisi';
        $this->meta->type = 'divisi';
        $this->meta->image = 'https://ptq.unimal.ac.id/img/logo.png';
    }

    public function show($divisi)
    {
        $url_divisi = $divisi;
        if ($url_divisi == 'teras') {
            $nama_divisi = 'Pengurus Teras';
        } else if ($url_divisi == 'agama') {
            $nama_divisi = 'Keagamaan dan Sosial';
        } else if ($url_divisi == 'humas') {
            $nama_divisi = 'Hubungan Masyarakat';
        } else if ($url_divisi == 'pubdok') {
            $nama_divisi = 'Publikasi dan Dokumentasi';
        } else if ($url_divisi == 'kaderisasi') {
            $nama_divisi = 'Kaderisasi';
        } else if ($url_divisi == 'sekretariat') {
            $nama_divisi = 'Kesekretariatan';
        } else if ($url_divisi == 'wirausaha') {
            $nama_divisi = 'Kewirausahaan';
        } else if ($url_divisi == 'pelatihan') {
            $nama_divisi = 'Pelatihan';
        }

        $this->meta->keywords = 'divisi ' . $nama_divisi . ' divisi ptq - unimal, ptq - unimal, ptq, unimal, mahasiswa ptq';
        $this->meta->description = 'Divisi ' . $nama_divisi . ' Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur\'an, Universitas Malikussaleh.';
        $this->meta->url = 'https://ptq.unimal.ac.id/divisi/' . $url_divisi;

        return view('divisi', [
            'title' => $nama_divisi,
            'meta' => $this->meta,
            'nama_divisi' => $nama_divisi,
            'divisi' => Divisi::find($divisi)
        ]);
    }
}
