@extends('layout.user')
@section('userlayout')

 <!-- ***** Our Classes Start ***** -->
 <section class="section" id="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Rangkaian <em style="color: yellowgreen">Tanam</em></h2>
                    <img src="{{ url('user/assets/images/line-dec.png') }}" alt="">
                    <p>Rangkaian Tanam adalah proses tanam buah melon pada tefa greenhouse dari awal sampai selesai.</p>
                </div>
            </div>
        </div>
        <div class="row" id="tabs">
          <div class="col-lg-4">
            <ul>
              <li><a href='#tabs-1'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Pemeraman</a></li>
              <li><a href='#tabs-2'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Persemaian</a></a></li>
              <li><a href='#tabs-3'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Penanaman</a></a></li>
              <li><a href='#tabs-4'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Fertigasi</a></a></li>
              <li><a href='#tabs-5'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Prunning</a></a></li>
              <li><a href='#tabs-6'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Topping</a></a></li>
              <li><a href='#tabs-7'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Perambatan Sulur</a></a></li>
              <li><a href='#tabs-8'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Pengendalian HPT</a></a></li>
              <li><a href='#tabs-9'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Polinasi</a></a></li>
              <li><a href='#tabs-10'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Seleksi Buah</a></a></li>
              <li><a href='#tabs-11'><img src="{{ url('user/assets/images/tanaman.png') }}" alt="">Pemanenan</a></a></li>
            </ul>
          </div>
          <div class="col-lg-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="{{ url('user/assets/images/pemeraman.jpg') }}" alt="Pemeraman">
                <h4 style="color: green">Pemeraman</h4>
                <p>Pemeraman dalam hortikultura adalah tindakan yang dilakukan untuk mempercepat proses pematangan buah[1] dengan menyimpan buah yang telah dipetik pada massa curah tertentu dalam tempat relatif tertutup; di Indonesia, massa curah ini dapat berupa beras, gabah, jerami, daun pisang, atau kertas koran.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-2'>
                <img src="{{ url('user/assets/images/persemaian.jpg') }}" alt="Persemaian">
                <h4 style="color: green">Persemaian</h4>
                <p>Persemaian merupakan proses menumbuhkan benih atau biji menjadi bibit yang akan dilanjutkan ke tahap selanjutnya (pembesaran).</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-3'>
                <img src="{{ url('user/assets/images/melon.jpeg') }}" alt="Penanaman">
                <h4 style="color: green">Penanaman</h4>
                <p>Penanaman adalah kegiatan memindahkan bibit dari tempat penyemaian ke lahan pertanaman untuk di dapatkan hasil produk dari tanaman yang di budidayakan.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-4'>
                <img src="{{ url('user/assets/images/fertigasi.jpg') }}" alt="Fertigasi">
                <h4 style="color: green">Fertigasi</h4>
                <p>Sistem ini adalah bentuk lain dari sistem yang dimiliki oleh teknik hidroponik yaitu dengan sistem fertilisasi dan irigasi. Sebagian orang juga menyebutnya sistem tetes, yaitu sistem hidroponik yang bermaksud menghemat air dan pupuk.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-5'>
                <img src="{{ url('user/assets/images/pruning.jpg') }}" alt="Pruning">
                <h4 style="color: green">Pruning</h4>
                <p>Pruning adalah sebuah proses pembuangan bagian bagian tertentu pada tanaman seperti cabang atau ranting sehingga tanaman tersebut dapat tumbuh sesuai dengan yang kita inginkan (rapi). Tanaman melon adalah tanaman yang mempunyai banyak cabang, cabang tersebut tumbuh pada setiap ketiak daun..</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-6'>
                <img src="{{ url('user/assets/images/toping.jpg') }}" alt="Topping">
                <h4 style="color: green">Topping</h4>
                <p>Pangkas pucuk (toping) merupakan salah satu budidaya yang memungkinkan buah menerima asilmilat lebih banyak dibanding organ tanaman yang lain.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-7'>
                <img src="{{ url('user/assets/images/perambatansulur.jpg') }}" alt="Perambatan Sulur">
                <h4 style="color: green">Perambatan Sulur</h4>
                <p>.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-8'>
                <img src="{{ url('user/assets/images/hpt.jpeg') }}" alt="Pengendalian HPT">
                <h4 style="color: green">Pengendalian HPT</h4>
                <p>Pengendalian Hama Penyakit pada Tanaman buah melon.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-9'>
                <img src="{{ url('user/assets/images/polinasi.jpg') }}" alt="Polinasi">
                <h4 style="color: green">Polinasi</h4>
                <p>Polinasi atau penyerbukan adalah proses jatuhnya serbuk sari ke permukaan kepala putik pada bunga yang sama atau bunga yang lainnya. Peristiwa penyerbukan ini merupakan bagian penting dari proses reproduksi tumbuhan berbiji.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-10'>
                <img src="{{ url('user/assets/images/seleksi.jpg') }}" alt="Seleksi Buah">
                <h4 style="color: green">Seleksi Buah</h4>
                <p>Seleksi bakal buah yang muncul diatas minimal ruas ke 6 atau ruas ke 10 (tergantung jenis melon yang ditanam). Bakal buah yang muncul sebelum ruas ke enam kurang bagus untuk dibesarkan karena sulit besar dan cepat matang.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
              <article id='tabs-11'>
                <img src="{{ url('user/assets/images/panen.jpg') }}" alt="Pemanenan">
                <h4 style="color: green">Pemanenan</h4>
                <p>Cara memanen melon dilakukan dengan memotong tangkai buah menggunakan pisau tajam, dan menyisakan tangkai minimal 2 cm untuk memperpanjang masa simpan buah. Pemanenan dapat dilakukan secara bertahap, dengan terlebih dahulu memetik buah yang benar-benar telah siap dipanen.</p>
                <div class="main-button">
                    <a style="background-color: greenyellow; color: green" href="{{ url('homeuser/penjadwalan') }}">Lihat Jadwal</a>
                </div>
              </article>
            </section>
          </div>
        </div>
    </div>
</section>
<!-- ***** Our Classes End ***** -->

@endsection