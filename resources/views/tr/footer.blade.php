<!-- Start Footer Area -->
<footer class="footer p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer f-link">
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
            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer f-link">
                <h3>Legal</h3>
                <ul>
                    <li><a href="{{ route('privacy_policy') }}">Kebijakan Privasi</a></li>
                    <li>
                    <a href="{{ route('terms_conditions') }}"
                        >Syarat & Ketentuan</a
                    >
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="social">
                    <li>
                        <a target="_blank" href="https://www.instagram.com/trace.report/" class="text-light mt-5"
                            ><i class="lni lni-instagram fs-1"></i
                        ></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-footer f-about">
                    <a class="d-flex align-items-center flex-column" href="{{ route('tracereport') }}">
                        <img
                            src="{{asset('images/logo/white-logo.png')}}"
                            class="logo-footer"
                            alt="#"
                        />
                        <h5 id="logo-text" class="mt-3">Trace Report</h5>
                    </a>
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