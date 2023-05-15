<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

        //     class MahasiswaController extends Controller
        //     {
        //     public function massAssignment(){
        //     Mahasiswa::create(
        //     [
        //         'nim' => '19021044',
        //         'nama' => 'Budi',
        //         'tanggal_lahir' => '2000-08-22',
        //         'ipk' => 2.5,
        //     ]
        //     );
        // return "Berhasil di proses";
        // }

        // class MahasiswaController extends Controller
        // {
        // public function massAssignment2(){
        // $mahasiswa1 = Mahasiswa::create(
        // [
        //     'nim' => '2021573010007',
        //     'nama' => 'Rizki Wanda Putra',
        //     'tanggal_lahir' => '2003-03-19',
        //     'ipk' => 3.5,
        // ]
        // );
        // dump($mahasiswa1);
        // $mahasiswa2 = Mahasiswa::create(
        // [
        //     'nim' => '2021573010065',
        //     'nama' => 'Zaki',
        //     'tanggal_lahir' => '2003-04-02',
        //     'ipk' => 3.4,
        // ]
        // );
        // dump($mahasiswa2);
        // $mahasiswa3 = Mahasiswa::create(
        // [
        //     'nim' => '2021573010060',
        //     'nama' => 'David Syaputra',
        //     'tanggal_lahir' => '2000-11-23',
        //     'ipk' => 2.9,
        // ]
        // );
        // dump($mahasiswa3);
        // }

        class MahasiswaController extends Controller
        {
        public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir = '2003-05-07';
        $mahasiswa->ipk = 3.0;
        $mahasiswa->save();
        dump($mahasiswa);
        }

    }        
