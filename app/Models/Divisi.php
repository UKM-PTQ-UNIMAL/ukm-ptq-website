<?php

namespace App\Models;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Firgiawan L. Aripman",
            "jabatan" => "Ketua Umum",
            "foto" => "firgi.jpg",
            "divisi" => "teras",
        ],
        [
            "nama" => "Dzul Khaira Riddhan",
            "jabatan" => "Wakil Ketua Umum",
            "foto" => "riddhan.jpg",
            "divisi" => "teras",
        ],
        [
            "nama" => "Aulia Syuhada",
            "jabatan" => "Sekretaris Umum",
            "foto" => "syuhada.jpg",
            "divisi" => "teras",
        ],
        [
            "nama" => "Yulia Hafidzah Sinaga",
            "jabatan" => "Bendahara Umum",
            "foto" => "yulia.png",
            "divisi" => "teras",
        ],

        // Keagamaan dan Sosial
        [
            "nama" => "Syahril Arifin Namonangan Nst",
            "jabatan" => "Anggota",
            "foto" => "syahril.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Alia Fati'ah",
            "jabatan" => "Anggota",
            "foto" => "alia.jpg",
            "divisi" => "agama",
        ],
        [
            "nama" => "Nasa Aulia",
            "jabatan" => "Anggota",
            "foto" => "nasa.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Afnita Fitria",
            "jabatan" => "Anggota",
            "foto" => "afnita.jpg",
            "divisi" => "agama",
        ],
        [
            "nama" => "Juliana",
            "jabatan" => "Anggota",
            "foto" => "juliana.png",
            "divisi" => "agama",
        ],

        // HUMAS
        [
            "nama" => "Muhammad Habibi",
            "jabatan" => "Ketua Divisi",
            "foto" => "habibi.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Bella Aldama",
            "jabatan" => "Anggota",
            "foto" => "bella.jpg",
            "divisi" => "humas",
        ],
        [
            "nama" => "Johanda Hasibuan",
            "jabatan" => "Anggota",
            "foto" => "johanda.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Lukman Nul Hakim",
            "jabatan" => "Anggota",
            "foto" => "lukman.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Ripan Kurniawan",
            "jabatan" => "Anggota",
            "foto" => "ripan.jpg",
            "divisi" => "humas",
        ],
        [
            "nama" => "Tiara Mayang Syahfitri",
            "jabatan" => "Anggota",
            "foto" => "tiara.jpg",
            "divisi" => "humas",
        ],

        // Publikasi & Dokumentasi
        [
            "nama" => "Said Al-Ghiyats",
            "jabatan" => "Ketua Divisi",
            "foto" => "said.jpg",
            "divisi" => "pubdok",
        ],
        [
            "nama" => "Anisa Tarihoran",
            "jabatan" => "Anggota",
            "foto" => "anisa.png",
            "divisi" => "pubdok",
        ],
        [
            "nama" => "Muhammad Hanafi",
            "jabatan" => "Anggota",
            "foto" => "hanafi.png",
            "divisi" => "pubdok",
        ],
        [
            "nama" => "Putri Amalia",
            "jabatan" => "Anggota",
            "foto" => "putri.jpg",
            "divisi" => "pubdok",
        ],
        [
            "nama" => "Randi Akbar Syahputra",
            "jabatan" => "Anggota",
            "foto" => "randi.jpg",
            "divisi" => "pubdok",
        ],

        // Kesekretariatan
        [
            "nama" => "Wanda Baskoro",
            "jabatan" => "Ketua Bidang",
            "foto" => "wanda.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Dinda Pratiwi",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "dinda.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Andini",
            "jabatan" => "Anggota",
            "foto" => "andini.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Delia Permata Sari",
            "jabatan" => "Anggota",
            "foto" => "delia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Meisya Aprilia",
            "jabatan" => "Anggota",
            "foto" => "aprilia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Mutia Sari",
            "jabatan" => "Anggota",
            "foto" => "mutia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Nurafni",
            "jabatan" => "Anggota",
            "foto" => "nurafni.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Samsul Bahri",
            "jabatan" => "Anggota",
            "foto" => "samsul.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Srik Wardhani",
            "jabatan" => "Anggota",
            "foto" => "srik.png",
            "divisi" => "sekretariat",
        ],

        // kwh
        [
            "nama" => "Aji Priansyah",
            "jabatan" => "Ketua Bidang",
            "foto" => "aji.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Natasya Riska Amalia Hardi",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "amalia.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Cindi Maharani",
            "jabatan" => "Anggota",
            "foto" => "cindi.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Dwiyana Anggreini",
            "jabatan" => "Anggota",
            "foto" => "dwiyana.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Erna Harmadani",
            "jabatan" => "Anggota",
            "foto" => "erna.png",
            "divisi" => "kwh",
        ],
        [
            "nama" => "Nurjanah",
            "jabatan" => "Anggota",
            "foto" => "nurjanah.png",
            "divisi" => "kwh",
        ],

        // Seni
        [
            "nama" => "Anggi Syafitri",
            "jabatan" => "Ketua",
            "foto" => "anggi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Darmi Samosir",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "darmi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Ade Meliza Tri Amanda",
            "jabatan" => "Anggota",
            "foto" => "meliza.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Desi Syafitri",
            "jabatan" => "Anggota",
            "foto" => "desi.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Frety Sri Rizki",
            "jabatan" => "Anggota",
            "foto" => "frety.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Indah Ayu Lestari",
            "jabatan" => "Anggota",
            "foto" => "indah.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Yasya Almira",
            "jabatan" => "Anggota",
            "foto" => "almira.png",
            "divisi" => "seni",
        ],
        [
            "nama" => "Yunita Anggraeni Simatupang",
            "jabatan" => "Anggota",
            "foto" => "yunita.png",
            "divisi" => "seni",
        ],

        // Olahraga
        [
            "nama" => "M. Syahputra",
            "jabatan" => "Ketua Bidang",
            "foto" => "syahputra.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Dwi ariska",
            "jabatan" => "Sekretaris Bidang",
            "foto" => "ariska.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Muhammad Sufardan",
            "jabatan" => "Anggota",
            "foto" => "sufardan.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Putra Taufiqurrahman Ariza",
            "jabatan" => "Anggota",
            "foto" => "taufiq.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Tito Gilang Samudra",
            "jabatan" => "Anggota",
            "foto" => "tito.png",
            "divisi" => "olahraga",
        ],
        [
            "nama" => "Muhammad Maizaki",
            "jabatan" => "Anggota",
            "foto" => "maizaki.png",
            "divisi" => "olahraga",
        ],
    ];

    public static function all()
    {
        return collect(self::$pengurus);
    }

    public static function find($divisi)
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', $divisi);
    }

    public static function find2()
    {
        $pengurus = static::all();

        return $pengurus->where('divisi', 'teras');
    }
}
