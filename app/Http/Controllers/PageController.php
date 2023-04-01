<?php

// namespace App\Http\Controllers;

//     class PageController extends Controller
//     {
//         public function index()
//         {
//             return "Halaman Home";
//         }

//         public function tampil()
//         {
//             return "Data Mahasiswa";
//         }
//     }

namespace App\Http\Controllers;

    class PageController extends Controller
    {
        public function index()
        {
            return view('welcome');
        }

        public function tampil()
        {
            $arrMahasiswa = ["Megachan","Wanda","David","Argya"];

            return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
        }
    }