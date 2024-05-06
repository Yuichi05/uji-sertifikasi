@extends('master.template')
@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Lembaga</h4>
            <p class="mb-0">Ini Adalah Halaman Data Lembaga</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#"><span class="text-primary">Departement</span></a></li>
        </ol>
    </div>
</div>
@endsection
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Lembaga</h4>
                <a href="{{ route('departemen.create') }}">
                    <button class="btn btn-primary mt-3"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lembaga</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $dp)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td class="text-bold-500">{{ $dp->nama_lembaga }}</td>
                            <td>
                                <div class="buttons">
                                    {{-- ini tombol detail  --}}
                                    <a href="{{ route('departemen.show', $dp->id) }}" class="btn icon btn-primary">
                                        <i class="fa fa-info-circle"></i>
                                    </a>
                                    {{-- ini tombol edit  --}}
                                    <a href="{{ route('departemen.edit', $dp->id) }}" class="btn icon btn-warning">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    {{-- ini tombol hapus  --}}
                                    <form id="delete-form-{{ $dp->id }}" action="{{ route('departemen.destroy', $dp->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    
                                    <a href="#" onclick="if(confirm('Anda yakin data ini akan dihapus?')){ event.preventDefault(); document.getElementById('delete-form-{{ $dp->id }}').submit(); }" class="btn icon btn-danger">
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