<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" >
    <title>@yield('title')</title>
    <style>
      .navbar{
        height: 70px;
      }
        .navbar-brand {
          color: #ffffff;
          font-weight: 900;
          font-family: 'Arial Narrow';
        }
        .nav-link{
          color: lightgrey;
          font-weight: 400;
          font-size: 18px;
          font-family: sans-serif;
        }
        .nav-link:hover{
          color: lightblue;
          font-weight: 400;
          font-size: 18px;
          font-family: 'Calibri';
        }
        .nav-link > .active{
          color: aqua;
          font-weight: 300;
          font-family: 'Calibri';
        }
        .isi h3{
          margin-top: 100px;
          font-family: Arial;
          font-weight: 800;
          font-size: 50px;
          color: #23408e;
          margin-left: 50px;
        }
        .isi h6{
          font-family: 'Calibri';
          font-weight: 500;
          font-size: 30px;
          color: #385399;
          margin-left: 50px;
        }
        .isi a{
          margin-left: 50px;
        }
        .daftar{
          font-size: 15px;
          font-weight: 600;
          color: black;
        }
        .kami hr{
          width: 70px;
        }
        .beranda{
          background-image: url('/picture/health.jpg');
          background-size: cover;
          height: 110vh;
        }
        .tentang p{
          font-family: sans-serif;
          font-weight: 500;
          font-size: 20px;
          color: grey;
        }
        .tentang h5{
          text-align: center;
          font-weight: 700;
          font-size: 30px;
          color: #385399
        }
        .ending{
          background-color: #385399;
        }
        .form-label{
          color: aliceblue;
          font-weight: 700;
        }
        .kaki{
          background-color: #23408e;
        }
        .tahu{
          display: grid;
          place-items: center;
        }
        .icon{
          display: grid;
          place-items: center;
        }
        .logo{
          display: grid;
          place-items: center;
        }
    </style>
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
            <li class="nav-item"><a class="nav-link @yield('menuBeranda')" aria-current="page" href="#section2">Beranda</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuTentang')" href="#tentang">About Us</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuBerita')" href="#berita">Artikel</a></li>
            <li class="nav-item"><a class="nav-link @yield('menuSakit')" href="#">Cek Penyakit</a></li>
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
        <div class="col-lg-6">
          Copyright &copy E-Klinik<br>
          <a>Design By <span style="color: aqua">Kelompok 3</span></a>
        </div>
        <div class="col-lg-6" align="right">
          {{ date("D M Y") }}
        </div>
      </div>
    </div>
  </footer> 
  </body>
  </html>
