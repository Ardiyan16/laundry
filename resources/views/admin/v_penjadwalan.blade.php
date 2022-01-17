@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Penjadwalan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Penjadwalan</a></li>
                    <li class="active">Data Penjadwalan</li>
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
                        <a href="{{ url('/t_penjadwalan') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Jadwal</a>
                        <a href="{{ url('/penjadwalan/riwayat') }}" class="btn btn-success"><i class="fa fa-history"></i> Riwayat Jadwal</a>
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
                                    <th>Opsi</th>
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
                                    <td>{{ date('d-m-Y', strtotime($jdwl->tanggal)) }} / {{ $jdwl->jam }}</td>
                                    <td>{{ $jdwl->keterangan }}</td>
                                    <td>{{ $jdwl->rangkaian }}</td>
                                    <td>{{ $jdwl->status }}</td>
                                    <td> 
                                        <a href="{{ route('savej.edit', $jdwl->id) }}" style="color: white" class="badge bg-primary"><i style="color: white" class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ url('savej', $jdwl->id ) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" style="color: white" onclick="return confirm('Apakah anda yakin hapus jadwal?')"><i style="color: white" class="fa fa-trash"></i> Hapus</button>
                                        </form>
                                        <form action="{{ url('/penjadwalan/status' ) }}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" value="{{ $jdwl->id }}" name="id">
                                            <button class="badge bg-success border-0" style="color: white" onclick="return confirm('Apakah jadwal telah selesai?')"><i style="color: white" class="fa fa-check"></i> Selesai</button>
                                        </form>
                                    </td>
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