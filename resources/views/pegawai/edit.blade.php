@extends('master.template')

@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Edit Data</h4>
            <p class="mb-0">Ini Adalah Halaman Edit Data Peserta</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}">Peserta</a></li>
            <li class="breadcrumb-item active"><a href="#"><span class="text-primary">Edit Data</span></a></li>
        </ol>
    </div>
</div>
@endsection

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 order-md-1 order-last">
                <div style="float: right">
                    <a href="{{ route('pegawai.index') }}">
                        <button class="btn btn-primary mt-2">
                            <i class="fa fa-arrow-circle-left"></i> Kembali
                        </button>
                    </a>
                </div>
                <h3>Edit Data Peserta</h3>
            </div>
        </div>
    </div>
    <div class="page-content mt-4"> 
        <section class="section">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('pegawai.update', $pegawai->id) }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('PUT')
                                    <small class="text-danger mb-1">(*) Wajib diisi</small>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="basicInput">Nama Peserta <small class="text-danger">*</small></label>
                                                <input type="text" value="{{ $pegawai->nama_peserta }}" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                                @error('nama')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput" class="mt-3">Gender <small class="text-danger">*</small></label>
                                                <br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="p" {{ $pegawai->gender == 'p' ? 'checked' : '' }}> Perempuan</label>
                                                <br>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="l" {{ $pegawai->gender == 'l' ? 'checked' : '' }}> Laki-laki</label>
                                                <br>
                                                <label for="basicInput" class="mt-2">Tanggal Lahir <small class="text-danger">*</small></label>
                                                <input type="date" value="{{ $pegawai->tgl_lahir }}" name="tgl" class="form-control @error('tgl') is-invalid @enderror">
                                                @error('tgl')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput" class="mt-3">Alamat <small class="text-danger">*</small></label>
                                                <input type="text" value="{{ $pegawai->alamat }}" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                                @error('alamat')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="basicInput">No Telepon <small class="text-danger">*</small></label>
                                                <input type="text" value="{{ $pegawai->no_telepon }}" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror">
                                                @error('no_telepon')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput" class="mt-3">Pelatihan IT<small class="text-danger">*</small></label>
                                                <input type="text" value="{{ $pegawai->pelatihan_it }}" name="pelatihan_it" class="form-control @error('pelatihan_it') is-invalid @enderror">
                                                @error('pelatihan_it')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="" class="mt-3">Lembaga<small class="text-danger">*</small></label>
                                                <select class="form-control" name="dp">
                                                    <option hidden></option>
                                                    @foreach ($departemen as $item)
                                                        <option value="{{ $item->id }}" {{ $pegawai->departement_id == $item->id ? 'selected' : '' }}>{{ $item->nama_lembaga }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Peserta <small>Max. 500 kB</small> (Kosongkan jika tidak ingin mengubah)</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="foto">
                                                        <label class="custom-file-label" for="foto">Choose file</label>
                                                    </div>
                                                </div>
                                                @error('foto')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-3" type="submit">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
