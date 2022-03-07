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
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">Kantor Kami</h2>
                <h3 class="section-sub-title mb-3">Temukan Lokasi Kami</h3>
            </div>
            <div class="col-lg-7 py-2">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.746931912772!2d117.1749926!3d-0.4653389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x77ea5253cd2d69f7!2sKss%20Group!5e0!3m2!1sen!2sid!4v1634876930882!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-5 py-2">
                <h4>Alamat Lengkap</h4>
                <h5>Jl. Bukit Alaya, Ruko Alaya Junction, Blok LE18<br>Sungai Pinang Dalam, Sungai Pinang, Samarinda<br>Kalimantan Timur, Indonesia</h5>
                <h4 class="mt-5">Email Kami</h4>
                <h5>tracereport@kssgroup.id</h5>
            </div>
        </div>
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@stop

@push('script')

@endpush