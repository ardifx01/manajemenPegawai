<?php

use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pegawai', function() {
    return view('pegawai');
});

Route::get('/test', function (){
    return redirect()->to('/');
});

Route::get('/coba_query', function() {

    // $pegawai = Pegawai::all(); // menampilkan semua data
    // dd($pegawai->toArray());

    // $pegawai = Pegawai::find(75); //mencari data berdasarkan ID
    // dd($pegawai->toArray());

    // $pegawai = Pegawai::where('nama_pegawai', 'Azalea Nasyidah')->first(); // menampilkan data berdasarkan nama

    // $pegawai = Pegawai::where('usia', '>', 20)->get(); // menampilkan data berdasarkan usia
    // dd($pegawai->toArray());

    // Pegawai::where('nama_pegawai', 'Azalea Nasyidah')->delete(); // Menghapus data berdasarkan nama

    // Pegawai::destroy(1); // Menghapus data berdsarkan ID

    // Pegawai::where('id', 50)->update([
    //     'nama_pegawai' => 'Benjamin amin' // -> Update data berdasarkan ID
    // ]);
});

Route::fallback(function () {
    return view('404');
});
