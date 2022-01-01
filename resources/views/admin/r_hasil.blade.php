@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Riwayat Hasil Panen</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Hasil Panen</a></li>
                    <li class="active">Riwayat Hasil Panen</li>
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
                        <a href="{{ url('/hasilpanen') }}" class="btn btn-primary"><i class="fa fa-table"></i> Data Hasil Panen</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rangkaian Tanam</th>
                                    <th>Jumlah Hasil</th>
                                    <th>Pegawai / Penanggung Jawab</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp    

                                @foreach($view as $hsl)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $hsl->rangkaian }}</td>
                                    <td>{{ $hsl->jumlah_panen }}</td>
                                    <td>{{ $hsl->nama }}</td>
                                    <td> 
                                        <a href="{{ route('saveh.edit', $hsl->id_rangkaian) }}" style="color: white" class="badge bg-primary"><i style="color: white" class="fa fa-edit"></i> Detail Rangkaian</a>
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