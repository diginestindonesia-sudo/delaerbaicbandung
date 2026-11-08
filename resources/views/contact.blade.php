@extends('layout.index')
@section('section')
    
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb py-4 mb-5">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-5 fw-bold mb-2 wow fadeInDown" data-wow-delay="0.1s">Hubungi Kami & Booking Test Drive</h3>
                <p class="text-white-50 mb-3">Jadwalkan sesi test drive kendaraan BAIC impian Anda atau konsultasikan kebutuhan pembelian langsung dengan tim sales kami di Bandung.</p>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact & Booking Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    {{-- <h1 class="display-5 text-capitalize mb-3">Sales & Marketing <span class="text-primary">Office Bandung</span></h1> --}}
                    <p class="mb-0 text-muted">Isi formulir di bawah ini untuk pendaftaran test drive resmi atau konsultasi penawaran harga dan simulasi kredit terbaik.</p>
                </div>

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Kolom Informasi Kontak & Showroom -->
                    <div class="col-lg-5">
                        <div class="bg-light p-4 p-lg-5 rounded-4 border h-100 shadow-sm d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold text-dark mb-4">Informasi Pemasaran</h3>
                                
                                <div class="d-flex mb-4">
                                    <div class="btn-square bg-primary text-white rounded-circle flex-shrink-0 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Lokasi Showroom</h5>
                                        <p class="text-muted small mb-0">Jl. Soekarno Hatta / Peta, Bandung, Jawa Barat</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="btn-square text-white rounded-circle flex-shrink-0 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #25D366;">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">WhatsApp Hotline</h5>
                                        <p class="text-muted small mb-0">+62 812-3456-7890 (Respon Cepat)</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="btn-square text-white rounded-circle flex-shrink-0 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; background-color: #E1306C;">
                                        <i class="fab fa-instagram"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Instagram Resmi</h5>
                                        <p class="text-muted small mb-0">@baic.bandung.official</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <div class="btn-square bg-primary text-white rounded-circle flex-shrink-0 me-3" style="width: 45px; height: 45px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fa fa-clock"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Jam Operasional</h5>
                                        <p class="text-muted small mb-0">Senin - Minggu: 08.30 - 17.00 WIB</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 pt-3 border-top">
                                <a href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20produk%20BAIC" target="_blank" class="btn text-white rounded-pill w-100 py-3 fw-bold shadow-sm" style="background-color: #25D366;">
                                    <i class="fab fa-whatsapp me-2"></i> Chat Langsung via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Formulir Booking Test Drive & Konsultasi -->
                    <div class="col-lg-7">
                        <div class="bg-white p-4 p-lg-5 rounded-4 border shadow-sm">
                            <h3 class="fw-bold text-dark mb-2">Formulir Booking Test Drive</h3>
                            <p class="text-muted small mb-4">Silakan isi data diri dan jadwal yang Anda inginkan. Tim sales kami akan segera mengkonfirmasi reservasi Anda.</p>
                            
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control rounded-3" id="name" placeholder="Nama Lengkap" required>
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control rounded-3" id="phone" placeholder="Nomor WhatsApp" required>
                                            <label for="phone">Nomor WhatsApp (Aktif)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select rounded-3" id="carInterest" required>
                                                <option selected disabled>Pilih Unit Test Drive</option>
                                                <option value="BJ40 Plus">BAIC BJ40 Plus (Off-Road SUV)</option>
                                                <option value="X-55 II">BAIC X-55 II (Urban Crossover)</option>
                                                <option value="BJ30 HEV">BAIC BJ30 HEV (Hybrid SUV)</option>
                                                <option value="T1">BAIC T1 (Electric SUV)</option>
                                            </select>
                                            <label for="carInterest">Model Kendaraan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control rounded-3" id="testDate" required>
                                            <label for="testDate">Rencana Tanggal Test Drive</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select rounded-3" id="testLocation" required>
                                                <option selected disabled>Pilih Lokasi / Sesi</option>
                                                <option value="Showroom Bandung">Kunjung Showroom / Dealer Resmi</option>
                                                <option value="Home/Office Test Drive">Test Drive ke Rumah / Kantor (Area Bandung)</option>
                                                <option value="Event / Pameran">Lokasi Pameran / Event BAIC</option>
                                            </select>
                                            <label for="testLocation">Preferensi Lokasi</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control rounded-3" placeholder="Catatan tambahan..." id="message" style="height: 100px"></textarea>
                                            <label for="message">Catatan Tambahan (Opsional)</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark rounded-pill w-100 py-3 fw-semibold shadow-sm" type="submit">
                                            <i class="fa fa-calendar-check me-2"></i> Kirim Permintaan Test Drive
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact End -->
@endsection