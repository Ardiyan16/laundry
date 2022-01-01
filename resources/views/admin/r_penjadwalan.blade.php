@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Riwayat Penjadwalan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Penjadwalan</a></li>
                    <li class="active">Data Riwayat Penjadwalan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/penjadwalan') }}" class="btn btn-success"><i class="fa fa-history"></i> Data Jadwal</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Tanggal/Jam</th>
                                    <th>Keterangan</th>
                                    <th>Rangkaian</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp    

                                @foreach($view as $jdwl)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jdwl->kegiatan }}</td>
                                    <td>{{ $jdwl->tanggal }} / {{ $jdwl->jam }}</td>
                                    <td>{{ $jdwl->keterangan }}</td>
                                    <td>{{ $jdwl->rangkaian }}</td>
                                    <td>{{ $jdwl->status }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection