<?php

namespace App\Models;

class Sejarah
{
    private static $content = '
        <p>Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur’an (UKM-PTQ) adalah salah satu unit kegiatan mahasiswa di Universitas Malikussaleh. UKM ini didirikan pada tanggal 15 Sya’ban 1430 H atau 7 Agustus 2009. Pembentukannya diprakarsai oleh mahasiswa-mahasiswi terbaik yang telah mengharumkan nama Unimal dalam Musabaqah Tilawatil Qur’an Antar Mahasiswa tingkat Nasional tahun 2009. Prestasi gemilang ini menjadi tonggak utama terbentuknya UKM-PTQ. Para mahasiswa ini memiliki cita-cita yang sama untuk mempelajari dan menggaungkan firman Allah serta mempertahankan eksistensi Universitas Malikussaleh sebagai gudangnya Qori-Qori’ah.</p>
        <p>Seiring perkembangannya, UKM-PTQ telah mendapatkan legalitas dan izin penuh dari Universitas Malikussaleh. UKM ini berperan penting dalam menjaga dan membentuk karakter mahasiswa melalui implementasi nilai-nilai Al-Qur\'an. Selain itu, UKM-PTQ menumbuhkan bakat generasi muda dalam bidang tilawatil Qur\'an. UKM ini menjadi wadah bagi mahasiswa untuk mengasah kemampuan mereka dalam membaca dan memahami Al-Qur\'an. Ini membekali mereka dengan nilai-nilai islami yang kuat.</p>
        <p><strong>Tujuan utama dari terbentuknya UKM-PTQ UNIMAL</strong> adalah untuk mensinergikan organisasi kealquranan antar fakultas di Universitas Malikussaleh. Selain itu, UKM ini bertujuan untuk menciptakan kader-kader yang mampu bersaing dengan universitas lain melalui bakat dan minat mereka. UKM ini juga berperan dalam mendakwahkan Al-Qur\'an kepada mahasiswa. Kegiatan-kegiatan qurani di lingkungan kampus Universitas Malikussaleh adalah bagian dari dakwah ini.</p>
            <h2 class="judul pt-4">
                Fungsi UKM PTQ UNIMAL
            </h2>
            <ol>
                <li>Membina mahasiswa dalam keterampilan membaca Al-Qur\'an</li>
                <li>Mengembangkan potensi mahasiswa dalam bidang tilawatil Qur\'an</li>
                <li>Mensinergikan organisasi kealquranan antar fakultas di Universitas Malikussaleh.</li>
                <li>Menciptakan kader-kader yang mampu bersaing dengan universitas lain</li>
                <li>Mendakwahkan Al-Qur\'an kepada mahasiswa dan masyarakat melalui kegiatan-kegiatan qurani.</li>
                <li>Menyelenggarakan kajian dan diskusi keislaman untuk memperdalam pemahaman mahasiswa</li>
                <li>Menampung, mengarahkan, menyalurkan, serta memperjuangkan aspirasi mahasiswa dalam menjalankan roda organisasi.</li>
            </ol>
        ';

    public static function all()
    {
        return self::$content;
    }
}
