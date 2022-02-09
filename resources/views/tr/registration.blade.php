<html class="no-js" lang="id">
  <head>
    <title>Daftar Akun Demo</title>
    @include('tr.head')
  </head>
  <body>
    @include('tr.preloader')

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
                  <?php
                    if (isset($_GET['status'])) {
                      if ($_GET['status'] == 'success') {
                  ?>
                    <div class='text-center'>
                      <h3>Pendaftaran telah berhasil. Terima Kasih telah mendaftarkan diri Anda.</h3>
                      <h3>Tim maketing kami akan menghubungi Anda dalam waktu 2x24 jam.</h3>
                      Ikuti kami di Instagram @trace.report atau Email kami di tracereport@kssgroup.id
                    </div>
                  <?php
                      } else {
                  ?>
                    <div class='text-center'>
                      <h3>Terjadi kesalahan dalam pendaftaran. Mohon coba beberapa saat lagi.</h3>
                      <br>
                      <a class="mt-3" href="{{ route('registration') }}">Kembali ke pendaftaran</a>
                    </div>
                  <?php
                      }
                  ?>
                    <div class='text-center'>
                      <br>
                      <a class="mt-4" href="{{ route('tracereport') }}">Kembali ke halaman utama</a>
                    </div>
                  <?php
                    } else {
                  ?>
                    <form method="post" action="{{ route('getRequest') }}">
                      @csrf
                      <div class="row mb-3">
                        <div class="col-lg-4">Nama</div>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="nama" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-4">Perusahaan</div>
                        <div class="col-lg-8">
                          <input
                            type="text"
                            class="form-control"
                            name="perusahaan"
                            required
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-lg-4">Email</div>
                        <div class="col-lg-8">
                          <input type="email" class="form-control" name="email" required />
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
                            required
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
                  <?php
                    }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('tr.footer')
    @include('tr.script')
  </body>
</html>
