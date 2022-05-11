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
      <img class="ellipse1" src="{{asset('images/hero/ellipse1.png')}}" alt="#" />
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 col-12">
            <div class="hero-content">
              <img class="ellipse2" src="{{asset('images/hero/ellipse2.png')}}" alt="#" />
              <h1 class="wow fadeInLeft fs-40 mb-4" data-wow-delay=".4s" style="font-size: 60px;">
                Trace Report
              </h1>
              <h4 class="wow fadeInLeft text-white" data-wow-delay=".4s">
                Work Anywhere, Report Anytime
              </h4>
              <p class="wow fadeInLeft mb-5" data-wow-delay=".6s">
                All-in-One app<br />
                Manage your project <b>Professionally</b> with us
              </p>
              <h5 class="wow fadeInLeft text-white text-center mt-5" data-wow-delay=".4s">
                <b>Now Available On :</b>
              </h5>
              <div class="button wow fadeInLeft text-center my-3" data-wow-delay=".8s">
                <a
                  href="https://play.google.com/store/apps/details?id=id.kssgroup.tracereport"
                  target="_blank"
                  class="btn p-0 bg-transparent"
                  id="google"
                  ><img src="{{asset('images/logo/googleplay.png')}}" alt="#" /></a
                >
                <a
                  href="https://apps.apple.com/id/app/trace-report/id1588671675?l=id"
                  target="_blank"
                  class="btn p-0 bg-transparent"
                  id="apple"
                  ><img src="{{asset('images/logo/appstore.png')}}" alt="#" /></a
                >
              </div>
              <div class="button wow fadeInLeft text-center" data-wow-delay=".8s">
                <a href="{{ route('registration') }}" class="btn-border-white border border-1 border-white rounded-pill"
                  ><i class="lni lni-pencil text-start"></i> Daftar untuk coba gratis!</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 col-12">
            <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
              <img src="{{asset('images/hero/phone.png')}}" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="hero-area-footer">
      <img class="w-100" src="{{asset('images/hero/footer.png')}}" alt="#" />
    </div>
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
    <section class="our-achievement section">
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
    </section>
    <!-- End Achievement Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
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
              <!-- Single Table -->
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <!-- Table Head -->
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
                <!-- End Table Head -->
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div class="col-lg-4">
            <div class="d-flex justify-content-center">
              <!-- Single Table -->
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <!-- Table Head -->
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
                <!-- End Table Head -->
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div class="col-lg-4">
            <div class="d-flex justify-content-center">
              <!-- Single Table -->
              <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                <!-- Table Head -->
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
                <!-- End Table Head -->
              </div>
            </div>
            <!-- End Single Table-->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action pb-3 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="cta-content">
              <div class="button mb-4 wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ route('registration') }}" class="btn" style="border-radius: 10px;">
                    Coba Gratis
                </a>
              </div>
              <p class="wow fadeInUp fs-5" data-wow-delay=".4s">
                Dapatkan pengalaman penuh - Tanpa iklan, tanpa batasan.<sup>*</sup>
              </p>
              <br><br>
              <p class="wow fadeInUp" data-wow-delay=".4s" style="font-size: 11px;">*uji coba gratis selama satu minggu, hubungin sales officer kami via WA</p>
            </div>
          </div>
        </div>
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
