<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .bagian1{
      background-color: lightblue;
    }
    .form h3{
      font-weight: 600;
      font-size: 40px;
      font-family: 'Calibri';
      color: lightskyblue;
    }
    span{
      font-size: 12px;
    }
  </style>
<body>
  
  <section class="bagian1">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-4 shadow mb-5">
            <img src="{{ asset('picture\health4.jpg') }}" class="card-img-top rounded-top-4" >
            <div class="card-body p-4 p-md-5">
            <form class="form px-md-2" action="" method="post">
              <h3 class="text-center">Register</h3>
              <div class="form-floating mb-2">
                <input type="text" class="form-control" id="RegNama" placeholder="Enter your username" name="pengguna">
                <span id="pesannama"></span>
                <label for="RegNama">Nama</label>
              </div>
              <div class="form-floating mb-2">
                <input type="email" class="form-control" id="RegEmail" placeholder="Enter your username" name="pengguna">
                <span id="PesanEmail"></span>
                <label for="RegEmail">E-mail</label>
              </div>
              <div class="form-floating mb-2">
                <input type="number" class="form-control" id="RegTelepon" placeholder="Enter Valid Password" name="passkata">
                <span id="PesanTelepon"></span>
                <label for="RegTelepon">Nomer Telepon</label>
              </div>
              <div class="form-floating mb-2">
                <input type="password" class="form-control" id="RegPass" placeholder="Enter Valid Password" name="passkata">
                <span id="PesanPass"></span>
                <label for="RegPass">Password</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="RegPass2" placeholder="Enter Valid Password" name="passkata">
                <span id="PesanPass2"></span>
                <label for="RegPass">Confirm Password</label>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-4">
                
              </div>
                {{-- <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="daftar" value="Submit"> --}}
            </form>
            <button class="btn btn-primary" onclick="window.location.href='/login'" id="tombol">DAFTAR</button>
            </div>
            </div>
            </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="js/JQuery.js"></script>
    <script src="js/register.js"></script>
</body>
</html>
