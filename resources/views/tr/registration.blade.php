<html class="no-js" lang="id">
  <head>
    <title>Daftar Akun Demo</title>
    @include('tr.head')
  </head>
  <body>
    @include('tr.preloader')
    @include('tr.header')

    <section class="py-5 mt-custom-5 blog-single">
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
                      if (isset($_GET['email'])) {
                        $email = $_GET['email'];
                      }
                  ?>
                    <form method="post" action="{{ route('getRequest') }}">
                      @csrf
                      <h3 class="text-center">Daftar Akun Premium Anda Gratis</h3>
                      <!-- nama -->
                      <div class="mb-3">
                        <label>Nama</label>
                          <input type="text" class="form-control" name="nama" autofocus required />
                      </div>
                      <!-- perusahaan -->
                      <div class="mb-3">
                        <label>Perusahaan</label>
                          <input
                            type="text"
                            class="form-control"
                            name="perusahaan"
                            required
                          />
                      </div>
                      <!-- email -->
                      <div class="mb-3">
                        <label>Email</label>
                          <input type="email" class="form-control" name="email" value="<?= $email; ?>" required />
                      </div>
                      <!-- desc -->
                      <div class="mb-3">
                        <label>Deskripsi Pekerjaan</label>
                          <textarea
                            type="text"
                            class="form-control"
                            name="deskripsi"
                            rows="5"
                            required
                          ></textarea>
                      </div>
                      <!-- button -->
                      <div class="mb-3 d-flex justify-content-end">
                        <button
                          type="submit"
                          class="btn btn-lg btn-blue"
                        >
                          Kirim
                        </button>
                      </div>
                      <!-- tr -->
                      <h6 class="m-2">
                        Trace Report
                      </h6>
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
