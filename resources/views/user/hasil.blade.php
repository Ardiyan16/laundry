@extends('layout.user')
@section('userlayout')

<section class="section" id="schedule" style="background-image: url({{ url('user/assets/images/melon2.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Hasil <em style="color: greenyellow">Tanam</em></h2>
                    <img src="{{ url('user/assets/images/line-dec.png') }}" alt="">
                    <p>Hasil Tanam adalah panen yang dihaslkan dari proses tanam.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
            <div class="contact-form">
                <form id="contact" action="" method="get">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <fieldset>
                                <select name="bulan" class="form-control">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <fieldset>
                                <select name="bulan" class="form-control">
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <fieldset>
                                <button type="submit" id="form-submit" style="background-color: greenyellow; color: green" class="main-button">Cari</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="schedule-table filtering">
                    <table>
                        <thead>
                            <tr>
                                <td>Tanam</td>
                                <td>Tanggal Panen</td>
                                <td>Jumlah hasil Panen</td>
                                <td>Pegawai / Penanggung Jawab</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hasil as $j)
                            <tr>
                                <td class="day-time">{{ $j->rangkaian }}</td>
                                <td class="monday ts-item show">{{ date('d-m-Y', strtotime($j->tgl_panen)) }}</td>
                                <td>{{ $j->jumlah_panen }}</td>
                                <td>{{ $j->nama }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection