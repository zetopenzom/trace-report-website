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
                <a href="{{ route('registration') }}" class="btn"
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
              <h2 class="wow fadeInUp" data-wow-delay=".4s">HARGA</h2>
              <p class="wow fadeInUp" data-wow-delay=".6s">
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="d-flex justify-content-center">
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
                    <a href="javascript:void(0)" class="btn bg-primary bg-gradient">Get Your Free Trial Now!</a>
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

    @include('tr.footer')
    @include('tr.script')    
  </body>
</html>
