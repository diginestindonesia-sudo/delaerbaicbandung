@extends('layout.index')
@section('section')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb py-4 mb-2">
        <div class="container text-center py-3" style="max-width: 900px;">
            <h3 class="text-white display-5 fw-bold mb-2 wow fadeInDown" data-wow-delay="0.1s">Blogs and News</h3>
            <p class="text-white-50 mb-3">Informasi terkini, ulasan kendaraan, dan berita seputar dealer resmi BAIC Bandung.
            </p>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-primary">Blogs</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Detail Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="blog-detail-item bg-white rounded shadow-sm border p-4 p-lg-5 wow fadeInUp" data-wow-delay="0.1s">

                <!-- Judul Artikel -->
                <h1 class="fw-bold text-dark display-6 mb-3">Keunggulan BAIC BJ40 Plus untuk Medan Off-Road Ekstrem di
                    Indonesia</h1>

                <!-- Gambar Utama -->
                <div class="blog-img mb-4 overflow-hidden rounded-3 shadow-sm text-center bg-light p-2">
                    <img src="img/blog-1.jpg" class="img-fluid rounded w-100" alt="BAIC BJ40 Plus Off-Road"
                        style="max-height: 450px; object-fit: cover;">
                </div>
                <!-- Meta Info: Penulis, Tanggal Upload, & Komentar -->
                <!-- Meta Info: Penulis, Tanggal Upload, & Komentar -->
                <div class="d-flex flex-wrap align-items-center mb-4 pb-3 text-muted small gap-3 gap-md-4">
                    <div>
                        <i class="fa fa-user text-primary me-2"></i> <span class="fw-semibold text-dark">Admin BAIC
                            Bandung</span>
                    </div>
                    <div>
                        <i class="fa fa-calendar-alt text-primary me-2"></i> <span>30 Dec 2025</span>
                    </div>
                </div>
                <!-- Isi Konten Artikel -->
                <div class="blog-text text-secondary lh-lg">
                    <p class="lead text-dark fw-medium mb-4">
                        Mengupas tuntas ketangguhan sistem penggerak 4x4 dan fitur kenyamanan kelas atas dari SUV ikonik
                        BAIC yang siap menaklukkan berbagai medan di Indonesia.
                    </p>
                    <p class="mb-4">
                        BAIC BJ40 Plus hadir sebagai salah satu pilihan utama bagi para pecinta petualangan dan off-road
                        sejati. Dengan desain bodi kotak (<span class="fst-italic">boxish</span>) yang ikonik, kendaraan ini
                        memancarkan ketangguhan yang langsung menarik perhatian di jalan perkotaan maupun jalur tanah
                        bergelombang.
                    </p>

                    <h4 class="fw-bold text-dark mt-4 mb-3">Performa Mesin 2.0L Turbo yang Bertenaga</h4>
                    <p class="mb-4">
                        Ditenagai oleh mesin 2.0 Liter Turbocharged yang dipadukan dengan transmisi otomatis 8-speed yang
                        responsif, BAIC BJ40 Plus mampu menyemburkan tenaga maksimal hingga 221 HP dan torsi 380 Nm.
                        Kombinasi ini memberikan akselerasi yang mantap serta daya cengkeram optimal saat melewati lintasan
                        ekstrem.
                    </p>

                    <div class="p-4 bg-light rounded-3 border-start border-primary border-4 my-4">
                        <p class="mb-0 fst-italic text-dark">
                            "Sistem penggerak 4WD part-time dengan electronic transfer case memungkinkan pengemudi berpindah
                            mode berkendara dengan mudah sesuai kondisi medan jalan."
                        </p>
                    </div>

                    <h4 class="fw-bold text-dark mt-4 mb-3">Kenyamanan Kabin dan Fitur Modern</h4>
                    <p class="mb-4">
                        Tidak hanya tangguh di luar, kabin BAIC BJ40 Plus dirancang dengan kenyamanan tingkat tinggi.
                        Dilengkapi dengan jok kulit ergonomis, sistem hiburan layar sentuh modern, serta peredam kabin yang
                        kedap suara, perjalanan jauh bersama keluarga tetap terasa menyenangkan dan berkelas.
                    </p>
                    <p class="mb-4">
                        Kunjungi showroom resmi BAIC Bandung untuk melihat langsung unit display dan jadwalkan sesi test
                        drive Anda hari ini bersama tim sales profesional kami.
                    </p>
                </div>
                <div class="d-flex flex-wrap align-items-center mb-4 pb-3 text-muted small gap-3 gap-md-4">
                    <div>
                        <i class="fa fa-comment-alt text-primary me-2"></i> <span>6 Comments</span>
                    </div>
                </div>

                <!-- Tombol Kembali & Bagikan -->
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 pt-4 border-top gap-3">
                    <a href="blogs.html" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold">
                        <i class="fa fa-arrow-left me-2"></i> Kembali ke Blog
                    </a>
                    <div class="d-flex align-items-center gap-2">
                        <span class="small fw-semibold text-muted me-2">Bagikan:</span>
                        <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"
                            style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-info rounded-circle"
                            style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://wa.me/?text=Simak%20artikel%20menarik%20seputar%20BAIC%20di%20sini!"
                            target="_blank" class="btn btn-sm btn-outline-success rounded-circle"
                            style="width: 35px; height: 35px; display: flex; align-items: center; justify-content: center;"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Detail End -->
@endsection
