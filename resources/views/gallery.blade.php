<html lang="en">
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
                    <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Dosen</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://img.okezone.com/content/2022/11/16/46/2708779/barcelona-terancam-tak-datangkan-pemain-baru-pada-januari-2023-alTlJ7xEMZ.jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://images.pexels.com/photos/2174974/pexels-photo-2174974.jpeg?cs=srgb&dl=pexels-quang-nguyen-vinh-2174974.jpg&fm=jpg" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlDLRn1XJcv0EswZ1MPkdNqGcZ6Zn6xwZ4-tEbGCZFxA&s" class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa &copy; | copyright {{date("Y")}} Teknik Informatika
        </div>
    </footer>
    
</body>
</html>

{{-- @include('layout.header',['title' => 'Gallery'])
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://img.okezone.com/content/2022/11/16/46/2708779/barcelona-terancam-tak-datangkan-pemain-baru-pada-januari-2023-alTlJ7xEMZ.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2174974/pexels-photo-2174974.jpeg?cs=srgb&dl=pexels-quang-nguyen-vinh-2174974.jpg&fm=jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlDLRn1XJcv0EswZ1MPkdNqGcZ6Zn6xwZ4-tEbGCZFxA&s" class="img-thumbnail img-fluid">
        </div>
    </div>
</div> --}}

@extends('layout.master')
@section('title','Data Dosen')
@section('menuGallery','active')
@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://img.okezone.com/content/2022/11/16/46/2708779/barcelona-terancam-tak-datangkan-pemain-baru-pada-januari-2023-alTlJ7xEMZ.jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://images.pexels.com/photos/2174974/pexels-photo-2174974.jpeg?cs=srgb&dl=pexels-quang-nguyen-vinh-2174974.jpg&fm=jpg" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlDLRn1XJcv0EswZ1MPkdNqGcZ6Zn6xwZ4-tEbGCZFxA&s" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@endsection