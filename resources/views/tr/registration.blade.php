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

    <div class="breadcrumbs2 py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="breadcrumbs-content">
              <h1 class="page-title">Pendaftaran Akun Demo</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="py-5 blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
            <div class="single-inner">
              <div class="post-details">
                <div class="main-content-head">
                  <div class="detail-inner p-5">
                    <form method="post" action="{{ route('getRequest') }}">
                      @csrf
                      <div class="row mb-3">
                        <div class="col-lg-4">Nama</div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nama" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-4">Perusahaan</div>
                        <div class="col-lg-8">
                          <input
                            type="text"
                            class="form-control"
                            name="perusahaan"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-4">Email</div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="email" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-4">Deskripsi Pekerjaan</div>
                        <div class="col-lg-8">
                          <textarea
                            type="text"
                            class="form-control"
                            name="deskripsi"
                            rows="5"
                          ></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <button
                            type="submit"
                            class="btn btn-lg btn-primary float-end"
                          >
                            Kirim
                          </button>
                        </div>
                      </div>
                      <div class="row pt-5">
                        <div class="col-lg-10">
                          <hr />
                        </div>
                        <div class="col-lg-2">
                          <h6 class="mt-2" style="text-align: right">
                            Trace Report
                          </h6>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="single-footer f-about">
                <a class="d-flex align-items-center" href="{{ route('tracereport') }}">
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
                    <a target="_blank" href="https://www.instagram.com/kss_msg/"
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
                      <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                      <li>
                        <a href="{{ route('terms_conditions') }}"
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

    <a href="#" class="scroll-top" style="display: none">
      <i class="lni lni-chevron-up"></i>
    </a>

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
