<!DOCTYPE html>
<html class="no-js" lang="id">
  <head>
    <title>Trace Report</title>
    @include('tr.head')
  </head>
  <body>
    @include('tr.preloader')
    @include('tr.header')

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-12 col-12">
            <div class="hero-content">
              <h1 id="hero_tr" class="wow fadeInLeft fs-40 fw-bold text-shadow" data-wow-delay=".4s">
                TRACE REPORT
              </h1>
              <h4 id="hero_wara" class="wow fadeInLeft text-white text-center" data-wow-delay=".4s">
                Work Anywhere, Report Anytime
              </h4>
              <h5 class="wow fadeInLeft text-white text-center mt-5" data-wow-delay=".4s">
                <b>Now Available On :</b>
              </h5>
              <div class="button wow fadeInLeft text-center my-3" data-wow-delay=".8s">
                <a
                  href="https://play.google.com/store/apps/details?id=id.kssgroup.tracereport"
                  target="_blank"
                  class="p-0 bg-transparent"
                  id="google"
                  ><img src="{{asset('images/logo/googleplay.png')}}" alt="#" /></a
                >
                <a
                  href="https://apps.apple.com/id/app/trace-report/id1588671675?l=id"
                  target="_blank"
                  class="p-0 bg-transparent"
                  id="apple"
                  ><img src="{{asset('images/logo/appstore.png')}}" alt="#" /></a
                >
              </div>
              <div class="button wow fadeInLeft text-center" data-wow-delay=".8s">
                <form method="get" action="{{ route('registration') }}">
                  <div class="d-flex justify-content-center">
                    <div class="input-group daftar-email">
                      <input type="email" name="email" class="form-control" placeholder="Daftarkan email untuk coba gratis" required>
                      <button type="submit" class="btn">Gabung</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-12 d-flex justify-content-center">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
              <img src="{{asset('images/hero/phone.png')}}" alt="#" />
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
            <div class="section-title px-3">
              <h3 class="wow fadeInUp color-custom-gray1 fw-bolder" data-wow-delay=".4s">Our features</h3>
              <h2 class="wow fadeInUp color-custom-gray1" data-wow-delay=".4s">
                The various features we provide to make your  business more powerful
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center" data-wow-delay=".2s">
              <img src="{{asset('images/features/Absensi.png')}}" alt="#" />
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center" data-wow-delay=".4s">
              <img src="{{asset('images/features/Kolab Tim.png')}}" alt="#" />
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center" data-wow-delay=".6s">
              <img src="{{asset('images/features/Manajemen Proyek.png')}}" alt="#" />
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center" data-wow-delay=".8s">
              <img src="{{asset('images/features/Sales Tracking.png')}}" alt="#" />
            </div>
            <!-- End Single Feature -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Achievement Area -->
    <!-- <section class="our-achievement section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
            <div class="title wow fadeInUp" data-wow-delay=".4s">
              <h2>Aplikasi <i>Project Manajer</i> yang dibuat untuk meningkatkan produktivitas anda</h2>
              <br><br>
              <p>
              Dengan satu Aplikasi, dapatkan kemudahan dalam mengelola project, komunikasi karyawan, Absensi, dan banyak fitur yang akan datang.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Achievement Area -->

    <!-- Start Pricing Table Area -->
    <!-- <section id="pricing" class="pricing-table section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title px-3">
              <h2 class="wow fadeInUp" data-wow-delay=".4s">HARGA</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
              Dapatkan penawaran yang cocok untuk bisnis anda!
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="d-flex justify-content-center">
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <div class="table-head text-center">
                  <h4 class="title">STARTER</h4>
                  <div class="price">
                    <h2 class="amount fs-1">Rp. 100K<span class="duration">/user</span></h2>
                  </div>
                  <p>Paket untuk di bawah 10 karyawan</p>
                  <div class="button mt-5">
                    <a href="{{ route('registration') }}" class="btn bg-primary bg-gradient">Get Your Free Trial Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex justify-content-center">
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <div class="table-head text-center">
                  <h4 class="title fw-bolder">RECOMMENDED</h4>
                  <div class="price">
                    <h2 class="amount fs-1">Rp. 80K<span class="duration">/user</span></h2>
                  </div>
                  <p>Paket untuk 20-50 karyawan</p>
                  <div class="button mt-5">
                    <a href="{{ route('registration') }}" class="btn bg-primary bg-gradient">Get Your Free Trial Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex justify-content-center">
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <div class="table-head text-center">
                  <h4 class="title">BUSINESS</h4>
                  <div class="price">
                    <h2 class="amount fs-1">Rp. 65K<span class="duration">/user</span></h2>
                  </div>
                  <p>Paket untuk di atas 100 karyawan</p>
                  <div class="button mt-5">
                    <a href="{{ route('registration') }}" class="btn bg-primary bg-gradient">Get Your Free Trial Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section bg-custom-blue1 pb-5 pt-5">
      <div class="container text-center pb-5">
        <div class="button mb-4 wow fadeInUp" data-wow-delay=".2s">
          <a href="{{ route('registration') }}" class="btn rounded-pill shadow fs-4" id="signin">
              Sign in for Free
          </a>
        </div>
        <p class="wow fadeInUp text-dark" data-wow-delay=".4s">
          Dapatkan pengalaman penuh - Tanpa iklan, tanpa batasan<sup>*</sup>
        </p>
      </div>
    </section>
    <!-- End Call To Action Area -->

    <!-- Start Gallery Area -->
    <!-- <section id="video" class="features section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title px-3">
              <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Galeri Kami
              </h2>
            </div>
          </div>
          <div class="col-lg-4 py-3">
            <div class="d-flex justify-content-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/gMe1c4UegBY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 py-3">
            <div class="d-flex justify-content-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/NsY-9MCOIAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 py-3">
            <div class="d-flex justify-content-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Xmxcnf2v_gs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Gallery Area -->

    @include('tr.footer')
    @include('tr.script')    
  </body>
</html>
