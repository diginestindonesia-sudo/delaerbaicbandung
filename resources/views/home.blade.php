@extends('layout.index')
@section('section')
    <!-- Carousel Start -->
    {{-- <div class="header-carousel mb-5">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">
                                    <div class="bg-secondary rounded p-5">
                                        <h4 class="text-white mb-4">Card Promo</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                                        <h1 class="display-5 text-white">Promo & Penawaran Terbaik BAIC Bandung</h1>
                                        <p>Langsung dari Tim Personal Sales Resmi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="First slide" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5">
                                <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">
                                    <div class="bg-secondary rounded p-5">
                                        <h4 class="text-white mb-4">CONTINUE CAR RESERVATION</h4>
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Your Car type</option>
                                                        <option value="1">VW Golf VII</option>
                                                        <option value="2">Audi A1 S-Line</option>
                                                        <option value="3">Toyota Camry</option>
                                                        <option value="4">BMW 320 ModernLine</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-map-marker-alt"></span><span
                                                                class="ms-1">Pick Up</span>
                                                        </div>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter a City or Airport"
                                                            aria-label="Enter a City or Airport">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <a href="#" class="text-start text-white d-block mb-2">Need a
                                                        different drop-off location?</a>
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-map-marker-alt"></span><span
                                                                class="ms-1">Drop off</span>
                                                        </div>
                                                        <input class="form-control" type="text"
                                                            placeholder="Enter a City or Airport"
                                                            aria-label="Enter a City or Airport">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-calendar-alt"></span><span
                                                                class="ms-1">Pick Up</span>
                                                        </div>
                                                        <input class="form-control" type="date">
                                                        <select class="form-select ms-3"
                                                            aria-label="Default select example">
                                                            <option selected>12:00AM</option>
                                                            <option value="1">1:00AM</option>
                                                            <option value="2">2:00AM</option>
                                                            <option value="3">3:00AM</option>
                                                            <option value="4">4:00AM</option>
                                                            <option value="5">5:00AM</option>
                                                            <option value="6">6:00AM</option>
                                                            <option value="7">7:00AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-group">
                                                        <div
                                                            class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                            <span class="fas fa-calendar-alt"></span><span
                                                                class="ms-1">Drop off</span>
                                                        </div>
                                                        <input class="form-control" type="date">
                                                        <select class="form-select ms-3"
                                                            aria-label="Default select example">
                                                            <option selected>12:00AM</option>
                                                            <option value="1">1:00AM</option>
                                                            <option value="2">2:00AM</option>
                                                            <option value="3">3:00AM</option>
                                                            <option value="4">4:00AM</option>
                                                            <option value="5">5:00AM</option>
                                                            <option value="6">6:00AM</option>
                                                            <option value="7">7:00AM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-light w-100 py-2">Book Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-7 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start">
                                        <h1 class="display-5 text-white">Pilihan Unit SUV BAIC Premium </h1>
                                        <p>BJ40 Plus & X55 II siap menemani petualangan Anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="header-carousel mb-5">
        <!-- Carousel diset pindah otomatis dengan interval 5 detik -->
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="img/baicbandung5.jpg" class="img-fluid w-100" alt="BAIC Bandung Promo" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <!-- Menggunakan align-items-start agar konten kiri dan kanan sejajar dari atas -->
                            <div class="row g-5 align-items-start">

                                <!-- DESKTOP: Card Promo Lebar Proporsional (col-lg-4 / col-lg-5) | MOBILE: Tombol Pop-up -->
                                <div class="col-lg-1 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">

                                    <!-- Tampil di Desktop saja (d-none d-lg-block) -->
                                    {{-- <div class="bg-secondary rounded p-4 text-start d-none d-lg-block shadow-lg">
                                        <h4 class="text-white mb-3">🔥 Special BAIC Promo</h4>
                                        <p class="text-white mb-4">Dapatkan penawaran DP ringan dan cicilan terbaik khusus
                                            wilayah Bandung bulan ini.</p>
                                        <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
                                            class="btn btn-success w-100 py-3 fw-bold">
                                            <i class="fab fa-whatsapp me-2"></i> Claim Promo via WhatsApp
                                        </a>
                                    </div> --}}

                                    <!-- Tampil di Mobile saja (d-block d-lg-none) - Membuka Pop-up Modal Langsung -->
                                    <div class="d-block d-lg-none text-center">
                                        <button type="button" class="btn btn-danger btn-lg w-100 py-3 fw-bold shadow"
                                            data-bs-toggle="modal" data-bs-target="#promoModal">
                                            🎁 Lihat Promo Spesial BAIC
                                        </button>
                                    </div>

                                </div>

                                <!-- Tagline Utama (Dipastikan menempel di atas dengan mt-0) -->
                                <div class="col-lg-11 d-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start mt-0 pt-0">
                                        <h1 class="display-5 text-white fw-bold mb-3">Promo & Penawaran Terbaik BAIC Bandung
                                        </h1>
                                        <p class="lead text-white">Langsung dari Tim Personal Sales Resmi. Proses Cepat &
                                            Data Dibantu!</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="img/baicbandung4.jpg" class="img-fluid w-100" alt="BAIC Bandung Unit" />
                    <div class="carousel-caption">
                        <div class="container py-4">
                            <div class="row g-5 align-items-start">


                                <!-- DESKTOP: Poster Promo | MOBILE: Tombol Pop-up -->
                                <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                    style="animation-delay: 1s;">

                                    <!-- Tampil di Desktop saja (Berupa Gambar Poster Promo) -->
                                    <div class="d-none d-lg-block">
                                        <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
                                            title="Hubungi Sales untuk Promo Ini">
                                            <img src="img/baicpromo2.jpg" alt="Promo Spesial BAIC"
                                                class="img-fluid rounded shadow-lg"
                                                style="max-height: 520px; width: auto; object-fit: contain;">
                                        </a>
                                    </div>

                                    <!-- Tampil di Mobile saja -->
                                    <!-- Bagian Tombol Mobile -->
                                    <div class="col-lg-5 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                                        style="animation-delay: 1s;">

                                        <!-- Tampil di Mobile saja (Memicu Modal Pop-up) -->
                                        <div class="d-block d-lg-none text-center">
                                            <button type="button" class="btn btn-danger btn-lg w-100 py-3 fw-bold shadow"
                                                data-bs-toggle="modal" data-bs-target="#promoModal">
                                                🎁 Lihat Promo Spesial BAIC
                                            </button>
                                        </div>

                                    </div>

                                    <!-- Modal Pop-up Promo untuk Mobile -->
                                    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content bg-dark text-white border-0 shadow-lg">
                                                <div class="modal-header border-0 pb-0">
                                                    <h5 class="modal-title fw-bold text-warning" id="promoModalLabel">🎁
                                                        Promo Spesial BAIC</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center p-3">
                                                    <a href="https://wa.me/628xxxxxxxxxx" target="_blank">
                                                        <img src="img/baicpromo2.jpg" alt="Promo Spesial BAIC"
                                                            class="img-fluid rounded shadow w-100">
                                                    </a>
                                                </div>
                                                <div class="modal-footer border-0 pt-0 justify-content-center">
                                                    <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
                                                        class="btn btn-success w-100 py-2 fw-bold">
                                                        <i class="fab fa-whatsapp me-2"></i> Hubungi Sales Sekarang
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Tagline Utama -->
                                <div class="col-lg-7 d-flex fadeInRight animated" data-animation="fadeInRight"
                                    data-delay="1s" style="animation-delay: 1s;">
                                    <div class="text-start mt-0 pt-0">
                                        <h1 class="display-5 text-white fw-bold mb-3">Pilihan Unit SUV BAIC Premium</h1>
                                        <p class="lead text-white">BJ40 Plus & X55 II siap menemani petualangan Anda di
                                            Bandung.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- BOOTSTRAP MODAL (POP-UP KHUSUS LAYAR HP)    -->
    <!-- ========================================== -->
    <div class="modal fade" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-secondary text-white border-0 shadow-lg rounded-4">
                <div class="modal-header border-bottom border-dark">
                    <h5 class="modal-title fw-bold" id="promoModalLabel">🔥 Penawaran Spesial BAIC Bandung</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <p class="mb-3">Dapatkan promo DP ringan, bunga spesial, dan bonus menarik langsung dari tim
                        marketing
                        kami.</p>
                    <a href="https://wa.me/628xxxxxxxxxx" target="_blank"
                        class="btn btn-success w-100 py-3 fw-bold shadow">
                        <i class="fab fa-whatsapp me-2"></i> Chat Sales via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden about py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="pb-5">
                            <h1 class="display-5 text-capitalize">Dealer <span class="text-primary">Baic</span> Bandung
                            </h1>
                            <p class="mb-0">Dealer resmi BAIC Bandung hadir sebagai pusat penjualan terpercaya yang
                                menyediakan rangkaian lini produk mobil terbaru dan berkualitas tinggi dari BAIC, lengkap
                                dengan berbagai penawaran serta layanan pendukung terbaik untuk memenuhi kebutuhan mobilitas
                                Anda.<br /> Keunggulan layanan kami didukung penuh oleh tim marketing yang profesional,
                                berpengalaman, dan terpercaya. Kami siap memberikan pendampingan konsultasi produk secara
                                menyeluruh serta membantu proses kepemilikan kendaraan impian Anda dengan mudah, aman, dan
                                nyaman.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img src="img/about-icon-1.png" class="img-fluid w-50 h-50" alt="Icon">
                                    </div>
                                    <h5 class="mb-3">Tim Marketing Berpengalaman Dan Profesional</h5>
                                    {{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-item-inner border p-4">
                                    <div class="about-icon mb-4">
                                        <img src="img/about-icon-2.png" class="img-fluid h-50 w-50" alt="Icon">
                                    </div>
                                    <h5 class="mb-3">Layanan Konsultasi Dan Terpercaya</h5>
                                    {{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="img/dealerbaicbandung1.jpg" class="img-fluid rounded h-100 w-100" alt="">
                        </div>
                        <div class="img-2">
                            <img src="img/dealerbaicbandung2.jpg" class="img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Car categories Start -->
    <div class="container-fluid categories py-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Cars</span></h1>
                <p class="mb-0">Explore our premium and high-tech SUV lineup from BAIC, designed to elevate your driving
                    experience and modern lifestyle
                </p>
            </div>
            <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">

                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                            <div class="mb-4">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                <h5 class="text-primary fw-bold mb-0">Rp 783.000.000</h5>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-car text-dark d-block mb-1"></i> <span>Off-Road SUV</span>
                                </div>
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>2.0L Turbo</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>8-Speed AT</span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#detailModal" style="font-size: 0.9rem;">
                                Lihat Detail & Spesifikasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                            <div class="mb-4">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                <h5 class="text-primary fw-bold mb-0">Rp 783.000.000</h5>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-car text-dark d-block mb-1"></i> <span>Off-Road SUV</span>
                                </div>
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>2.0L Turbo</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>8-Speed AT</span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#detailModal" style="font-size: 0.9rem;">
                                Lihat Detail & Spesifikasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                            <div class="mb-4">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                <h5 class="text-primary fw-bold mb-0">Rp 783.000.000</h5>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-car text-dark d-block mb-1"></i> <span>Off-Road SUV</span>
                                </div>
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>2.0L Turbo</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>8-Speed AT</span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#detailModal" style="font-size: 0.9rem;">
                                Lihat Detail & Spesifikasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                            <div class="mb-4">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                <h5 class="text-primary fw-bold mb-0">Rp 783.000.000</h5>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-car text-dark d-block mb-1"></i> <span>Off-Road SUV</span>
                                </div>
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>2.0L Turbo</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>8-Speed AT</span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#detailModal" style="font-size: 0.9rem;">
                                Lihat Detail & Spesifikasi
                            </button>
                        </div>
                    </div>
                </div>

                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top">
                            <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                            <div class="mb-4">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                <h5 class="text-primary fw-bold mb-0">Rp 783.000.000</h5>
                            </div>
                            <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-car text-dark d-block mb-1"></i> <span>Off-Road SUV</span>
                                </div>
                                <div class="col-4 border-end border-light">
                                    <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>2.0L Turbo</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>8-Speed AT</span>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#detailModal" style="font-size: 0.9rem;">
                                Lihat Detail & Spesifikasi
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Car categories End -->

    <!-- Modal Detail Produk/Kendaraan BAIC (Dinamis & Informatif) -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-white text-dark border-0 shadow-lg rounded-4 overflow-hidden">

                <!-- Modal Header (Background Putih & Elegan) -->
                <div class="modal-header bg-white text-dark px-4 py-3 border-bottom">
                    <h5 class="modal-title fw-bold text-dark" id="detailModalLabel">
                        <i class="fa fa-car text-danger me-2"></i> <span id="modalCarName">BAIC BJ40 Plus</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body p-4">
                    <div class="row g-4 align-items-center">
                        <!-- Kolom Kiri: Gambar & Harga -->
                        <div class="col-md-5 text-center border-end-md">
                            <img id="modalCarImg" src="img/baic_bj40_plus.jpg" alt="BAIC Car"
                                class="img-fluid rounded-3 shadow-sm w-100 mb-3"
                                style="object-fit: cover; max-height: 230px;">
                            <div class="p-3 bg-light rounded-3">
                                <span class="d-block text-muted text-uppercase fw-semibold"
                                    style="font-size: 0.7rem; letter-spacing: 1px;">Harga OTR (On The Road)</span>
                                <h4 id="modalCarPrice" class="text-primary fw-bold mb-0">Rp 783.000.000</h4>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Spesifikasi Lengkap -->
                        <div class="col-md-7">
                            <h6 class="fw-bold text-dark mb-3"><i class="fa fa-info-circle text-danger me-1"></i>
                                Spesifikasi & Performa Utama</h6>

                            <div class="row g-2">
                                <!-- Jenis Bodi -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-car text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block"
                                                style="font-size: 0.65srem; font-size: 10px;">Jenis Bodi</small>
                                            <span id="modalBodyType" class="fw-semibold text-dark small">Off-Road
                                                SUV</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tipe Mesin -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-cogs text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block" style="font-size: 10px;">Tipe Mesin</small>
                                            <span id="modalEngineType" class="fw-semibold text-dark small">2.0L Turbo
                                                Petrol</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Transmisi -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-sliders-h text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block" style="font-size: 10px;">Transmisi</small>
                                            <span id="modalTransmission" class="fw-semibold text-dark small">8-Speed
                                                AT</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sistem Penggerak (Drivetrain) -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-road text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block" style="font-size: 10px;">Penggerak</small>
                                            <span id="modalDrivetrain" class="fw-semibold text-dark small">4WD
                                                (4x4)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tenaga (Power) -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-bolt text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block" style="font-size: 10px;">Tenaga
                                                Maksimal</small>
                                            <span id="modalPower" class="fw-semibold text-dark small">221 HP / 380
                                                Nm</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Kapasitas Penumpang -->
                                <div class="col-6">
                                    <div class="p-2 bg-light rounded-2 border d-flex align-items-center h-100">
                                        <i class="fa fa-users text-danger fs-5 me-2 px-1"></i>
                                        <div>
                                            <small class="text-muted d-block" style="font-size: 10px;">Kapasitas</small>
                                            <span id="modalCapacity" class="fw-semibold text-dark small">5
                                                Penumpang</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="text-muted small mt-3 mb-0" id="modalCarDesc">
                                Kendaraan premium dengan standar kenyamanan tinggi, siap menemani petualangan maupun
                                mobilitas perkotaan Anda bersama dealer resmi BAIC.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer / Tombol Aksi Cepat -->
                <div class="modal-footer bg-light px-4 py-3 border-top justify-content-between">
                    <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20informasi%20kendaraan%20BAIC"
                        target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                        <i class="fab fa-whatsapp me-2"></i>more info
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize mb-3">Tim Sales & Marketing</h1>
                <p class="mb-0">Konsultasikan kebutuhan kendaraan Anda, simulasi kredit terbaik, hingga penjadwalan test
                    drive langsung dengan Sales Consultant profesional kami.
                </p>
            </div>
            <div class="row g-4">

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid rounded w-100" alt="Sales BAIC">
                        </div>
                        <div class="team-content pt-4 text-center">
                            <h4 class="mb-1">RIAN PRATAMA</h4>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square rounded-circle mx-1 text-white shadow-sm"
                                    href="https://wa.me/628xxxxxxxxxx" target="_blank" title="WhatsApp"
                                    style="background-color: #25D366; border-color: #25D366;"><i
                                        class="fab fa-whatsapp"></i></a>
                                <a class="btn btn-square rounded-circle mx-1 text-white shadow-sm"
                                    href="https://instagram.com/username" target="_blank" title="Instagram"
                                    style="background-color: #E1306C; border-color: #E1306C;"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>MARTIN DOE</h4>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>MARTIN DOE</h4>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item p-4 pt-0">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid rounded w-100" alt="Image">
                        </div>
                        <div class="team-content pt-4">
                            <h4>MARTIN DOE</h4>
                            <div class="team-icon d-flex justify-content-center">
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
