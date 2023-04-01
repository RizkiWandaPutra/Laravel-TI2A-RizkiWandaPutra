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


// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;

//     class PageController extends Controller
//     {
//         public function index()
//         {
//             return "Halaman Home Admin";
//         }

//         public function tampil()
//         {
//             return "Halaman Mahasiswa Admin";
//         }

//         public function cobaFacade()
//         {
//             echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
//             echo "<br>";
//             echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
//         }
//     }


//facade dengan perintah use
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;

    class PageController extends Controller
    {
        public function index()
        {
            return "Halaman Home Admin";
        }

        public function tampil()
        {
            return "Halaman Mahasiswa Admin";
        }

        public function cobaFacade()
        {
            echo Str::snake('SedangBelajarLaravelUncover');
            echo "<br>";
            echo Str::kebab('SedangBelajarLaravelUncover');
        }

        public function cobaClass()
        {
            // return "Cuma halaman coba-coba";
            $foo = new Foo();
            echo $foo->bar();
        }
    }