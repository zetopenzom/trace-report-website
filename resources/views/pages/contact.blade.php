@extends('layouts.app')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">KONTAK</h1>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Kantor Kami</h2>
                <h3 class="section-sub-title">Temukan Lokasi Kami</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="google-map">
            <!-- <div id="map" class="map" data-latitude="-0.4645449922869426" data-longitude="117.17477802329604" data-marker="images/marker.png" data-marker-name="KSS Group"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.746931912772!2d117.1749926!3d-0.4653389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77ea5253cd2d69f7!2sKss%20Group!5e0!3m2!1sen!2sid!4v1634876930882!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="gap-40"></div>

        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.KSS Group.com/constra/contact-form/ -->
        <!-- <div class="row">
            <div class="col-md-12">
                <h3 class="column-title">Kami Butuh Saran Anda</h3>
                <form id="contact-form" action="#" method="post" role="form">
                    <div class="error-container"></div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Subyek</label>
                                <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                    </div>
                    <div class="text-right"><br>
                        <button class="btn btn-primary solid blank" type="submit">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div> -->
        <!-- Content row -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@stop

@push('script')

@endpush