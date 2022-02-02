@extends('layouts.app')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">
                        <h1 class="banner-title">Struktur KSS Group</h1>
                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-center">

                <!-- BARIS PERTAMA - RISKA -->
                <div class="row justify-content-center">
                    <!-- RISKA -->
                    <div class="col-lg-4 col-sm-5 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/riska.png" class="img-fluid rounded" alt="Riska Amelia">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Riska Amelia</h3>
                                <p class="ts-designation">Direktur Utama</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 1 end -->
                    </div><!-- Col end -->
                </div><!-- Content row 1 end -->

                <!-- BARIS KEDUA - SIGIT, PIPIT -->
                <div class="row justify-content-center">
                    <!-- SIGIT -->
                    <div class="col-lg-3 col-sm-5 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/sigit.png" class="img-fluid rounded" alt="Sigit Dwinata">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Sigit Dwinata</h3>
                                <p class="ts-designation">Direktur Galangan</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 1 end -->
                    </div><!-- Col end -->
                    <!-- PIPIT -->
                    <div class="col-lg-3 col-sm-5 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/pipit.png" class="img-fluid rounded" alt="Novida Safitri">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Novida Safitri</h3>
                                <p class="ts-designation">General Manager</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 2 end -->
                    </div><!-- Col end -->
                </div><!-- Content row 1 end -->

                <!-- BARIS KETIGA - IMAM, REZA, OSHA, RAFSAN -->
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/imam.png" class="img-fluid rounded" alt="Imam Tohari">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Imam Tohari</h3>
                                <p class="ts-designation">Programmer</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 4 end -->
                    </div><!-- Col end -->
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/reza.png" class="img-fluid rounded" alt="Reza Fahlevi">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Reza Fahlevi</h3>
                                <p class="ts-designation">Kepala Operasional</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 5 end -->
                    </div><!-- Col end -->
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/osha.png" class="img-fluid rounded" alt="Osha Henricus">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">Osha Henricus</h3>
                                <p class="ts-designation">Staf Operasional</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 6 end -->
                    </div><!-- Col end -->
                    <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img loading="lazy" src="images/team/team6.jpg" class="img-fluid rounded" alt="M. Rafsanzani">
                            </div>
                            <div class="ts-team-content-classic">
                                <h3 class="ts-name">M. Rafsanzani</h3>
                                <p class="ts-designation">Staf Operasional</p>
                            </div>
                        </div>
                        <!--/ Team wrapper 4 end -->
                    </div><!-- Col end -->
                </div><!-- Content row end --> 

            </div><!-- Content Col end -->
        </div><!-- Main row end -->
    </div><!-- Conatiner end -->
</section><!-- Main container end -->

@stop

@push('script')

@endpush