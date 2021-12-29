@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Jadwal</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Penjadwalan</a></li>
                    <li class="active">Tambah Penjadwalan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Tambah Penjadwalan</strong>
        </div>
        <form action="{{ url('savej') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kegiatan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="kegiatan" class="form-control">
                            <option>-- Pilih Kegiatan --</option>
                            @if(old('kegiatan') == 'pemeraman')
                            <option value="pemeraman" selected>Pemeraman</option>
                            @else
                            <option value="pemeraman">Pemeraman</option>
                            @endif
                            @if(old('kegiatan') == 'persemaian')
                            <option value="persemaian" selected>Persemaian</option>
                            @else
                            <option value="persemaian">Persemaian</option>
                            @endif
                            @if(old('kegiatan') == 'penanaman')
                            <option value="penanaman" selected>Penanaman</option>
                            @else
                            <option value="penanaman">Penanaman</option>
                            @endif
                            @if(old('kegiatan') == 'fertigasi')
                            <option value="fertigasi" selected>Fertigasi</option>
                            @else
                            <option value="fertigasi">Fertigasi</option>
                            @endif
                            @if(old('kegiatan') == 'pruning')
                            <option value="pruning" selected>Pruning</option>
                            @else
                            <option value="pruning">Pruning</option>
                            @endif
                            @if(old('kegiatan') == 'topping')
                            <option value="topping" selected>Topping</option>
                            @else
                            <option value="topping" >Topping</option>
                            @endif
                            @if(old('kegiatan') == 'perambatan sulur')
                            <option value="perambatan sulur" selected>Perambatan Sulur</option>
                            @else
                            <option value="perambatan sulur">Perambatan Sulur</option>
                            @endif
                            @if(old('kegiatan') == 'pengendalian HPT')
                            <option value="pengendalian HPT" selected>Pengendalian HPT</option>
                            @else
                            <option value="pengendalian HPT">Pengendalian HPT</option>
                            @endif
                            @if(old('kegiatan') == 'polinasi')
                            <option value="polinasi" selected>Polinasi</option>
                            @else
                            <option value="polinasi">Polinasi</option>
                            @endif
                            @if(old('kegiatan') == 'seleksi buah')
                            <option value="seleksi buah" selected>Seleksi Buah</option>
                            @else
                            <option value="seleksi buah">Seleksi Buah</option>
                            @endif
                            @if(old('kegiatan') == 'pemanenan')
                            <option value="pemanenan" selected>Pemanenan</option>
                            @else
                            <option value="pemanenan">Pemanenan</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal</label></div>
                    <div class="col-12 col-md-9"><input type="date" id="tanggal" name="tanggal" placeholder="Enter Email" value="{{ old('tanggal') }}" class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">Jam</label></div>
                    <div class="col-12 col-md-9"><input type="time" id="password-input" name="jam" placeholder="Password" value="{{ old('jam') }}" class="form-control  @error('jam') is-invalid @enderror">
                        @error('jam')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Keterangan</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="keterangan" placeholder="Keterangan..." value="{{ old('keterangan') }}" class="form-control  @error('keterangan') is-invalid @enderror">
                        @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-send"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection