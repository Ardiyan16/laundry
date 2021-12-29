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
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kegiatan</th>
                                    <th>Tanggal/Jam</th>
                                    <th>Keterangan</th>
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
                                    <td>{{ $jdwl->tanggal }} / {{ $jdwl->jam }}</td>
                                    <td>{{ $jdwl->keterangan }}</td>
                                    <td> 
                                        <button class="btn btn-primary"><a href="{{ route('savej.edit', $jdwl->id) }}" class="text-white"><i class="fa fa-edit"></i> Edit</a></button>
                                        <form action="{{ url('savej', $jdwl->id ) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin hapus jadwal?')"><i class="fa fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                    <td>

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