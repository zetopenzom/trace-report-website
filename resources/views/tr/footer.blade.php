<!-- Start Footer Area -->
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
<!--/ End Footer Area -->

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>