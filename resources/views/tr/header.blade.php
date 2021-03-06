<!-- Start Header Area -->
<header class="header navbar-area shadow">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-12">
        <div class="nav-inner">
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg">
            <a
                class="navbar-brand d-flex align-items-center"
                href="{{ route('tracereport') }}"
            >
                <img
                src="{{asset('images/logo/white-logo.png')}}"
                class="logo me-3"
                alt="Logo"
                />
                <h4 id="logo-text">Trace Report</h4>
            </a>
            <button
                class="navbar-toggler mobile-menu-btn"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse sub-menu-bar"
                id="navbarSupportedContent"
            >
                <ul id="nav" class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('tracereport') }}" aria-label="Toggle navigation"
                    >Beranda</a
                    >
                </li>
                <li class="nav-item">
                    <a
                    href="{{ route('tracereport') }}#features"
                    aria-label="Toggle navigation"
                    >Fitur</a
                    >
                </li>
                <!-- <li class="nav-item">
                    <a
                    href="{{ route('tracereport') }}#pricing"
                    aria-label="Toggle navigation"
                    >Harga</a
                    >
                </li> -->
                <li class="nav-item">
                    <a
                    href="{{ route('privacy_policy') }}"
                    aria-label="Toggle navigation"
                    >Kebijakan Privasi</a
                    >
                </li>
                <li class="nav-item">
                    <a
                    href="{{ route('terms_conditions') }}"
                    aria-label="Toggle navigation"
                    >Syarat & Ketentuan</a
                    >
                </li>
                <li class="nav-item">
                    <a
                    href="{{ route('contact') }}"
                    aria-label="Toggle navigation"
                    >Kontak</a
                    >
                </li>
                </ul>
            </div>
            <!-- navbar collapse -->
            </nav>
            <!-- End Navbar -->
        </div>
        </div>
    </div>
    <!-- row -->
    </div>
    <!-- container -->
</header>
<!-- End Header Area -->