@extends('layout.index')
@section('section')
    
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-4 mb-5">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-5 fw-bold mb-2 wow fadeInDown" data-wow-delay="0.1s">Promo & Simulasi Kredit</h3>
                <p class="text-white-50 mb-3">Dapatkan penawaran spesial, diskon menarik, dan hitung estimasi pembiayaan kendaraan BAIC impian Anda.</p>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-primary">Promo</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Promo Banners Section Start (Landscape Banners Tanpa Carousel) -->
        <!-- Promo Banners Section Start (Banner Landscape Vertikal / Stacked Tanpa Card) -->
        <div class="container-fluid py-5">
            <div class="container" style="max-width: 900px;">

                <!-- Banner Promo 1 -->
                <div class="mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20Promo%20DP%20Ringan" target="_blank" title="Ambil Promo DP Ringan">
                        <img src="img/promo_baic_bandung_2.jpg" class="img-fluid w-100 rounded-4 shadow-sm" alt="Promo DP Ringan" style="object-fit: cover;">
                    </a>
                </div>

                <!-- Banner Promo 2 -->
                <div class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20Promo%20Bonus%20Aksesoris" target="_blank" title="Ambil Bonus Aksesoris">
                        <img src="img/promo_baic_bandung_1.jpg" class="img-fluid w-100 rounded-4 shadow-sm" alt="Bonus Aksesoris" style="object-fit: cover;">
                    </a>
                </div>

                <!-- Banner Promo 3 -->
                <div class="mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20tertarik%20dengan%20Promo%20Garansi" target="_blank" title="Ambil Promo Garansi & Maintenance">
                        <img src="img/promo_baic_bandung_2.jpg" class="img-fluid w-100 rounded-4 shadow-sm" alt="Garansi & Free Maintenance" style="object-fit: cover;">
                    </a>
                </div>

            </div>
        </div>
        <!-- Promo Banners Section End -->
        <!-- Promo Banners Section End -->


        <!-- Simulasi Kredit & Syarat Pengajuan Start -->
        <div class="container-fluid py-5 bg-light">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Simulasi Kredit & <span class="text-primary">Syarat</span></h1>
                    <p class="mb-0 text-muted">Hitung perkiraan pembiayaan kendaraan dan ketahui persyaratan dokumen pengajuan kredit dengan mudah.</p>
                </div>

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
                    
                    <!-- Kolom 1: Simulasi Kredit Sederhana (Col-6) -->
                    <div class="col-lg-6">
                        <div class="bg-white p-4 p-lg-5 rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold text-dark mb-3"><i class="fa fa-calculator text-primary me-2"></i> Simulasi Kredit</h3>
                                <p class="text-muted small mb-4">Pilih tipe kendaraan, varian, dan tenor untuk melihat estimasi perhitungan awal.</p>
                                
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold">Pilih Tipe Kendaraan</label>
                                        <select class="form-select rounded-3">
                                            <option selected disabled>-- Pilih Model BAIC --</option>
                                            <option>BAIC BJ40 Plus (Rp 783.000.000)</option>
                                            <option>BAIC X-55 II (Rp 468.000.000)</option>
                                            <option>BAIC BJ30 HEV (Hubungi Sales)</option>
                                            <option>BAIC T1 (Hubungi Sales)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-semibold">Varian / Opsi Pembayaran</label>
                                        <select class="form-select rounded-3">
                                            <option selected disabled>-- Pilih Varian --</option>
                                            <option>Standar / On-The-Road Bandung</option>
                                        </select>
                                    </div>
                                    <div class="row g-3 mb-4">
                                        <div class="col-md-6">
                                            <label class="form-label small fw-semibold">Tenor (Pilihan Bulan)</label>
                                            <select class="form-select rounded-3">
                                                <option value="12">1 Tahun (12 Bulan)</option>
                                                <option value="24">2 Tahun (24 Bulan)</option>
                                                <option value="36">3 Tahun (36 Bulan)</option>
                                                <option value="48">4 Tahun (48 Bulan)</option>
                                                <option value="60" selected>5 Tahun (60 Bulan)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label small fw-semibold">Estimasi Bunga</label>
                                            <input type="text" class="form-control rounded-3 bg-light text-secondary" value="Bunga Spesial 2.99%" readonly>
                                        </div>
                                    </div>
                                    <div class="p-3 bg-light rounded-3 border mb-4 text-center">
                                        <span class="d-block text-muted small">Estimasi & Kalkulasi Akurat:</span>
                                        <h5 class="text-primary fw-bold mb-0">Hubungi Sales via WhatsApp</h5>
                                    </div>
                                </form>
                            </div>

                            <a href="https://wa.me/628xxxxxxxxxx?text=Halo%2C%20saya%20ingin%20minta%20hitung%20simulasi%20kredit%20lengkap" target="_blank" class="btn btn-dark rounded-pill w-100 py-3 fw-semibold shadow-sm">
                                <i class="fab fa-whatsapp me-2"></i> Hitung Simulasi via WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Kolom 2: Syarat Pengajuan Kredit (Col-6) -->
                    <div class="col-lg-6">
                        <div class="bg-white p-4 p-lg-5 rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold text-dark mb-3"><i class="fa fa-file-alt text-primary me-2"></i> Syarat Pengajuan Kredit</h3>
                                <p class="text-muted small mb-4">Dokumen yang perlu disiapkan untuk proses pembiayaan perorangan maupun perusahaan.</p>
                                
                                <h6 class="fw-bold text-dark mb-2"><i class="fa fa-user text-primary me-2"></i> Perorangan / Pribadi:</h6>
                                <ul class="list-unstyled text-secondary small mb-4 ps-2">
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Fotokopi KTP Suami & Istri (Jika sudah menikah)</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Fotokopi Kartu Keluarga (KK)</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Fotokopi PBB / Rekening Listrik / Akta Nikah</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Slip Gaji / Surat Keterangan Penghasilan (Karyawan)</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Rekening Koran 3 bulan terakhir</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Fotokopi NPWP</li>
                                </ul>

                                <h6 class="fw-bold text-dark mb-2"><i class="fa fa-building text-primary me-2"></i> Perusahaan / Badan Usaha:</h6>
                                <ul class="list-unstyled text-secondary small mb-3 ps-2">
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Akta Pendirian Perusahaan & Perubahan</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> SIUP, TDP / NIB, SK Menkumham</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Domisili Perusahaan & NPWP Badan</li>
                                    <li class="mb-2"><i class="fa fa-check text-success me-2"></i> Rekening Koran Perusahaan 3 bulan terakhir</li>
                                </ul>
                            </div>

                            <div class="p-3 bg-light rounded-3 border mt-3 text-center">
                                <span class="small text-muted">Butuh bantuan konsultasi berkas? Tim sales kami siap mendampingi proses Anda.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Simulasi Kredit & Syarat Pengajuan End -->
@endsection