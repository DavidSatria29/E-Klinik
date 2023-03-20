<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@400&family=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">    
<<<<<<< HEAD
    <link rel="stylesheet" href="css/master.css">
    <title>@yield('title')</title>
=======
    <link rel="stylesheet" href="{{ url('css/klinik.css') }}">
    <title>@yield('title')</title>

>>>>>>> 36eb4338960fff020c2f6647b3bc791cd2cb4cd4
</head>
<body>
  <section class="navigasi">
    <nav class="navbar fixed-top shadow navbar-expand-lg " style="background-color: #385399;">
      <div class="container-fluid justify-content-center">
        <a class="navbar-brand rounded" href="#">E-KLINIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent " aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 text-center">
            <li class="nav-item"><a class="nav-link @yield('menuBeranda')" aria-current="page" href="/klinik">Beranda</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuTentang')" href="#tentang">About Us</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuBerita')" href="#berita">Artikel</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuSakit')" href="/cek">Cek Penyakit</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuKontak')" href="#contact">Hubungi Kami </a></li>
          </ul>
      </div>
      </div>
  </nav>
</section>

@yield('content')

<footer class="kaki text-white">
    <div class="container">
      <div class="row">
        <div class="kopirek col-sm-6 mt-3 mb-3">
          Copyright &copy <b>E-Klinik</b><br>
          <a>Design By <span style="color: aqua">Kelompok 3</span></a>
        </div>
        <div class="hari col-sm-6 mt-3 " align="right">
          {{ date("l, d M Y") }}
        </div>
      </div>
    </div>
  </footer> 
  </body>
  </html>
