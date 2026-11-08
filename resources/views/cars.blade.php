@extends('layout.index')
@section('section')
    
        <!-- Header Section -->
        <div class="container-fluid bg-breadcrumb py-4 mb-5">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-5 fw-bold mb-2 wow fadeInDown" data-wow-delay="0.1s">Katalog Kendaraan BAIC</h3>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Cars</li>
                </ol>    
            </div>
        </div>

        <!-- Car Categories / Catalog Grid Start (Tanpa Carousel & Tanpa JS) -->
        <div class="container-fluid categories py-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Our <span class="text-primary">Cars</span></h1>
                    <p class="mb-0 text-muted">Explore our premium and high-tech SUV lineup from BAIC, designed to elevate your driving experience and modern lifestyle</p>
                </div>

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">

                    <!-- 1. BAIC BJ40 Plus -->
                    <div class="col-md-6 col-lg-3">
                        <div class="categories-item p-4 h-100 bg-white rounded shadow-sm border">
                            <div class="categories-item-inner">
                                <div class="categories-img rounded-top">
                                    <img src="img/baic_bj40_plus.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ40 Plus" style="height: 180px; object-fit: contain;">
                                </div>
                                <div class="categories-content rounded-bottom p-4">
                                    <h4 class="fw-bold mb-3">BAIC BJ40 Plus</h4>
                                    <div class="mb-4">
                                        <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
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
                                        data-bs-toggle="modal" data-bs-target="#detailModal1" style="font-size: 0.9rem;">
                                        Lihat Detail & Spesifikasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2. BAIC X-55 II -->
                    <div class="col-md-6 col-lg-3">
                        <div class="categories-item p-4 h-100 bg-white rounded shadow-sm border">
                            <div class="categories-item-inner">
                                <div class="categories-img rounded-top">
                                    <img src="img/BAICX-55II.jpg" class="img-fluid w-100 rounded-top" alt="BAIC X-55 II" style="height: 180px; object-fit: contain;">
                                </div>
                                <div class="categories-content rounded-bottom p-4">
                                    <h4 class="fw-bold mb-3">BAIC X-55 II</h4>
                                    <div class="mb-4">
                                        <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Mulai Dari</span>
                                        <h5 class="text-primary fw-bold mb-0">Rp 468.000.000</h5>
                                    </div>
                                    <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-car text-dark d-block mb-1"></i> <span>Urban Crossover</span>
                                        </div>
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>1.5L Turbo</span>
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>7-Speed DCT</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#detailModal2" style="font-size: 0.9rem;">
                                        Lihat Detail & Spesifikasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3. BAIC BJ30 HEV -->
                    <div class="col-md-6 col-lg-3">
                        <div class="categories-item p-4 h-100 bg-white rounded shadow-sm border">
                            <div class="categories-item-inner">
                                <div class="categories-img rounded-top">
                                    <img src="img/BAIC_BJ30.jpg" class="img-fluid w-100 rounded-top" alt="BAIC BJ30 HEV" style="height: 180px; object-fit: contain;">
                                </div>
                                <div class="categories-content rounded-bottom p-4">
                                    <h4 class="fw-bold mb-3">BAIC BJ30 HEV</h4>
                                    <div class="mb-4">
                                        <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Informasi</span>
                                        <h5 class="text-primary fw-bold mb-0">Hubungi Sales</h5>
                                    </div>
                                    <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-car text-dark d-block mb-1"></i> <span>Hybrid SUV</span>
                                        </div>
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>1.5L HEV</span>
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>Hybrid AWD</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#detailModal3" style="font-size: 0.9rem;">
                                        Lihat Detail & Spesifikasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. BAIC T1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="categories-item p-4 h-100 bg-white rounded shadow-sm border">
                            <div class="categories-item-inner">
                                <div class="categories-img rounded-top">
                                    <img src="img/baic_BAIC T1.jpg" class="img-fluid w-100 rounded-top" alt="BAIC T1" style="height: 180px; object-fit: contain;">
                                </div>
                                <div class="categories-content rounded-bottom p-4">
                                    <h4 class="fw-bold mb-3">BAIC T1</h4>
                                    <div class="mb-4">
                                        <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.75rem; letter-spacing: 1px;">Informasi</span>
                                        <h5 class="text-primary fw-bold mb-0">Hubungi Sales</h5>
                                    </div>
                                    <div class="row gy-2 gx-0 text-center mb-4 small text-secondary">
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-car text-dark d-block mb-1"></i> <span>Electric SUV</span>
                                        </div>
                                        <div class="col-4 border-end border-light">
                                            <i class="fa fa-cogs text-dark d-block mb-1"></i> <span>Pure EV</span>
                                        </div>
                                        <div class="col-4">
                                            <i class="fa fa-sliders-h text-dark d-block mb-1"></i> <span>Automatic</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-outline-dark rounded-pill w-100 py-2.5 fw-semibold"
                                        data-bs-toggle="modal" data-bs-target="#detailModal4" style="font-size: 0.9rem;">
                                        Lihat Detail & Spesifikasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Car Categories End -->


        <!-- ================= MODAL DETAIL KHUSUS MASING-MASING MOBIL (TANPA JS) ================= -->

        <!-- Modal 1: BAIC BJ40 Plus -->
        <div class="modal fade" id="detailModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-white text-dark border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="modal-header bg-white text-dark px-4 py-3 border-bottom">
                        <h5 class="modal-title fw-bold"><i class="fa fa-car text-danger me-2"></i> BAIC BJ40 Plus</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-5 text-center">
                                <img src="img/baic_bj40_plus.jpg" alt="BAIC BJ40 Plus" class="img-fluid rounded-3 shadow-sm w-100 mb-3 bg-light p-3" style="object-fit: contain; max-height: 220px;">
                                <div class="p-3 bg-light rounded-3 border">
                                    <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem; letter-spacing: 1px;">Estimasi Harga OTR</span>
                                    <h4 class="text-primary fw-bold mb-0">Rp 783.000.000</h4>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h6 class="fw-bold text-dark mb-3"><i class="fa fa-info-circle text-danger me-1"></i> Spesifikasi & Performa Utama</h6>
                                <div class="row g-2">
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Jenis Bodi</small><span class="fw-semibold small">Off-Road SUV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tipe Mesin</small><span class="fw-semibold small">2.0L Turbo Petrol</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Transmisi</small><span class="fw-semibold small">8-Speed AT</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Penggerak</small><span class="fw-semibold small">4WD (4x4)</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tenaga Maksimal</small><span class="fw-semibold small">221 HP / 380 Nm</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Kapasitas</small><span class="fw-semibold small">5 Penumpang</span></div></div>
                                </div>
                                <p class="text-muted small mt-3 mb-0">SUV bergaya off-road klasik yang ikonik dengan bodi kotak tangguh serta penggerak 4x4 untuk petualangan tanpa batas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light px-4 py-3 border-top justify-content-between">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20BAIC%20BJ40%20Plus" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="fab fa-whatsapp me-2"></i> Tanya Sales via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2: BAIC X-55 II -->
        <div class="modal fade" id="detailModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-white text-dark border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="modal-header bg-white text-dark px-4 py-3 border-bottom">
                        <h5 class="modal-title fw-bold"><i class="fa fa-car text-danger me-2"></i> BAIC X-55 II</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-5 text-center">
                                <img src="img/BAICX-55II.jpg" alt="BAIC X-55 II" class="img-fluid rounded-3 shadow-sm w-100 mb-3 bg-light p-3" style="object-fit: contain; max-height: 220px;">
                                <div class="p-3 bg-light rounded-3 border">
                                    <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem; letter-spacing: 1px;">Estimasi Harga OTR</span>
                                    <h4 class="text-primary fw-bold mb-0">Rp 468.000.000</h4>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h6 class="fw-bold text-dark mb-3"><i class="fa fa-info-circle text-danger me-1"></i> Spesifikasi & Performa Utama</h6>
                                <div class="row g-2">
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Jenis Bodi</small><span class="fw-semibold small">Urban Crossover</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tipe Mesin</small><span class="fw-semibold small">1.5L Turbo Magic Core</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Transmisi</small><span class="fw-semibold small">7-Speed DCT</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Penggerak</small><span class="fw-semibold small">FWD</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tenaga Maksimal</small><span class="fw-semibold small">185 HP / 305 Nm</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Kapasitas</small><span class="fw-semibold small">5 Penumpang</span></div></div>
                                </div>
                                <p class="text-muted small mt-3 mb-0">Medium SUV futuristik dan stylish dengan teknologi transmisi 7-Speed DCT, dirancang khusus untuk keluarga modern perkotaan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light px-4 py-3 border-top justify-content-between">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20BAIC%20X-55%20II" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="fab fa-whatsapp me-2"></i> Tanya Sales via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3: BAIC BJ30 HEV -->
        <div class="modal fade" id="detailModal3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-white text-dark border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="modal-header bg-white text-dark px-4 py-3 border-bottom">
                        <h5 class="modal-title fw-bold"><i class="fa fa-car text-danger me-2"></i> BAIC BJ30 HEV</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-5 text-center">
                                <img src="img/BAIC_BJ30.jpg" alt="BAIC BJ30 HEV" class="img-fluid rounded-3 shadow-sm w-100 mb-3 bg-light p-3" style="object-fit: contain; max-height: 220px;">
                                <div class="p-3 bg-light rounded-3 border">
                                    <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem; letter-spacing: 1px;">Informasi Harga</span>
                                    <h4 class="text-primary fw-bold mb-0">Hubungi Sales</h4>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h6 class="fw-bold text-dark mb-3"><i class="fa fa-info-circle text-danger me-1"></i> Spesifikasi & Performa Utama</h6>
                                <div class="row g-2">
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Jenis Bodi</small><span class="fw-semibold small">Hybrid SUV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tipe Mesin</small><span class="fw-semibold small">1.5L Turbo Hybrid (HEV)</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Transmisi</small><span class="fw-semibold small">Hybrid Dedicated</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Penggerak</small><span class="fw-semibold small">Hybrid AWD / FWD</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Performa</small><span class="fw-semibold small">High Efficiency HEV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Kapasitas</small><span class="fw-semibold small">5 Penumpang</span></div></div>
                                </div>
                                <p class="text-muted small mt-3 mb-0">SUV petualang bertenaga Hybrid Electric Vehicle (HEV) yang menawarkan efisiensi bahan bakar maksimal tanpa mengorbankan performa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light px-4 py-3 border-top justify-content-between">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20BAIC%20BJ30%20HEV" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="fab fa-whatsapp me-2"></i> Tanya Sales via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4: BAIC T1 -->
        <div class="modal fade" id="detailModal4" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-white text-dark border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="modal-header bg-white text-dark px-4 py-3 border-bottom">
                        <h5 class="modal-title fw-bold"><i class="fa fa-car text-danger me-2"></i> BAIC T1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row g-4 align-items-center">
                            <div class="col-md-5 text-center">
                                <img src="img/baic_BAIC T1.jpg" alt="BAIC T1" class="img-fluid rounded-3 shadow-sm w-100 mb-3 bg-light p-3" style="object-fit: contain; max-height: 220px;">
                                <div class="p-3 bg-light rounded-3 border">
                                    <span class="d-block text-muted text-uppercase fw-semibold" style="font-size: 0.7rem; letter-spacing: 1px;">Informasi Harga</span>
                                    <h4 class="text-primary fw-bold mb-0">Hubungi Sales</h4>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <h6 class="fw-bold text-dark mb-3"><i class="fa fa-info-circle text-danger me-1"></i> Spesifikasi & Performa Utama</h6>
                                <div class="row g-2">
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Jenis Bodi</small><span class="fw-semibold small">Electric SUV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Tipe Mesin</small><span class="fw-semibold small">Pure Electric (EV)</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Transmisi</small><span class="fw-semibold small">Single-Speed Auto</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Penggerak</small><span class="fw-semibold small">FWD / EV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Performa</small><span class="fw-semibold small">Instant Torque EV</span></div></div>
                                    <div class="col-6"><div class="p-2 bg-light rounded-2 border"><small class="text-muted d-block" style="font-size: 10px;">Kapasitas</small><span class="fw-semibold small">5 Penumpang</span></div></div>
                                </div>
                                <p class="text-muted small mt-3 mb-0">Kendaraan listrik murni (EV) terbaru dari BAIC yang ramah lingkungan, senyap, dilengkapi fitur pengisian cepat dan jarak tempuh optimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light px-4 py-3 border-top justify-content-between">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                        <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20BAIC%20T1" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="fab fa-whatsapp me-2"></i> Tanya Sales via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection