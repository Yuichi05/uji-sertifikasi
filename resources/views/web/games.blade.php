@extends('master.template')
@section('hero')
<section class="page-info-section set-bg" data-setbg="{{ asset('front') }}/img/page-top-bg/3.jpg">
    <div class="pi-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 text-white">
                    <h2 style="font-weight: bold"><span class="text-warning">Games</span> Reviews</h2>
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
@section('trending')
<section class="page-section review-page spad">
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
            <div class="col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" style="height: 30rem" data-setbg="{{ asset('upload') }}/{{ $item->banner }}">
                        <div class="score yellow">{{ $item->kesulitan }}</div>
                    </div>
                    <div class="review-text">
                        <h4>{{ $item->nama_game }}</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star is-fade"></i>
                        </div>
                        <p class="card-text">@if (Str::length($item->deskripsi) > 40)
                            {{ substr($item->deskripsi, 0, 40) . "[.....]" }}
                        @else
                        {{$item->deskripsi}}
                        @endif</p>
                    </div>
                </div>
            </div>
            @endforeach
            
    </div>
</section>
@endsection
@section('diskon')
<section class="review-section review-dark spad set-bg" style="margin-bottom: -80px" data-setbg="{{ asset('front') }}/img/review-bg-2.jpg">
    <div class="container">
        <div class="section-title text-white">
            <h2>Offline Games Reviews</h2>
        </div>
        <div class="row text-white">
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{ asset('front') }}/img/review/1.jpg">
                        <div class="score yellow">9.3</div>
                    </div>
                    <div class="review-text">
                        <h5>Assasin’’s Creed</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{ asset('front') }}/img/review/2.jpg">
                        <div class="score purple">9.5</div>
                    </div>
                    <div class="review-text">
                        <h5>Doom</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{ asset('front') }}/img/review/3.jpg">
                        <div class="score green">9.1</div>
                    </div>
                    <div class="review-text">
                        <h5>Overwatch</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{ asset('front') }}/img/review/4.jpg">
                        <div class="score pink">9.7</div>
                    </div>
                    <div class="review-text">
                        <h5>GTA</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer')
<footer class="footer-section">
    <div class="container">
    <ul class="footer-menu">
        <li><a href="{{ asset('front') }}/index.html">Home</a></li>
        <li><a href="{{ asset('front') }}/review.html">Games</a></li>
        <li><a href="{{ asset('front') }}/categories.html">Blog</a></li>
        <li><a href="{{ asset('front') }}/community.html">Forums</a></li>
        <li><a href="{{ asset('front') }}/contact.html">Contact</a></li>
    </ul>
    <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{ asset('front') }}/https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>
    </div>
    </footer>
@endsection