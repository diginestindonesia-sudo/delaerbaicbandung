<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dealer Baic Bandung</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    @include('layout.navbar')
    <!-- Navbar & Hero End -->

    @yield('section')

    @include('layout.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    <!-- Floating WhatsApp Button (Pojok Kiri Bawah) - Memicu Modal Pilihan Tim -->
    <button type="button" class="btn btn-success btn-lg-square rounded-circle position-fixed shadow-lg border-0"
        style="bottom: 30px; left: 30px; z-index: 99;" data-bs-toggle="modal" data-bs-target="#whatsappTeamModal"
        title="Chat WhatsApp Sales">
        <i class="fab fa-whatsapp text-white"></i>
    </button>

    <!-- Modal Pilihan Tim Marketing / Sales -->
    <div class="modal fade" id="whatsappTeamModal" tabindex="-1" aria-labelledby="whatsappTeamModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 380px;">
            <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">

                <!-- Header Modal -->
                <div class="bg-success text-white p-4 position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="d-flex align-items-center mb-2">
                        <i class="fab fa-whatsapp fs-2 me-2"></i>
                        <h4 class="fw-bold mb-0 text-white" id="whatsappTeamModalLabel">Mulai Konsultasi</h4>
                    </div>
                    <p class="small text-white-50 mb-0">Klik salah satu sales consultant BAIC Bandung di bawah untuk
                        terhubung langsung via WhatsApp.</p>
                </div>

                <!-- Body Modal (Daftar Tim Sales) -->
                <div class="modal-body p-3 bg-light">
                    <p class="text-muted small mb-3 px-2">Tim marketing biasanya membalas dalam beberapa menit.</p>

                    <!-- Sales 1 -->
                    <a href="https://wa.me/6281234567891?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20produk%20BAIC"
                        target="_blank" class="text-decoration-none">
                        <div
                            class="bg-white p-3 rounded-3 border mb-2 shadow-sm d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 45px; height: 45px; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">Reza Pratama</h6>
                                    <span class="text-muted small">Senior Sales Consultant</span>
                                </div>
                            </div>
                            <i class="fab fa-whatsapp text-success fs-5"></i>
                        </div>
                    </a>

                    <!-- Sales 2 -->
                    <a href="https://wa.me/6281234567892?text=Halo%2C%20saya%20ingin%20berkonsultasi%20mengenai%20produk%20BAIC"
                        target="_blank" class="text-decoration-none">
                        <div
                            class="bg-white p-3 rounded-3 border shadow-sm d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 45px; height: 45px; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-0">Siti Rahma</h6>
                                    <span class="text-muted small">Sales Executive</span>
                                </div>
                            </div>
                            <i class="fab fa-whatsapp text-success fs-5"></i>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
