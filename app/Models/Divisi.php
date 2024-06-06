<?php

namespace App\Models;

class Divisi
{
    private static $pengurus = [
        // Teras
        [
            "nama" => "Firgiawan L. Aripman",
            "jabatan" => "Ketua Umum",
            "foto" => "firgi.png",
            "divisi" => "teras",
        ],
        [
            "nama" => "Dzul Khaira Riddhan",
            "jabatan" => "Wakil Ketua Umum",
            "foto" => "riddhan.png",
            "divisi" => "teras",
        ],
        [
            "nama" => "Aulia Syuhada",
            "jabatan" => "Sekretaris Umum",
            "foto" => "syuhada.png",
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
            "jabatan" => "Ketua Divisi",
            "foto" => "syahril.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Alia Fati'ah",
            "jabatan" => "Anggota",
            "foto" => "alia.png",
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
            "foto" => "afnita.png",
            "divisi" => "agama",
        ],
        [
            "nama" => "Juliana",
            "jabatan" => "Anggota",
            "foto" => "juliana.png",
            "divisi" => "agama",
        ],

        // Pendidikan dan Pelatihan
        [
            "nama" => "Tiara Mahkota Rizki",
            "jabatan" => "Ketua Divisi",
            "foto" => "tiara.png",
            "divisi" => "pelatihan",
        ],
        [
            "nama" => "Alia Avanza",
            "jabatan" => "Anggota",
            "foto" => "alia.png",
            "divisi" => "pelatihan",
        ],
        [
            "nama" => "Husna Az-Zahra",
            "jabatan" => "Anggota",
            "foto" => "husna.png",
            "divisi" => "pelatihan",
        ],
        [
            "nama" => "Wanda April Pratama ",
            "jabatan" => "Anggota",
            "foto" => "april.png",
            "divisi" => "pelatihan",
        ],
        [
            "nama" => "Yasmin Suci Mauliza",
            "jabatan" => "Anggota",
            "foto" => "yasmin.png",
            "divisi" => "pelatihan",
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
            "foto" => "bella.png",
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
            "foto" => "ripan.png",
            "divisi" => "humas",
        ],
        [
            "nama" => "Tiara Mayang Syahfitri",
            "jabatan" => "Anggota",
            "foto" => "mayang.png",
            "divisi" => "humas",
        ],

        // Publikasi & Dokumentasi
        [
            "nama" => "Said Al-Ghiyats",
            "jabatan" => "Ketua Divisi",
            "foto" => "said.png",
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
            "foto" => "putri.png",
            "divisi" => "pubdok",
        ],
        [
            "nama" => "Randi Akbar Syahputra",
            "jabatan" => "Anggota",
            "foto" => "randi.png",
            "divisi" => "pubdok",
        ],

        // Kaderisasi
        [
            "nama" => "Alfisyahri Ramadhani",
            "jabatan" => "Ketua Divisi",
            "foto" => "alfisyahri.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Ade Afriwaldi",
            "jabatan" => "Anggota",
            "foto" => "ade.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Linda Hanisa",
            "jabatan" => "Anggota",
            "foto" => "linda.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Nurwahid Habibi",
            "jabatan" => "Anggota",
            "foto" => "wahid.png",
            "divisi" => "kaderisasi",
        ],
        [
            "nama" => "Setia Wanda",
            "jabatan" => "Anggota",
            "foto" => "wanda.png",
            "divisi" => "kaderisasi",
        ],

        // Kesekretariatan
        [
            "nama" => "Nazwa Shandy Aulia",
            "jabatan" => "Ketua Divisi",
            "foto" => "nazwa.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Ilham Ageng Dwi Satria",
            "jabatan" => "Anggota",
            "foto" => "ilham.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Lybia Amanda",
            "jabatan" => "Anggota",
            "foto" => "lybia.png",
            "divisi" => "sekretariat",
        ],
        [
            "nama" => "Sarikha Aq Malia",
            "jabatan" => "Anggota",
            "foto" => "sarikha.png",
            "divisi" => "sekretariat",
        ],

        // Kewirausahaan
        [
            "nama" => "Husnul Ridho Matondang",
            "jabatan" => "Ketua Divisi",
            "foto" => "husnul.png",
            "divisi" => "wirausaha",
        ],
        [
            "nama" => "Ervina Permatasari",
            "jabatan" => "Anggota",
            "foto" => "ervina.png",
            "divisi" => "wirausaha",
        ],
        [
            "nama" => "Nurul A'la",
            "jabatan" => "Anggota",
            "foto" => "nurul.png",
            "divisi" => "wirausaha",
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
