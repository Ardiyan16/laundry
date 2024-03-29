@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Pegawai</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pegawai</a></li>
                    <li class="active">Data Pegawai</li>
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
                        <a href="{{ url('/t_pegawai') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pegawai</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telp</th>
                                    <th>Email</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp    

                                @foreach($view as $pgw)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pgw->nama }}</td>
                                    <td>{{ $pgw->alamat }}</td>
                                    <td>{{ $pgw->no_telp }}</td>
                                    <td>{{ $pgw->email }}</td>
                                    <td> 
                                        <a href="{{ route('savep.edit', $pgw->id) }}" style="color: white" class="badge bg-primary"><i class="fa fa-edit" style="color: white"></i> Edit</a> |
                                        <form action="{{ url('savep', $pgw->id ) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" style="color: white" onclick="return confirm('Apakah anda yakin hapus jadwal?')"><i class="fa fa-trash" style="color: white"></i> Hapus</button>
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