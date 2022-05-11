<!-- Start Footer Area -->
<img class="w-100 bg-custom-blue1" src="{{asset('images/footer/wave.png')}}" alt="#" />
<footer class="footer pb-5">
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
            <ul class="social">
                <li>
                <a target="_blank" href="https://www.instagram.com/trace.report/"
                    ><i class="lni lni-instagram fs-1"></i
                ></a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="single-footer f-link perusahaan">
                <h3>Perusahaan</h3>
                <ul>
                    <li>
                    <a target="_blank" href="{{ route('about') }}"
                        >Tentang Kami</a
                    >
                    </li>
                    <li>
                    <a target="_blank" href="https://kssgroup.id/"
                        >Website</a
                    >
                    </li>
                    <li>
                    <a target="_blank" href="{{ route('contact') }}"
                        >Kontak</a
                    >
                    </li>
                </ul>
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