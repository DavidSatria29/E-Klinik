<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" >
    <title>Data Mahasiswa</title>
</head>
<body>
    {{-- Mnampilkan Data --}}
    <div class="container text-center mt-3 pt-3 bg-white " >
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai ?>
        </h1>
    </div>
    <div class="container text-center mt-3 py-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ date(now()) }}
        </h1>
    </div>
    {{-- Kondisi If Else --}}
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
        <br>
        <div class="alert alert-secondary d-inline-block">
            
                @if ($nilai >= 0 && $nilai < 60) 
                    {{ "Maaf, anda kurang pintar, belajar lagi ya kisds" }}    
                    @elseif($nilai >= 60 && $nilai <= 100)
                    {{ "Selamat, anda lulus" }}
                    @else
                    {{ "Nilai Tidak Valid Masbro" }}
                @endif 
        </div>
        {{-- Kondisi Switch --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h1>
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
            <br>
            @switch($nilai)
                @case(0)
                    <div class="alert alert-danger d-inline-block">Tidak ikut Ujian</div>
                @break
                @case(75)
                <div class="alert alert-success d-inline-block">Well Played</div>
                 @break
                @case(100)
                 <div class="alert alert-success d-inline-block">Perfect</div>
                  @break
                @default
                <div class="alert alert-dark d-inline-block">Tidak Valid Masbro</div>
            @endswitch
        </div>
        {{-- Perulangan For --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @for ($i = 0; $i < 5; $i++)
            <div class="alert alert-info d-inline-block">
                {{ $i }}
            </div>
            @endfor
        </div>
        {{-- Perulangan While --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            @php
                $b=0;
            @endphp
            @while ($b< 6)
            <div class="alert alert-info d-inline-block">
                {{ $i }}
            </div>
            @php
                $b++;
            @endphp
            @endwhile
        </div>
        {{-- Perulangan ForEach --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h1>
            <br>
           @foreach ($value as $val)
            @if ($val >= 0 && $val < 50)
               <div class="alert alert-danger d-inline-block">
               {{ $val }}
               </div>
               @elseif ($val >= 0 && $val < 100)
               <div class="alert alert-success d-inline-block">
                {{ $val }}
                </div>
            @endif
           @endforeach
        </div>
        {{-- Perulangan ForElse --}}
        <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h1>
            <br>
            @forelse ($values as $val)
                @if ($val >= 0 && $val < 50)
               <div class="alert alert-danger d-inline-block">
               {{ $val }}
               </div>
               @elseif ($val >= 0 && $val < 100)
               <div class="alert alert-success d-inline-block">
                {{ $val }}
                </div>
               @endif
            @empty
                <div class="alert alert-dark d-inline-block">Datanya tidak ada masbro</div>
            @endforelse
        </div>
        {{-- Continue Break --}}
        <div class="container text-center mt-3 pt-3 bg-white"> 
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{!! $nama !!}</h1>
            <br>
           @foreach ($value as $val) 
            @if ($val < 70)
              @continue
            @endif
            <div class="alert alert-success d-inline-block">
            {{ $val }}
            </div>
            
           @endforeach
        </div>
</body>
</html>