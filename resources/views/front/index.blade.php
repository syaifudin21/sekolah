@extends('front.template')

@section('title')
<div class="nav-header center">
  <h1>Selamat Datang </h1>
  <div class="tagline">Mengutamakan <span class="element"></span> </div>
</div>
@endsection

@section('background', asset('images/standar/banner1.jpg'))

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/event.css')}}">
@endsection

@section('menu')
<div class="categories-wrapper blue darken-3">
  <div class="categories-container">
    <ul class="container categories">
      <li class="active"><a href="#artikel">Artikel</a></li>
      <li><a href="#bigbang">Pengumuman</a></li>
      <li><a href="#sacred">Agenda</a></li>
    </ul>
  </div>
</div>
@endsection

@section('content')
<div id="portfolio" class="section gray">
  <div class="container">
    <div class="gallery row">
      <div class="gallery-item gallery-expand gallery-filter artikel">
        <div class="col s12 m8">
        
        @foreach($artikels as $artikel)
          <div class="row">
          <div class="col s3">
            <img src="{{asset('images/siswa/Desert.jpg')}}" width="100%" style="margin: 6px auto;">
          </div>
          <div class="col s9">
            <h5>Ini adalah Judul</h5>
            <span>5 Maeret 2018 - 20:40 - Author : Syaifudin</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderi..... <a href="">Lihat Selengkapnya</a> </p>
          </div>
        </div>
        @endforeach
        
        </div>
        <div class="col s12 m4">
          <div class="row">
        <div class="col s4">
          <div class="date">
            <span class="binds"></span>
            <span class="month">August</span>
            <h1 class="day">28</h1>
          </div>
        </div>
        <div class="col s8">
          <b>Penerimaan Siswa Baru</b><br>
          Lorem ipsum dolor sit amet,  
        </div>
      </div>
      <div class="row">
        <div class="col s4">
          <div class="date">
            <span class="binds"></span>
            <span class="month">August</span>
            <h1 class="day">08</h1>
          </div>
        </div>
        <div class="col s8">
          <b>Pener sitrimaan Siswa Baru</b><br>
          Lorem ipsum dolo amet,  
        </div>
      </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/typed.min.js')}}"></script>
<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function() {
          new Typed('.element', {
          cursorChar: '|',
          strings: ["Menciptakan Dunia dalam Genggaman.", "Membantu dan Menghubungkan Guru dan Siswa", "Memudahkan Pengawasan Perkembangan Siswa"],
          startDelay: 1000,
          showCursor: true,
          autoInsertCss: true,
          backDelay: 2000,
          typeSpeed: 100,
          backSpeed: 20,
          // smartBackspace: false, // this is a default
          loop: true
        });
    });
</script>
@endsection
