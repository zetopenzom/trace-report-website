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
                          <input type="text" class="form-control" name="email" required />
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
