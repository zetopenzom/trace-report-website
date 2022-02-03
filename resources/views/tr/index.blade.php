<!DOCTYPE html>
<html class="no-js" lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Trace Report</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('images/favicon2.png')}}"
    />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/LineIcons.2.0.css')}}" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
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
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ route('tracereport') }}#features"
                        aria-label="Toggle navigation"
                        >Features</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ route('tracereport') }}#pricing"
                        aria-label="Toggle navigation"
                        >Pricing</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ route('privacy_policy') }}"
                        aria-label="Toggle navigation"
                        >Privacy Policy</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ route('terms_conditions') }}"
                        aria-label="Toggle navigation"
                        >Terms & Conditions</a
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

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-12">
            <div class="hero-content">
              <h1 class="wow fadeInLeft" data-wow-delay=".4s">
                Work Anywhere,<br />Report Anytime
              </h1>
              <p class="wow fadeInLeft" data-wow-delay=".6s">
                All-in-One App<br />
                Manage your projects professionally with us
              </p>
              <div class="button wow fadeInLeft" data-wow-delay=".8s">
                <a
                  href="https://apps.apple.com/id/app/trace-report/id1588671675?l=id"
                  target="_blank"
                  class="btn"
                  ><i class="lni lni-apple"></i> App Store</a
                >
                <a
                  href="https://play.google.com/store/apps/details?id=id.kssgroup.tracereport"
                  target="_blank"
                  class="btn"
                  ><i class="lni lni-play-store"></i> Google Play</a
                >
              </div>
              <div class="button wow fadeInLeft" data-wow-delay=".8s">
                <a href="registration.html" class="btn"
                  ><i class="lni lni-pencil"></i> Daftar untuk mencoba
                  sekarang!</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-12">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
              <img src="{{asset('images/hero/phone2.png')}}" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h3 class="wow zoomIn" data-wow-delay=".2s">Features</h3>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Your Experience Gets Better And Better Over Time.
              </h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
              <i class="lni lni-cloud-upload"></i>
              <h3>Push to Deploy</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
              <i class="lni lni-lock"></i>
              <h3>SSL Certificates</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
              <i class="lni lni-reload"></i>
              <h3>Simple Queues</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
              <i class="lni lni-shield"></i>
              <h3>Advanced Security</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
              <i class="lni lni-cog"></i>
              <h3>Powerful API</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- Start Single Feature -->
            <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
              <i class="lni lni-layers"></i>
              <h3>Database Backups</h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page at its layout.
              </p>
            </div>
            <!-- End Single Feature -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Achievement Area -->
    <section class="our-achievement section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
            <div class="title">
              <h2>Trusted by developers from over 80 planets</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div
                  class="single-achievement wow fadeInUp"
                  data-wow-delay=".2s"
                >
                  <h3 class="counter">
                    <span id="secondo1" class="countup" cup-end="100">100</span
                    >%
                  </h3>
                  <p>satisfaction</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div
                  class="single-achievement wow fadeInUp"
                  data-wow-delay=".4s"
                >
                  <h3 class="counter">
                    <span id="secondo2" class="countup" cup-end="120">120</span
                    >K
                  </h3>
                  <p>Happy Users</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div
                  class="single-achievement wow fadeInUp"
                  data-wow-delay=".6s"
                >
                  <h3 class="counter">
                    <span id="secondo3" class="countup" cup-end="125">125</span
                    >k+
                  </h3>
                  <p>Downloads</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Achievement Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h3 class="wow zoomIn" data-wow-delay=".2s">pricing</h3>
              <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing Plan</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Table -->
            <div class="single-table wow fadeInUp" data-wow-delay=".2s">
              <!-- Table Head -->
              <div class="table-head">
                <h4 class="title">Hobby</h4>
                <p>All the basics for starting a new business</p>
                <div class="price">
                  <h2 class="amount">$12<span class="duration">/mo</span></h2>
                </div>
                <div class="button">
                  <a href="javascript:void(0)" class="btn">Buy Hobby</a>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class="table-content">
                <h4 class="middle-title">What's Included</h4>
                <!-- Table List -->
                <ul class="table-list">
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Cras justo odio.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Dapibus ac
                    facilisis in.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Morbi leo risus.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Potenti felis, in
                    cras ligula.
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
            </div>
            <!-- End Single Table-->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Table -->
            <div class="single-table wow fadeInUp" data-wow-delay=".4s">
              <!-- Table Head -->
              <div class="table-head">
                <h4 class="title">Freelancer</h4>
                <p>All the basics for starting a new business</p>
                <div class="price">
                  <h2 class="amount">$24<span class="duration">/mo</span></h2>
                </div>
                <div class="button">
                  <a href="javascript:void(0)" class="btn">Buy Freelancer</a>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class="table-content">
                <h4 class="middle-title">What's Included</h4>
                <!-- Table List -->
                <ul class="table-list">
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Cras justo odio.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Dapibus ac
                    facilisis in.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Morbi leo risus.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Potenti felis, in
                    cras ligula.
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
            </div>
            <!-- End Single Table-->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Table -->
            <div class="single-table wow fadeInUp" data-wow-delay=".6s">
              <!-- Table Head -->
              <div class="table-head">
                <h4 class="title">Startup</h4>
                <p>All the basics for starting a new business</p>
                <div class="price">
                  <h2 class="amount">$32<span class="duration">/mo</span></h2>
                </div>
                <div class="button">
                  <a href="javascript:void(0)" class="btn">Buy Startup</a>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class="table-content">
                <h4 class="middle-title">What's Included</h4>
                <!-- Table List -->
                <ul class="table-list">
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Cras justo odio.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Dapibus ac
                    facilisis in.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Morbi leo risus.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Potenti felis, in
                    cras ligula.
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
            </div>
            <!-- End Single Table-->
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Single Table -->
            <div class="single-table wow fadeInUp" data-wow-delay=".8s">
              <!-- Table Head -->
              <div class="table-head">
                <h4 class="title">Enterprise</h4>
                <p>All the basics for starting a new business</p>
                <div class="price">
                  <h2 class="amount">$48<span class="duration">/mo</span></h2>
                </div>
                <div class="button">
                  <a href="javascript:void(0)" class="btn">Buy Enterprise</a>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class="table-content">
                <h4 class="middle-title">What's Included</h4>
                <!-- Table List -->
                <ul class="table-list">
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Cras justo odio.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Dapibus ac
                    facilisis in.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Morbi leo risus.
                  </li>
                  <li>
                    <i class="lni lni-checkmark-circle"></i> Potenti felis, in
                    cras ligula.
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
            </div>
            <!-- End Single Table-->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="cta-content">
              <h2 class="wow fadeInUp" data-wow-delay=".2s">
                You are using free Lite <br />Version of Appvilla
              </h2>
              <p class="wow fadeInUp" data-wow-delay=".4s">
                Please, purchase full version of the template to get all pages,
                features and commercial license.
              </p>
              <div class="button wow fadeInUp" data-wow-delay=".6s">
                <a href="javascript:void(0)" class="btn">Purchase Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Call To Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="single-footer f-about">
                <a class="d-flex align-items-center" href="index.html">
                  <img
                    src="{{asset('images/logo/white-logo.png')}}"
                    class="logo me-3"
                    alt="#"
                  />
                  <h4 id="logo-text">Trace Report</h4>
                </a>
                <p>Work anywhere, report anytime.</p>
                <ul class="social">
                  <li>
                    <a href="https://www.instagram.com/kss_msg/"
                      ><i class="lni lni-instagram"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="single-footer f-link">
                    <h3>Company</h3>
                    <ul>
                      <li>
                        <a target="_blank" href="https://kssgroup.id/about"
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a target="_blank" href="https://kssgroup.id/"
                          >Our Website</a
                        >
                      </li>
                      <li>
                        <a target="_blank" href="https://kssgroup.id/contact"
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                  <div class="single-footer f-link">
                    <h3>Legal</h3>
                    <ul>
                      <li><a href="privacy_policy.html">Privacy Policy</a></li>
                      <li>
                        <a href="terms_condition.html"
                          >Terms &amp; Conditions</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/glightbox.min.js')}}"></script>
    <script src="{{asset('js/count-up.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
      //====== counter up
      var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
      });
      cu.start();
    </script>
  </body>
</html>
