@extends('layout.user')
@section('userlayout')

<section class="section" id="schedule" style="background-image: url({{ url('user/assets/images/melon2.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading dark-bg">
                    <h2>Penjadwalan <em style="color: greenyellow">Tanam</em></h2>
                    <img src="{{ url('user/assets/images/line-dec.png') }}" alt="">
                    <p>Penjadwalan tanaman ini ditunjukkan agar proses penanaman dari masa pemeraman sampai masa panen terstruktur dan tepat waktu.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="schedule-table filtering">
                    <table>
                        <thead>
                            <tr>
                                <td>Kegiatan</td>
                                <td>Tanggal</td>
                                <td>Jam</td>
                                <td>rangkaian tanam</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwal as $j)
                            <tr>
                                <td class="day-time">{{ $j->kegiatan }}</td>
                                <td class="monday ts-item show">{{ date('d-m-Y', strtotime($j->tanggal)) }}</td>
                                <td>{{ $j->jam }}</td>
                                <td>{{ $j->rangkaian }}</td>
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