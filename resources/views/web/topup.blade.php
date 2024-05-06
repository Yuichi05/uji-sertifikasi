@extends('master.template')
@section('hero')
<section class="page-info-section set-bg" data-setbg="{{ asset('front') }}/img/page-top-bg/5.jpg">
    <div class="pi-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 text-white">
                    <h2 style="font-weight: bold"><span class="text-warning">Top Up</span> Games</h2>
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
@section('popular')
<section class="tournaments-section spad">
    <div class="container">
<h2 class="text-white">Paket Top Up</h2>
<div class="row mt-5">
    @foreach ($dm as $item)
    <div class="col-md-6 mt-5">
        <div class="tournament-item mb-4 mb-lg-0">
            <div class="ti-notic">Top Up</div>
            <div class="ti-content">
                <div class="ti-thumb set-bg" data-setbg="{{ asset('upload') }}/{{ $item->games->banner }}"></div>
                <div class="ti-text">
                    <h4>{{ $item->games->nama_game }}</h4>
                    <ul>
                        <li>{{ $item->nama_paket }}</li>
                        <li>{{ $item->harga }}</li>
                        <li>{{ $item->jumlah_diamond }} Diamond</li>
                    </ul>
                </div>
    <a href="{{ url('trans') }}"><button class="btn btn-primary mt-5">Beli</button></a>

            </div>
        </div>
    </div>
    @endforeach
</div>
    </div>
</section>
@endsection
@section('footer')
<section class="footer-top-section">
    <div class="container">
        <div class="footer-top-bg">
            <img src="{{ asset('front') }}/img/footer-top-bg.png" alt="">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo text-white">
                    <img src="img/footer-logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget mb-5 mb-md-0">
                    <h4 class="fw-title">Latest Posts</h4>
                    <div class="latest-blog">
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{ asset('front') }}/img/latest-blog/1.jpg"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{ asset('front') }}/img/latest-blog/2.jpg"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{ asset('front') }}/img/latest-blog/3.jpg"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h4 class="fw-title">Top Comments</h4>
                    <div class="top-comment">
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{ asset('front') }}/img/authors/1.jpg"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{ asset('front') }}/img/authors/2.jpg"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{ asset('front') }}/img/authors/3.jpg"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{ asset('front') }}/img/authors/4.jpg"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->


<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <ul class="footer-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="review.html">Games</a></li>
            <li><a href="categories.html">Blog</a></li>
            <li><a href="community.html">Forums</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
    </div>
</footer>
@endsection