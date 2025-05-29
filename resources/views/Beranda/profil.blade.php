@extends('layouts.main')
@section('container')
<div style="height: 1000px">

  
  {{-- bagian profil awal --}}

      <h1 class="myH2" style="    transition: 0.5s 0.2s;">Profil Singkat SMK Terpadu Ibaadurrahman</h1>
      <p class="myP">Kami memiliki visi untuk menjadi lembaga pendidikan pelatihan dan pengkaderan yang menghasilkan sumber daya manusia (SDM) yang bersih aqidahnya, sholih ibadahnya, santun akhlaknya, amanah dan profesional dalam kehidupannya.
        Kami memiliki misi melaksanakan pembelajaran yang berwawasan keunggulan dan keahlian dalam bidangnya, menghasilkan tamatan yang professional dalam spesialisasi keilmuannya juga bertakwa dalam kehidupannya, menciptakan kemampuan unjuk bekerja dan keahlian yang dapat digunakan untuk meningkatkan kualitas kehidupannya, dan mengembangkan minat dan bakat siswa melalui kegiatan ekstrakurikuler.</p>
  
  {{-- bagian profil akhir --}}
  
    {{-- bagian jurusan awal --}}
        <div class="col-md-12 col-sm-12">
            <div class="section-title wow fadeInUp" data-wow-delay="0.1s" style="text-align: center; padding-top:30px;">
                 <h1 class="myH2">Kompetensi Keahlian</h1>
                 <span class="myH2">AKL - APH - BDP - OTKP - RPL</span>
            </div>
       </div>

       <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ asset('assets/images/rpl1.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color: whitesmoke">
        <b><h5>RPL</h5></b>
        <b><p>Rekayasa perangkat Lunak</p></b>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ asset('assets/images/bdp.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color: whitesmoke">
        <b><h5>BDP</h5></b>
        <b><p>Bisnis Daring & Pemasaran</p></b>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/akl.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color: whitesmoke">
        <b><h5>AKL</h5></b>
        <b><p>Akuntansi dan Keuangan Lembaga</p></b>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/otkp.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color: whitesmoke">
        <b><h5>OTKP</h5></b>
        <b><p>Otomatisasi Tata Kelola Perkantoran</p></b>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/images/aph.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color: whitesmoke">
        <b><h5>APH</h5></b>
        <b><p>Akomodasi Perhotelan</p></b>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


      {{-- bagian jurusan akhir --}}


</div>

@endsection