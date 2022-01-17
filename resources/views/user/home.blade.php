@extends('layout.user')
@section('userlayout')

<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="user/assets/images/melon.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h4 style="color: white">Selamat Datang di</h4>
                <h2>Tefa <em style="color: greenyellow">Greenhouse</em></h2>
            <div class="main-button scroll-to-section">
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>About <em style="color: greenyellow">Me</em></h2>
                    <img src="user/assets/images/line-dec.png" alt="waves">
                    <p>Tefa Greenhouse merupakan tempat budidaya tanaman holtikultura dengan sistem hidroponik</p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="user/assets/images/tanaman.png" alt="First One">
                        </div>
                        <div class="right-content">
                            <h4>Penjadwalan Tanaman</h4>
                            <p>Penjadwalan tanaman dilakukan dengan sistem penjadwalan.</p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="user/assets/images/karyawan.png" alt="second one">
                        </div>
                        <div class="right-content">
                            <h4>Karyawan</h4>
                            <p>Karyawan merupakan menu untuk data-data karyawan tefa greenhouse.</p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="user/assets/images/tanaman.png" alt="third gym training">
                        </div>
                        <div class="right-content">
                            <h4>Rangkaian Tanam</h4>
                            <p>rangkaian tanam merupakan rangkaian-rangkaian proses tanam pada tanaman holtikultura.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="user/assets/images/tanaman.png" alt="fourth muscle">
                        </div>
                        <div class="right-content">
                            <h4>Hasil Tanam</h4>
                            <p>Hasil tanam merupakan informasi mengenai hasil dari tanam / hasil panen tefa greenhouse .</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Item End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section" id="call-to-action" style="background-image: url(user/assets/images/holtikultura.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Kalau tidak <em style="color: greenyellow">sekarang</em>, kapan <em style="color: greenyellow">lagi</em>!</h2>
                    <p>.</p>
                    {{-- <div class="main-button scroll-to-section">
                        <a href="#our-classes">Become a member</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4234881763405!2d113.72096101433053!3d-8.160017184012847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1642426295234!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="contact-form">
                    <h5 style="color: greenyellow">Alamat :</h5>
                    <br>
                    <h5 style="color: greenyellow">No Telp :</h5>
                    <br>
                    <h5 style="color: greenyellow">Email :</h5>
                    <br>
                    <h5 style="color: greenyellow">Sosial Media :</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection