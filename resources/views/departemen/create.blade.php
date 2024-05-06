@extends('master.template')
@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Tambah Data</h4>
            <p class="mb-0">Ini Adalah Halaman Tambah Data</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="departemen.index">Lembaga</a></li>
            <li class="breadcrumb-item active"><a href="#"><span class="text-primary">Tambah Data</span></a></li>
        </ol>
    </div>
</div>
@endsection
@section('konten')
<div class="row">
            <div class="col-7 order-md-1 order-last">
                <div style="float: right">
                    <a href="{{ route('departemen.index') }}">
                    <button class="btn btn-primary">
                    <i class="fa fa-arrow-circle-left"></i> Kembali
                    </button>
                    </a>
                </div>
                <h3>Tambah Data Lembaga</h3>
            </div>
        </div>
        <div class="page-content mt-4"> 
            <section class="section">
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-7">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form action="{{ route('departemen.store') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="basicInput">Nama Lembaga</label>
                                            <input type="text" value="{{ old('nama_departemen') }}" name="nama_departemen" class="form-control @error('nama_departemen') is-invalid @enderror" id="basicInput" placeholder="Masukkan nama lembaga">
                                            @error('nama_departemen')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Alamat</label>
                                            <input type="text" value="{{ old('alamat') }}" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="basicInput" placeholder="Masukkan nama lembaga">
                                            @error('alamat')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary mt-3">
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
@endsection