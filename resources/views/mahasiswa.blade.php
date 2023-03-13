{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Rizki Wanda Putra</li>
        <li>M.Zaki</li>
        <li>Harist</li>
        <li>David</li>
    </ol>
    <div>
        copyright&copy; <?php echo date("Y"); ?> Program Studi Teknik Informatika-PNL 
    </div>
</body>
</html> --}}

{{-- Blade template engine --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama ?>
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai ?>
        </h1>
    </div>
</body>
</html> --}}

{{-- code blade --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {!!$nama!!}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {!!$nilai!!}
        </h1>
    </div>
</body>
</html> --}}

{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
        <br>
        @if(($nilai>=0)and($nilai<50))
        <div class="alert alert-danger d-inline-block">
            Maaf, anda tidak lulus</div>
        @elseif(($nilai>=50)and($nilai<=100))
        <div class="alert alert-danger d-inline-block">
            Selamat, anda lulus</div>
        @else
        <div class="alert alert-danger d-inline-block">
            Nilai tidak valid</div>
        @endif
    </div>
</body>
</html> --}}

{{-- kondisi switch --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
        <br>
        @switch($nilai)
        @case(0)
        <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
        @break
        @case(75)
        <div class="alert alert-danger d-inline-block">Lumayan</div>
        @break
        @case(100)
        <div class="alert alert-danger d-inline-block">Sempurna</div>
        @break
        @default
        <div class="alert alert-danger d-inline-block">Nilai tidak valid</div>
        @endswitch
    </div>
</body>
</html> --}}

{{-- perulangan for --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        @for($i=0; $i<5; $i++)
    <div class="alert alert-info d-line-block">{{$i}}</div>
    @endfor
    </div>
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        @for($i=0; $i<5; $i++)
    <div class="alert alert-info d-line-block">Laravel</div>
    @endfor
    </div>
</body>
</html> --}}

{{-- perulangan while --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <?php $i=0; ?>
        @while($i<7)
        <div class="alert alert-info d-line-block">{{$i}}</div>
        <?php $i++ ?>
        @endwhile
    </div>
</body>
</html> --}}

{{-- perulangan foreach --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="b-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach($nilai as $val)
        <div class="alert alert-info d-inline-block">{{$val}}</div>
        @endforeach
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="b-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach($nilai as $val)
        @if(($val>=0)and($val<50))
        <div class="alert alert-info d-inline-block">{{$val}}</div>
        @elseif(($val>=50)and($val<=100))
        <div class="alert alert-info d-inline-block">{{$val}}</div>
        @endif
        @endforeach
    </div>
</body>
</html> --}}

{{-- perulangan forelse --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="b-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @forelse($nilai as $val)
        @if(($val>=0)and($val<50))
        <div class="alert alert-info d-inline-block">{{$val}}</div>
        @elseif(($val>=70)and($val<=100))
        <div class="alert alert-info d-inline-block">{{$val}}</div>
        @endif
        @empty
        <div class="alert alert-info d-inline-block">Tidak ada data</div>
        @endforelse
    </div>
</body>
</html> --}}

{{-- perintah continue dan break --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="b-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach($nilai as $val)
        @if($val<50)
        @continue
        @endif
        <div class="alert alert-success d-inline-block">{{$val}}</div>
        @endforeach
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="b-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1>
        <br>
        @foreach($nilai as $val)
        @if($val<50)
        @break
        @endif
        <div class="alert alert-success d-inline-block">{{$val}}</div>
        @endforeach
    </div>
</body>
</html> --}}

{{-- Layout Blade Tanpa resource --}}
{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse ($mahasiswa as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada Data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa &copy; | copyright {{date("Y")}} Teknik Informatika
        </div>
    </footer>

</body>
</html> --}}

{{-- @include('layout.header',['title' => 'Data Mahasiswa'])
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{$val}}</li>
                @empty
                <div class="alert alert-dark d-inline-block">Tidak ada Data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div> --}}

{{-- @extends('layout.master') --}}
{{-- @section('title','Data Mahasiswa') --}}
{{-- @section('menuMahasiswa','active')
@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{$val}}</li>
                @empty
                <div class="alert alert-dark d-inline-block">Tidak ada Data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection --}}
{{-- <p>Sebuah Paraghraf</p> --}}

@extends('layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa','active')
@section('content')
@parent
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($mahasiswa as $val)
                <li class="list-group-item">{{$val}}</li>
                @empty
                <div class="alert alert-dark d-inline-block">Tidak ada Data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@endsection