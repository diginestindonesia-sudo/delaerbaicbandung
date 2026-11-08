<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ route('home')}}" class="navbar-brand p-0 d-flex align-items-center">
                <img src="img/baic-logo.png" alt="Logo" class="brand-logo">
                <h1 class="display-6 mb-0 ms-2">Bandung</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{ route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('cars')}}" class="nav-item nav-link">Cars</a>
                    <a href="{{ route('promo')}}" class="nav-item nav-link">Promo</a>
                    <a href="{{ route('agents')}}" class="nav-item nav-link">Marketing</a>
                    <a href="{{ route('blogs')}}" class="nav-item nav-link">Blogs</a>
                    <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                {{-- <a href="https://htmlcodex.com/downloading/?item=3387" class="btn btn-primary rounded-pill py-2 px-4">Buy Pro Version</a> --}}
            </div>
        </nav>
    </div>  
</div>
