@extends('layout.master2')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@section('content')
<section class="beranda" id="section2">
  <div class="container-fluid">
    <div class="row justify-content-center d-flex py-5" data-aos="fade-down">>
      <div class="isi col-lg-6">
        <h3>Welcome To E-Klinik</h3>
        <h6>Website Pelayanan Kesehatan yang terkini dengan berbagai fitur menarik dan tenaga kesehatan yang terpercaya</h6>
        <a type="button" class="btn btn-primary btn-lg rounded mt-3" style="font-weight: bold;" href="Login">Login</a><br><br>
        <a class="daftar mt-5">Belum punya Akun ? <span style="color: crimson" href="#">Register</span></a>
      </div>
      <div class="logo col-lg-6"><img src="{{ asset('picture\logo.png') }}" class="background-image img-fluid" style="height: 100rem width: 100rem"></div>
    </div>
  </div>
</section>

<section id="tentang">
  <div class="container-fluid">
    <div class="kami row mt-5 justify-content-center">
      <h1 align="center">About Us</h1>
      <hr size="6px" color="blue" align="center">
    </div>
    <div class="row">
      <div class="gambar col-lg-4 mt-3" >
        <img src="{{ asset('picture\peakp.jpg') }}" class="background-image img-fluid" style="background-size: cover;">
      </div>
      <div class="kartu col-lg-8 mt-3">
        <div class="card shadow" style="height: 15rem; width: 100%">
          <div class="tentang card-body" data-aos="fade-right">>
            <h5 class="card-title">Apa itu E-Klinik ?</h5>
            <p class="card-text mt-3">E-Klinik merupakan sebuah website pelayanan kesehatan yang dinamis 
              dengan berbagai fitur yang menarik. Terdapat pilihan berbagai pelayanan kesehatan 
              yang dapat dipilih oleh pengguna sesuai kebutuhan mereka, seperti pelayanan 
              kesehatan fisik , mental dan lain-lain. Pengguna juga dapat melihat profil para staff, 
              dokter dan tenaga kesehatan lainnya, yang pastinya telah terakreditasi dan sangat 
              kompeten dalam bidangnya.</p>
          </div>
        </div>
        <div class="row mt-5" data-aos="fade-left">>
          <div class="icon col-sm-2"><img src="{{ asset('picture\cf.png') }}" class="background-image img-fluid" style="width: 100%"></div>
          <div class="col-sm-10">
            <h5>Algoritma Certainty Factor</h5>
            <p>Dalam metode ini, digunakan konsep kepastian yang 
            disebut dengan faktor kepastian <i>(certainty factor) </i> untuk menggambarkan tingkat 
            kepercayaan terhadap suatu hipotesis atau kesimpulan.Kami akan menggunakan metode ini untuk mendiagnosis penyakit umum yang 
            diderita oleh pengguna.</p>
            <button class="btn btn-primary" onclick="window.location.href='/cek'">Cek</button>
          </div>
        </div>
        <div class="row mt-5" data-aos="fade-right">>
          <div class="icon col-sm-2"><img src="{{ asset('picture\metode.png') }}" class="background-image img-fluid" style="width: 100%"></div>
          <div class="col-sm-10">
            <h5>Metode RAD (Rapid Application Development)</h5>
            <p>RAD <i>(Rapid Application Development)</i>  adalah metode pengembangan perangkat 
            lunak yang memfokuskan pada pengembangan produk secara cepat dengan 
            melibatkan pengguna aktif dalam seluruh tahapan pengembangan, seperti planning, 
            user design, construction, testing, deployment, dan maintenance.</p></div>
        </div>
        <div class="row mt-5">
          <div class="col-sm-4"></div>
          <div class="col-sm-8"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="berita">
  <div class="container" style="margin-bottom: 100px">
  <div class="row mt-5 justify-content-center">
      <h1 align="center" style="font-family: Calibri,">Artikel</h1>
      <hr size="6px" color="blue" style="width: 70px">
  </div>
  <div class="row mt-5">
    <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('picture\article1.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $judul[0] }}<p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
    </div>
    <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left" data-aos-delay="100">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('picture\article2.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $judul[1] }}</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
    </div>
    <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left" data-aos-delay="200">
      <div class="card" style="width: 22rem;">
        <img src="{{ asset('picture\article3.jpeg') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $judul[2] }}</p>
            <a href="#" class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5 justify-content-center">
</div>
<div class="row mt-3">
  <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left" data-aos-delay="300">
    <div class="card" style="width: 22rem;">
      <img src="{{ asset('picture\article4.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
          <p class="card-text">8 Gejala Batu Ginjal yang Tak Boleh Disepelekan</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
  <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left" data-aos-delay="400">
    <div class="card" style="width: 22rem;">
      <img src="{{ asset('picture\article5.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
          <p class="card-text">Cara Terapi Uap untuk Mengencerkan Lendir di Paru-paru</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
  <div class="tahu col-lg-4 justify-content-center" data-aos="flip-left" data-aos-delay="500">
    <div class="card" style="width: 22rem;">
      <img src="{{ asset('picture\article6.jpeg') }}" class="card-img-top" alt="...">
      <div class="card-body">
          <p class="card-text">Studi Temukan Gula Nol Kalori Tak Selalu Sehat, Bisa Picu Stroke</p>
          <a href="#" class="btn btn-primary btn-sm">Read More</a>
      </div>
    </div>
  </div>
</div>
  </div>
</section>

<section class="ending mt-5" id="contact">
  <div class="container" data-aos="fade-up">>
    <h3 class="text-center">Kontak Kami</h3>
    <div class="row mx-auto mt-2">
      <div class="col-lg-12">
        <div class="mt-5 mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tulis nama lengkap anda">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">E-mail Address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat E-mail Anda">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Tulis pesan anda"></textarea>
        </div>
        <center>
          <div class="mb-5 ">
            <a type="button" class="btn bt-lg btn-primary">Send Message</a>
          </div>
        </center>
      </div>
    </div>
  </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endsection

