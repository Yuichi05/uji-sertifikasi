@extends('master.template')
@section('hero')
<section class="page-info-section set-bg" data-setbg="{{ asset('front') }}/img/page-top-bg/2.jpg">
    <div class="pi-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 text-white">
                    <h2 style="font-weight: bold"><span class="text-warning">Transaksi</span><br>Top Up Games</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('bergerak')
<div class="ln-title">Genre Games</div>
<div class="news-ticker">
    <div class="news-ticker-contant">
        <div class="nt-item"><span class="new">Open World</span></div>
        <div class="nt-item"><span class="strategy">Battle Rolaye</span></div>
        <div class="nt-item"><span class="racing">MOBA</span></div>
        <div class="nt-item"><span class="new">Sports</span></div>
        <div class="nt-item"><span class="strategy">FPS</span></div>
        <div class="nt-item"><span class="racing">RPG</span></div>
        <div class="nt-item"><span class="new">Simulation</span></div>
        <div class="nt-item"><span class="strategy">Strategy</span></div>
        <div class="nt-item"><span class="racing">Adventure</span></div>
        <div class="nt-item"><span class="new">Arcade</span></div>
        <div class="nt-item"><span class="strategy">Action</span></div>
        <div class="nt-item"><span class="racing">Racing</span></div>
    </div>
</div>
@endsection
@section('promo')
<section class="tournaments-section spad" style="margin-top: -80px">
    <div class="container">
        <h2 class="text-white">Top Up</h2>
        <div class="row mt-5">
<div class="col-md-6">
    <div class="tournament-item mb-4 mb-lg-0">
        <div class="ti-notic">Games</div>
        <div class="ti-content">
            <div class="ti-thumb set-bg" data-setbg="{{ asset('front') }}/img/tournament/1.jpg"></div>
            <div class="ti-text">
                <h4>World Of WarCraft</h4>
                <ul>
                    <li class="mt-5"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto a sequi commodi debitis quia deleniti doloribus quisquam excepturi unde nostrum?</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="tournament-item mb-4 mb-lg-0">
        <div class="ti-content">
            <form action="{{ route('pembelian.store') }}" method="POST">
                @csrf
                <h5 class="text-warning mb-2" style="margin-right: 296px">Nama Pembeli</h5>
                <div class="input-group mb-3">
                    <span class="input-group-text bg-warning"><i class="fa fa-envelope text-white"></i></span>
                    <input type="text" class="form-control" name="nama">
                </div>
                <small class="text-white">Harap mengisi alamat email apabila ingin bukti pembayaran</small>
        </div>
    </div>
    <div class="tournament-item mb-4 mb-lg-0 mt-4">
        <div class="ti-content">
            
                    <h5 class="text-warning mb-2" style="margin-right: 296px">Jumlah Order</h5>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-warning"><i class="fa fa-user text-white"></i></span>
                        <input type="text" class="form-control" placeholder="ID Pengguna" name="jumlah">
                    </div>
            </div>
        </div>
        <div class="tournament-item mb-4 mb-lg-0 mt-4">
            <div class="ti-content">
                        <h5 class="text-warning mb-2" style="margin-right: 296px">Berapa Diamond</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-warning"><i class="fa fa-user text-white"></i></span>
                            <input type="text" class="form-control" placeholder="ID Pengguna" name="dm">
                        </div>
                        <button class="btn btn-primary mt-5" type="submit">Beli</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</section>
@endsection