<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes - Sistem Penjualan Drone
|--------------------------------------------------------------------------
| Aplikasi sederhana untuk menampilkan daftar drone, login admin,
| dan detail pembelian drone.
|--------------------------------------------------------------------------
*/

// Halaman Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');

    if ($username === 'admin' && $password === '12345') {
        return redirect()->route('produk');
    } else {
        return back()->with('error', 'Username atau Password salah!');
    }
})->name('login.process');

// Halaman Produk Drone
Route::get('/produk', function () {
    $produk = [
        [
            'id' => 1,
            'nama' => 'DJI Mavic Air 2',
            'harga' => 16500000,
            'foto' => 'images/drone_mavic_air2.jpg',
            'deskripsi' => 'Drone profesional dengan kamera 48MP, resolusi video 4K, dan waktu terbang hingga 34 menit.'
        ],
        [
            'id' => 2,
            'nama' => 'DJI Mini 3 Pro',
            'harga' => 12500000,
            'foto' => 'images/drone_mini3pro.jpg',
            'deskripsi' => 'Drone ringan dan portabel, mudah digunakan untuk pemula, dengan fitur pelacakan cerdas.'
        ],
        [
            'id' => 3,
            'nama' => 'Autel EVO Nano+',
            'harga' => 14500000,
            'foto' => 'images/drone_autel_nano.jpg',
            'deskripsi' => 'Drone kecil namun kuat, kamera 50MP dengan sensor RYYB, ideal untuk foto udara berkualitas tinggi.'
        ],
    ];

    return view('produk', compact('produk'));
})->name('produk');

// Halaman Detail Pembelian Drone
Route::get('/produk/{id}', function ($id) {
    $produk = [
        1 => [
            'nama' => 'DJI Mavic Air 2',
            'harga' => 16500000,
            'foto' => 'images/drone_mavic_air2.jpg',
            'deskripsi' => 'Drone profesional dengan kamera 48MP, video 4K, dan jangkauan hingga 10km. Ideal untuk sinematografi udara.'
        ],
        2 => [
            'nama' => 'DJI Mini 3 Pro',
            'harga' => 12500000,
            'foto' => 'images/drone_mini3pro.jpg',
            'deskripsi' => 'Drone mini canggih dengan berat di bawah 249 gram, dilengkapi sensor canggih dan kamera HDR.'
        ],
        3 => [
            'nama' => 'Autel EVO Nano+',
            'harga' => 14500000,
            'foto' => 'images/drone_autel_nano.jpg',
            'deskripsi' => 'Kamera 50MP, sensor RYYB, dan stabilisasi gimbal 3-axis untuk hasil foto/video yang luar biasa.'
        ],
    ];

    // Pastikan ID valid
    if (!array_key_exists($id, $produk)) {
        abort(404, 'Drone tidak ditemukan');
    }

    $detail = $produk[$id];
    return view('detail', compact('detail'));
})->name('produk.detail');

// Logout
Route::get('/logout', function () {
    return redirect()->route('beranda');
})->name('logout');