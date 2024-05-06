@extends('master.template')
@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Show</h4>
            <p class="mb-0">Ini Adalah Halaman Show Peserta</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="pegawai.index">Peserta</a></li>
            <li class="breadcrumb-item active"><a href="#"><span class="text-primary">Show</span></a></li>
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
                <h3>Detail Peserta</h3>
            </div>
        </div>
            <div class="row mt-5" id="basic-table">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="w-75" src="{{ asset('upload/' . $pegawai->foto) }}" alt="">
                                    </div>
                                    <div class="col-md-8" style="margin-left: -5%">
                                        <div class="table-responsive">
                                            <table class="table table-lg">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td>{{ $pegawai->nama_peserta }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gender</th>
                                                        <td>
                                                            @if($pegawai->gender == 'p')
                                                                Perempuan
                                                            @else
                                                                Laki-laki
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>No Telepon</th>
                                                        <td>0{{ $pegawai->no_telepon }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $pegawai->tgl_lahir)->isoFormat('dddd, D MMMM Y') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td>{{ $pegawai->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Pelatihan IT</th>
                                                        <td>{{ $pegawai->pelatihan_it }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Lembaga</th>
                                                        <td>{{ $pegawai->departemen->nama_lembaga }}</td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <th>Created At</th>
                                                        <td>{{ $pegawai->created_at->isoFormat('dddd, D MMMM Y HH:mm:ss') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Updated At</th>
                                                        <td>{{ $pegawai->updated_at->isoFormat('dddd, D MMMM Y HH:mm:ss') }}</td>
                                                    </tr>                                                                                                        --}}
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection