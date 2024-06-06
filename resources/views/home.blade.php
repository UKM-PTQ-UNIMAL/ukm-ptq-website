@extends('layouts.main')

@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to <span>UKM PTQ</span></h1>
            <h2>Unit Kegiatan Mahasiswa Pengambangan Tilawatil Qur'an</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Selengkapnya <i class="bi bi-arrow-down"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container mb-5 pb-3">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img src="img/logo1.png" class="img-fluid" alt="ptq-unimal">
                </div>
            </div>
            <div class="row text-center justify-content-center mt-4">
                <h3>UKM PTQ UNIMAL</h3>
                <p>UKM PTQ UNIMAL (Unit Kegiatan Mahasiswa Pengembangan Tilawatil Qur'an Universitas Malikussaleh) adalah
                    organisasi mahasiswa yang berfokus pada pembinaan keterampilan membaca Al-Qur'an dengan baik dan benar.
                    UKM ini menyelenggarakan berbagai kegiatan seperti lomba tilawah, pelatihan tajwid, dan kajian keislaman
                    untuk meningkatkan pemahaman dan kecintaan mahasiswa terhadap Al-Qur'an, serta membentuk generasi yang
                    berakhlak baik dan memiliki pemahaman agama yang mendalam.</p>
            </div>
        </div>
        <div class="container">
            <div class="row content">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img src="{{ url('img/contoh.jpg') }}" class="img-fluid foto" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2>Profil</h2>
                                <p>Visi</p>
                            </div>
                            <p>
                                Visi UKM PTQ UNIMAL adalah menjadi wadah utama bagi mahasiswa Universitas Malikussaleh dalam
                                mengembangkan tilawatil Qur'an dan memperdalam pemahaman Islam, menciptakan lingkungan
                                kampus yang religius dan berakhlak mulia.
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="section-title">
                                <p>Misi</p>
                            </div>
                            <p>
                                Untuk mencapai visi tersebut, berikut beberapa misi yang dilakukan oleh IMATA Lhokseumawe -
                                Aceh Utara :
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all text-primary"></i> Menyelenggarakan pelatihan rutin untuk
                                    meningkatkan keterampilan tilawatil Qur'an di kalangan mahasiswa.</li>
                                <li><i class="bi bi-check2-all text-primary"></i> Mengadakan lomba dan kompetisi tilawatil
                                    Qur'an untuk mendorong semangat berprestasi dalam bidang keagamaan</li>
                                <li><i class="bi bi-check2-all text-primary"></i> Mengadakan kajian dan diskusi keislaman
                                    untuk memperdalam pemahaman mahasiswa terhadap ajaran Islam.</li>
                                <li><i class="bi bi-check2-all text-primary"></i> Menciptakan lingkungan kampus yang
                                    mendukung pengamalan nilai-nilai Al-Qur'an dalam kehidupan sehari-hari.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= teras Section ======= -->
    <section id="teras" class="teras">
        <div class="container" data-aos="fade-up">

            <div class="section-title-kanan">
                <h2>Pengurus</h2>
                <p>Pengurus Teras</p>
            </div>

            <div class="row content justify-content-center">
                @foreach ($divisi as $d)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="pengurus">
                            <div class="pengurus-img">
                                @if (file_exists(public_path('img/foto-pengurus/' . $d['foto'])))
                                    <img src="{{ asset('img/foto-pengurus/' . $d['foto']) }}" class="img-fluid"
                                        alt="{{ $d['nama'] }}">
                                @else
                                    <img src="{{ asset('img/foto-pengurus/pengurus-default.png') }}" class="img-fluid"
                                        alt="pengurus-default">
                                @endif
                            </div>
                            <div class="pengurus-info">
                                <h4>{{ $d['nama'] }}</h4>
                                <span>{{ $d['jabatan'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End teras Section -->

    <!-- ======= divisi Section ======= -->
    <section id="Divisi" class="divisi">
        <div class="container">

            <div class="section-title">
                <h2>Divisi</h2>
                <p>Divisi</p>
            </div>

            <div class="row content justify-content-center">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/agama">Keagamaan dan Sosial</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/pelatihan">Pendidikan dan Pelatihan</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/humas">Hubungan Masyarakat</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/pubdok">Publikasi dan Dokumentasi</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/kaderisasi">Kaderisasi dan Pengembangan</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/sekretariat">Kesekretariatan</a></h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
                    <div class="icon-box">
                        <h4 class="title text-uppercase"><a href="/divisi/wirausaha">Kewirausahaan</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End divisi Section -->

    <!-- ======= divisi Section ======= -->
    <section id="berita" class="berita">
        <div class="container">

            <div class="section-title text-center">
                <p>Berita</p>
                <span>Dapatkan Berita terbaru mengenai PTQ UNIMAL</span>
            </div>
            <div class="row content">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="card">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
                            @else
                                <img src="{{ url('img/contoh.jpg') }}" class="card-img-top" alt="...">
                            @endif
                            <div class="card-body">
                                <small class="bi bi-calendar-check"> {{ $post->created_at->format('d M Y') }}</small>
                                <h4 class="title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                <p class="card-text">{{ $post->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="/blog" class="btn btn-primary tombol">Lihat Berita Lainnya <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>


        </div>
    </section><!-- End divisi Section -->

    <!-- kontak -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-lg-5">
                            <div class="row">
                                <div class="col-lg-6 mb-5">
                                    <form action="#">
                                        <h3>Kontak Kami</h3>
                                        <div class="row g-2 mt-4 mb-3">
                                            <div class="col-md">
                                                <label for="name" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nama" required>
                                            </div>
                                            <div class="col-md">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="subject" class="form-label">Subjek</label>
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                placeholder="Subjek" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message" class="form-label">Pesan</label>
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tulis Pesan Anda ..."
                                                required></textarea>
                                            </pre>
                                        </div>
                                        @if (Session::has('status'))
                                            <div class="alert alert-warning">{{ Session::get('status') }}</div>
                                        @endif
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary text-light mt-5" name="kirim"
                                                type="button">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <h3>Hubungi Kami</h3>
                                    <div class="pt-1">
                                        <p><i class="bi bi-telephone-fill"></i> : +62 857-6632-2275 <br>
                                            <i class="bi bi-envelope-fill"></i> : ptq@unimal.ac.id <br>
                                            <i class="bi bi-geo-alt-fill"></i> : Universitas Malikussaleh, Lhokseumawe
                                        </p>
                                    </div>
                                    <h3 class="mt-4 pb-1">Lokasi Kami</h3>
                                    <div class="embed-responsive embed-responsive-21by9 ratio ratio-21x9 mb-5">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127148.4035501836!2d96.974285421242!3d5.201617116903586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304783321066bb13%3A0xeca0b1bf491a9e42!2sUniversitas%20Malikussaleh%20(Kampus%20Bukit%20Indah)!5e0!3m2!1sid!2sus!4v1717679404371!5m2!1sid!2sus"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
