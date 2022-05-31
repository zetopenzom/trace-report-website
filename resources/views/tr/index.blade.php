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
              <h4 id="hero_wara" class="wow fadeInLeft text-white" data-wow-delay=".4s">
                Work Anywhere, Report Anytime
              </h4>
              <h4 class="wow fadeInLeft text-white text-center mt-5" data-wow-delay=".4s">
                <b>Now Available On :</b>
              </h4>
              <div class="d-flex justify-content-center w-100">
                <div id="resp-download-regist">
                  <div class="button wow fadeInLeft my-3 text-center" data-wow-delay=".8s">
                    <a
                      href="https://play.google.com/store/apps/details?id=id.kssgroup.tracereport"
                      target="_blank"
                      class="p-0 bg-transparent w-45"
                      ><img src="{{asset('images/logo/googleplay.png')}}" alt="#" class="w-100" /></a
                    >
                    <a
                      href="https://apps.apple.com/id/app/trace-report/id1588671675?l=id"
                      target="_blank"
                      class="p-0 bg-transparent w-45"
                      ><img src="{{asset('images/logo/appstore.png')}}" alt="#" class="w-100" /></a
                    >
                  </div>
                  <div class="d-flex justify-content-center">
                    <div id="btn-gabung" class="button wow fadeInLeft" data-wow-delay=".8s">
                      <form method="get" action="{{ route('registration') }}">
                        <div class="d-flex justify-content-center">
                          <div class="input-group daftar-email">
                            <input type="email" name="email" class="form-control" placeholder="Daftarkan email untuk coba gratis" required>
                            <button type="submit" class="btn m-0">Daftar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-12" id="phone">
            <div class="d-flex justify-content-center">
              <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                <img src="{{asset('images/hero/phone.png')}}" alt="#" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Video Area -->
    <section id="video" class="features section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="d-flex justify-content-center">
              <video width="100%" controls autoplay muted loop>
                <source src="{{asset('video/tracereport.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Gallery Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title px-3">
              <h1 id="fitur-title" class="wow fadeInUp color-custom-gray1 fw-bolder mb-4" data-wow-delay=".4s">Fitur</h1>
            </div>
          </div>
        </div>
        <div class="row" id="border-features"  data-wow-delay=".8s">
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center h-100" data-wow-delay=".2s" id="absensi">
              <img src="{{asset('images/features/Absensi (1).png')}}" class="bottom p-5" alt="#" />
              <img src="{{asset('images/features/Absensi.png')}}" class="top p-5" alt="#" />
              <div class="w-100 h-100">
                <div class="w-100 h-100 d-flex align-items-center">
                  <img src="{{asset('images/features/Absensi (2).png')}}" class="px-3" alt="#" />
                </div>
              </div>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center h-100" data-wow-delay=".4s" id="manajemenproyek">
              <img src="{{asset('images/features/Manajemen Proyek (1).png')}}" class="bottom p-5" alt="#" />
              <img src="{{asset('images/features/Manajemen Proyek.png')}}" class="top p-5" alt="#" />
              <div class="w-100 h-100">
                <div class="w-100 h-100 d-flex align-items-center">
                  <img src="{{asset('images/features/Manajemen Proyek (2).png')}}" class="px-3" alt="#" />
                </div>
              </div>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center h-100" data-wow-delay=".6s" id="kolabtim">
              <img src="{{asset('images/features/Kolab Tim (1).png')}}" class="bottom p-5" alt="#" />
              <img src="{{asset('images/features/Kolab Tim.png')}}" class="top p-5" alt="#" />
              <div class="w-100 h-100">
                <div class="w-100 h-100 d-flex align-items-center">
                  <img src="{{asset('images/features/Kolab Tim (2).png')}}" class="px-3" alt="#" />
                </div>
              </div>
            </div>
            <!-- End Single Feature -->
          </div>
          <div class="col-lg-3 col-md-6 col-12 p-0">
            <!-- Start Single Feature -->
            <div class="wow fadeInUp text-center h-100" data-wow-delay=".8s" id="salestracking">
              <img src="{{asset('images/features/Sales Tracking (1).png')}}" class="bottom p-5" alt="#" />
              <img src="{{asset('images/features/Sales Tracking.png')}}" class="top p-5" alt="#" />
              <div class="w-100 h-100">
                <div class="w-100 h-100 d-flex align-items-center">
                  <img src="{{asset('images/features/Sales Tracking (2).png')}}" class="px-3" alt="#" />
                </div>
              </div>
            </div>
            <!-- End Single Feature -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Area -->

    @include('tr.footer')
    @include('tr.script')    
  </body>
</html>
