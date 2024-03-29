<?php




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/belajar', function () {
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba', function () {
//     echo '<h2 style="text-align: center"><u>Welcome Profil coba</u></h2>';
// });

// Route::get('/mahasiswa/{nama}',function ($nama){
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// Route::get('/stok_barang/{jenis}/{merek}',function ($jenis,$merek){
//     return "Cek sisa stok untuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}',function($a,$b){
//     echo "Cek sisa stok untuk $a $b";
// });


// // 5. Route dengan Optional Parameter
// Route::get('/stok_barang/{jenis?}/{merek?}',function($a='laptop',$b='lenovo'){
//     return "Cek sisa stok untuk $a $b";
// });

// // 6. Route Parameter dengan Regular Expression
// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan $id";
// });

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id =  $id";
// })->where('id','[0-9]+');

// Route::get('/user/{id}',function($id){
//     return "Tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

// // 7. Route Redirect
// Route::get('/hubungi-kami',function(){
//     return "<h1>Hubungi Kami</h1>";
// });

// Route::redirect('/contact-us','/hubungi-kami');

// // 8. Route Group
// Route::get('/admin/mahasiswa',function(){
//     return "<h1>Daftar Mahasiswa</h1>";
// });
// Route::get('/admin/dosen',function(){
//     return "<h1>Daftar Dosen</h1>";
// });
// Route::get('/admin/karyawan',function(){
//     return "<h1>Daftar Karyawan</h1>";
// });

// Route::prefix('/admin')->group(function(){
//     Route::get('/mahasiswa',function(){
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen',function(){
//         echo "<h1>Daftar Dosen</h1>";
//     });
//     Route::get('/karyawan',function(){
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// // 9. Route Fallback
// Route::fallback(function(){
//     return "Maaf, alamat tidak ditemukan";
// });

// // 10. Route Priority
// Route::get('/buku/1',function(){
//     return "Buku ke-1";
// });
// Route::get('/buku/1',function(){
//     return "Buku saya ke-1";
// });
// Route::get('/buku/1',function(){
//     return "Buku kita ke-1";
// });

// Route::get('/buku/{a}',function($a){
//     return "Buku ke-$a";
// });
// Route::get('/buku/{b}',function($b){
//     return "Buku saya ke-$b";
// });
// Route::get('/buku/{c}',function($c){
//     return "Buku kita ke-$c";
// });

// Route::get('mahasiswa/andi',function(){
//     echo "Halaman mahasiswa andi";
// });
// Route::get('/mahasiswa/andi',function(){
//     echo "Halaman mahasiswa andi";
// });

////merupakan view web 
// Route::get('/home',function(){
//     return view ('halaman_home');
// });

// Route::get('/mahasiswa', function(){
//     return View::make('mahasiswa');
// });

// Route::get('/mahasiswa',function(){
//     return view ('kampus.mahasiswa');
// });

// Route::get('/mahasiswa',function(){
//     return view ('kampus/mahasiswa');
// });

// Route::get('/mahasiswa', function(){
//     return view('kampus.mahasiswa',["mahasiswa01"=>"Rizki Wanda Putra"]);
// });

// Route::get('/mahasiswa', function(){
//     return view('kampus.mahasiswa',
//     ["mahasiswa01"=>"Wanda",
//     "mahasiswa02"=>"zaki",
//     "mahasiswa03"=>"ilham",
//     "mahasiswa04"=>"david",]);
// });

// Route::get('/mahasiswa',function(){
//     $arrMahasiswa = [
//         "mahasiswa01"=>"Wandaa",
//         "mahasiswa02"=>"zakii",
//         "mahasiswa03"=>"ilhamm",
//         "mahasiswa04"=>"davidd"
//     ];
//     return view('kampus.mahasiswa',$arrMahasiswa);
// });

// Route::get('/mahasiswa',function(){
//     $arrMahasiswa = ["dony salmanan","Acung","dilan","indra kenz"];
//     return view ('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
// });

// Route::get('/mahasiswa', function(){
//     return view('kampus.mahasiswa')->with('mahasiswa01','Rizki Wanda Putra');
// });

// Route::get('/mahasiswa',function(){
//     $arrMahasiswa = ["dony salmanan","Acung","dilan","indra kenz"];
//     return view ('kampus.mahasiswa')->with('mahasiswa',$arrMahasiswa); 
// });

// Route::get('/mahasiswa', function(){
//     $mahasiswa01 = "Indra Kenz",
//     $mahasiswa02 = "Doni Salmanan",
//     $mahasiswa03 = "Atta Halilintar",
//     $mahasiswa04 = "Raffi Ahmad"
// return view('kampus.mahasiswa', compact("mahasiswa01","mahasiswa02","mahasiswa03","mahasiswa04"));
// });

//blade template
// Route::get('/mahasiswa',function(){
//     $nama ='Rizki Wanda Putra';
//     $nilai = 100;
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa',function(){
//         $nama ='<u>Wanda</u>';
//         $nilai = 100;
//         return view('mahasiswa',compact('nama','nilai'));
//     });

// Route::get('/mahasiswa',function(){
//     $nama ='Rizki Wanda Putra';
//     $nilai = [80,90,45,75,150];
//     return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function(){ 
//     $mahasiswa01 = "Indra Kenz", 
//     $mahasiswa02 = "Doni Salmanan", 
//     $mahasiswa03 = "Ulfi Rizkia", 
//     $mahasiswa04 = "Deliana Putri" 
//     return view('kampus.mahasiswa', compact("mahasiswa01", 
//     "mahasiswa02", "mahasiswa03", "mahasiswa04"));
//  }); 

//Layout Blade

// Route::get('mahasiswa', function(){
//     $arrMahasiswa = ["Rizki Wanda Putra","David Syahputra","Argya Aziz"];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function(){
//     $arrDosen = ["Amirullah,SST.,M.KOM","Musta’inul Abdi,S.ST.,M.Kom","Muhammad Khadafi,ST.,MT"];
//     return view('dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery',function(){
//     return view('gallery');
// });

// Route::get('admin',function(){
//     return view('admin');
// });


//controller
// Route::get('/', function () {
// return view('welcome');
// });

//membuat controller manual
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

// Route::get('/',[PageController::class,'index']);
// Route::get('/mahasiswa',[PageController::class,'tampil']);

//akses facade
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\PageController;

// Route::get('/',[App\Http\Controllers\Admin\PageController::class,'index']);
// Route::get('/mahasiswa',[App\Http\Controllers\Admin\PageController::class,'tampil']);
// Route::get('/coba-facade',[PageController::class,'cobaFacade']);
// Route::get('/coba-class',[PageController::class,'cobaClass']);


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/cek-object', [MahasiswaController::class,'cekObject']);

Route::get('/insert',          [MahasiswaController::class,'insert']);
Route::get('/mass-assignment', [MahasiswaController::class,'massAssignment']);
Route::get('/mass-assignment2',[MahasiswaController::class,'massAssignment2']); 


Route::get('/update',          [MahasiswaController::class,'update']);
Route::get('/update-where',    [MahasiswaController::class,'updateWhere']); 
Route::get('/mass-update',     [MahasiswaController::class,'massUpdate']); 


Route::get('/delete',          [MahasiswaController::class,'delete']);
Route::get('/destroy',         [MahasiswaController::class,'destroy']);
Route::get('/mass-delete',     [MahasiswaController::class,'massDelete']); 


Route::get('/all',             [MahasiswaController::class,'all']);
Route::get('/all-view',        [MahasiswaController::class,'allView']);
Route::get('/get-where',       [MahasiswaController::class,'getWhere']);
Route::get('/test-where',      [MahasiswaController::class,'testWhere']);
Route::get('/first',           [MahasiswaController::class,'first']);
Route::get('/find',            [MahasiswaController::class,'find']);
Route::get('/latest',          [MahasiswaController::class,'latest']);
Route::get('/limit',           [MahasiswaController::class,'limit']);
Route::get('/skip-take',       [MahasiswaController::class,'skipTake']); 


Route::get('/soft-delete',     [MahasiswaController::class,'softDelete']);
Route::get('/with-trashed',    [MahasiswaController::class,'withTrashed']);
Route::get('/restore',         [MahasiswaController::class,'restore']); 
Route::get('/force-delete',    [MahasiswaController::class,'forceDelete']);
