<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" >
    <title>{{ $title }}</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/student">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/dosen">Data Dosen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>