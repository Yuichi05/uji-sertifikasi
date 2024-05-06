@extends('master.template')
@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Peserta</h4>
            <p class="mb-0">Ini Adalah Halaman Data Peserta</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href=""><span class="text-primary">Peserta</span></a></li>
        </ol>
    </div>
</div>
@endsection
@section('konten')
@if (session('status'))                
<div class="alert alert-success alert-dismissible show fade">
  <i class="fa fa-check-circle"></i>  {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Peserta</h4>
                <a href="{{ route('pegawai.create') }}">
                    <button class="btn btn-primary mt-3"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama Peserta</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $pegawai)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>
                                <div class="round-img">
                                    <img width="35" src="{{ asset('upload')  . '/' . $pegawai->foto }}">
                                </div>
                            </td>
                            <td>{{ $pegawai->nama_peserta }}</td>
                            <td>
                                @if($pegawai->gender == 'p')
                                    Perempuan
                                @else
                                    Laki-laki
                                @endif
                            </td>
                            <td>{{ $pegawai->alamat }}</td>
                            {{-- <td>{{ $pegawai->departemen->nama_lembaga }}</td> --}}
                            <td>
                                <div class="buttons">
                                    {{-- ini tombol detail  --}}
                                    <a href="{{ route('pegawai.show', $pegawai->id) }}" class="btn icon btn-primary">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                    {{-- ini tombol edit  --}}
                                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn icon btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    {{-- ini tombol hapus  --}}
                                    <form id="delete-form-{{ $pegawai->id }}" action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    
                                    <a href="#" onclick="if(confirm('Anda yakin data ini akan dihapus?')){ event.preventDefault(); document.getElementById('delete-form-{{ $pegawai->id }}').submit(); }" class="btn icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection