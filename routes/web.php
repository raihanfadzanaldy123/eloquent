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

// import model
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('/', function () {
    return view('welcome');
});


// One to One
Route::get('relasi-1',function()
{
    // Menampilkan wali dari data mahasiswa
    $mhs = Mahasiswa::where('nim','=','01010101')->first();
    return $mhs->wali->nama;
});


// One to One
Route::get('relasi-2',function()
{
    // Menampilkan dosen dari data mahasiswa
    $mhs = Mahasiswa::where('nim','=','01010101')->first();
    return $mhs->dosen->nama;
});


// One to Many
Route::get('relasi-3',function()
{
    // Menampilkan wali dari data mahasiswa
    $dosen = Dosen::where('nama','=','Abdul Musthofa')->first();

    foreach ($dosen->mahasiswa as $temp)
                echo "<li>Nama : ". $temp->nama .
                "&nbsp &nbsp &nbsp <strong>". $temp->nim ."</strong>
                </li>";
});

Route::get('relasi-4',function()
{
    // Mencari Mahasiswa bernama Mamat Maung
    $mamat = Mahasiswa::where('nama', '=', 'Mamat Maung')->first();

    // Menampilkan seluruh Hobi dari Mamat Maung
    foreach ($mamat->hobi as $temp)
        echo "<li>". $temp->hobi ."</li>";

});

Route::get('relasi-5', function()
{
    $data = Hobi::where('hobi','=','Tidur Pulas')->first();

    foreach ($data->mahasiswa as $temp)
        echo "<li> Nama : ". $temp->nama.
            "&nbsp &nbsp &nbsp<strong>". $temp->nim ."</strong> </li>";
});

Route::get('relasi-join',function()
{
    $sql = DB::table('mahasiswas')->select('mahasiswas.nama','mahasiswas.nim','walis.nama as nama.wali')
    ->join('walis','walis.id_mahasiswa','=','mahasiswas.id')->get();
    dd($sql);
});

Route::get('eloquent',function()
{
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent',compact('mahasiswa'));
});

Route::get('latihan-eloquent',function()
{
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get()->take(1);
    return view('eloquent',compact('mahasiswa'));
});
