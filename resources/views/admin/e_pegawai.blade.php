@extends('layout.admin')
@section('adminlayout')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Pegawai</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Pegawai</a></li>
                    <li class="active">Edit Pegawai</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Pegawai</strong>
        </div>
        <form action="{{ url('savep', $edit->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @method('put')
            @csrf
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Enter Nama..." value="{{ old('nama', $edit->nama) }}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="email-input" class=" form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="alamat" name="alamat" placeholder="Enter Alamat" value="{{ old('alamat', $edit->alamat) }}" class="form-control @error('alamat') is-invalid @enderror">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="password-input" class=" form-control-label">No Telepon</label></div>
                    <div class="col-12 col-md-9"><input type="number" id="no_telp" name="no_telp" placeholder="No Telepon..." value="{{ old('no_telp', $edit->no_telp) }}" class="form-control  @error('no_telp') is-invalid @enderror">
                        @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Email</label></div>
                    <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Email..." value="{{ old('email', $edit->email) }}" class="form-control  @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder="Enter Password..." value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection