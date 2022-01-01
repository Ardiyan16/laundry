@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Hasil Panen</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Hasil Panen</a></li>
                    <li class="active">Data Hasil Panen</li>
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
                        <a href="#tambah" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Hasil Panen</a>
                        <a href="{{ url('/hasilpanen/riwayat') }}" class="btn btn-success"><i class="fa fa-history"></i> Riwayat Tanam/Panen</a>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rangkaian Tanam</th>
                                    <th>Jumlah Hasil</th>
                                    <th>Pegawai / Penanggung Jawab</th>
                                    <th>Tanggal Panen</th>
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
                                    <td>{{ date('d-m-Y', strtotime($hsl->tgl_panen)) }}</td>
                                    <td> 
                                        <a href="#edit{{ $hsl->id }}" data-toggle="modal" style="color: white" class="badge bg-primary"><i style="color: white" class="fa fa-edit"></i> Edit</a>
                                        <form action="{{ url('saveh', $hsl->id ) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" style="color: white" onclick="return confirm('Apakah anda yakin hapus jadwal?')"><i style="color: white" class="fa fa-trash"></i> Hapus</button>
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
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hasil Panen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('saveh') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rangkaian</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_rangkaian" class="form-control">
                                    @foreach ($rangkaian as $r)
                                        @if (old('id_rangkaian') == $r->id)
                                            <option value="{{ $r->id }}" selected>{{ $r->rangkaian }}</option>
                                        @else
                                            <option value="{{ $r->id }}">{{ $r->rangkaian }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Hasil Panen</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jumlah_panen" name="jumlah_panen" placeholder="Enter Jumlah Panen..." value="{{ old('jumlah_panen') }}" class="form-control @error('jumlah_panen') is-invalid @enderror">
                                @error('jumlah_panen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pegawai</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_pegawai" class="form-control">
                                    @foreach ($pegawai as $r)
                                        @if (old('id_rangkaian') == $r->id)
                                            <option value="{{ $r->id }}" selected>{{ $r->nama }}</option>
                                        @else
                                            <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Panen</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_panen" name="tgl_panen" placeholder="Enter tgl Panen..." value="{{ old('tgl_panen') }}" class="form-control @error('tgl_panen') is-invalid @enderror">
                                @error('tgl_panen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@foreach ($view as $v)
<div class="modal fade" id="edit{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hasil Panen {{ $v->rangkaian }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('saveh', $v->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @method('put')
                    @csrf
                    <div class="card-body card-block">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Rangkaian</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_rangkaian" class="form-control">
                                    @foreach ($rangkaian as $r)
                                        @if (old('id_rangkaian', $v->id_rangkaian) == $r->id)
                                            <option value="{{ $r->id }}" selected>{{ $r->rangkaian }}</option>
                                        @else
                                            <option value="{{ $r->id }}">{{ $r->rangkaian }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Hasil Panen</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jumlah_panen" name="jumlah_panen" placeholder="Enter Jumlah Panen..." value="{{ old('jumlah_panen', $v->jumlah_panen) }}" class="form-control @error('jumlah_panen') is-invalid @enderror">
                                @error('jumlah_panen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pegawai</label></div>
                            <div class="col-12 col-md-9">
                                <select name="id_pegawai" class="form-control">
                                    @foreach ($pegawai as $r)
                                        @if (old('id_pegawai', $v->id_pegawai) == $r->id)
                                            <option value="{{ $r->id }}" selected>{{ $r->nama }}</option>
                                        @else
                                            <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Panen</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="tgl_panen" name="tgl_panen" placeholder="Enter tgl Panen..." value="{{ old('tgl_panen', $v->tgl_panen) }}" class="form-control @error('tgl_panen') is-invalid @enderror">
                                @error('tgl_panen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection