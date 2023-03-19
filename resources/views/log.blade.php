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
  </style>

  
  <body>
    <section class="bagian1">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-4 shadow mb-5">
            <img src="{{ asset('picture\health4.jpg') }}" class="card-img-top rounded-top-4" >
            <div class="card-body p-4 p-md-5">

            <form class="form px-md-2" action="{{ route('login.verif') }}" method="post" id="mainform">
              @csrf
              <h3 class="text-center">Login</h3>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Username" name="email">
                  <label for="email">E-Mail</label>
                </div>
                <span class="text-danger error-text email_error"></span>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control" id="password" placeholder="Enter Valid Password" name="password">
                  <label for="password">Password</label>
                </div>
                <span class="text-danger error-text password_error"></span>
              <div class="d-flex justify-content-between align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                  <div class="mt-2">
                    <p>Belum punya akun ? <a style="color: red" href="#">Register</a> </p>
                  </div>
                </div>
                <a href="" class="text-body mt-3">Forgot password ?</a>
              </div>

              <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/login.js') }}"></script>

  </body>
</html>

