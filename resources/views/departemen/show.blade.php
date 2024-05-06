@extends('master.template')
@section('nav')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Show</h4>
            <p class="mb-0">Ini Adalah Halaman Show Lembaga</p>
        </div>
    </div>
    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Main Menu</a></li>
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="departemen.index">Lembaga</a></li>
            <li class="breadcrumb-item active"><a href="#"><span class="text-primary">Show</span></a></li>
        </ol>
    </div>
</div>
@endsection
@section('konten')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Show Lembaga</h4>
                <a href="{{ route('departemen.index') }}">
                    <button class="btn btn-primary mt-3"><i class="fa fa-arrow-circle-left"></i> Kembali</button>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lembaga</th>
                                <th>Alamat</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td class="text-bold-500">{{ $departemen['nama_lembaga'] }}</td>
                            <td class="text-bold-500">{{ $departemen['alamat'] }}</td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection