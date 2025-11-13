<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KeranjangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Semua route utama SiRoma
|--------------------------------------------------------------------------
*/

// 🏠 Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');


// 📦 Dashboard Pengguna
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/dashboard/katalog', 'katalog')->name('dashboard.katalog');
    Route::get('/dashboard/produk', 'produk')->name('dashboard.produk');
    Route::get('/dashboard/keranjang', 'keranjang')->name('dashboard.keranjang');
    Route::get('/dashboard/lacak-pesanan', 'lacakPesanan')->name('dashboard.lacak-pesanan');
    Route::get('/dashboard/si-bot', 'siBot')->name('dashboard.si-bot');
});

// 💳 Checkout (halaman & aksi submit)
Route::get('/dashboard/checkout', [CheckoutController::class, 'show'])->name('dashboard.checkout');
Route::post('/orders', [CheckoutController::class, 'store'])->name('orders.store');

// 🧾 Invoice (tampil & download PDF)
Route::get('/invoice/{id}', [InvoiceController::class, 'show'])->name('invoice.show');
Route::get('/invoice/{id}/download', [InvoiceController::class, 'download'])->name('invoice.download');

// 🛒 Keranjang (aksi menambahkan produk)
Route::post('/keranjang/add', [KeranjangController::class, 'add'])->name('keranjang.add');

// 🔐 Admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/login', 'login')->name('admin.login');
    Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
    Route::get('/admin/dashboard/kelola-jasa', 'kelolaJasa')->name('admin.kelolajasa');
    Route::get('/admin/dashboard/kelola-produk', 'kelolaProduk')->name('admin.kelolaproduk');
    Route::get('/admin/dashboard/kelola-pesanan', 'kelolaPesanan')->name('admin.kelolapesanan');
    Route::get('/admin/dashboard/kelola-keuangan', 'kelolaKeuangan')->name('admin.kelolakeuangan');
});
=======
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/dashboard/katalog', function () {
    return view('dashboard.katalog');
})->name('dashboard.katalog');

Route::get('/dashboard/si-bot', function () {
    return view('dashboard.si-bot');
})->name('dashboard.si-bot');

Route::get('/dashboard/lacak-pesanan', function () {
    return view('dashboard.lacak-pesanan');
})->name('dashboard.lacak-pesanan');

Route::get('/dashboard/keranjang', function () {
    return view('dashboard.keranjang');
})->name('dashboard.keranjang');

Route::get('/dashboard/checkout', function () {
    return view('dashboard.checkout');
})->name('dashboard.checkout');

Route::get('/admin/login', function () {
    return view('admin.adminlogin');
})->name('admin.adminlogin');

Route::get('/admin/dashboard', function () {
    return view('admin.admindashboard');
})->name('admin.admindashboard');

Route::get('/admin/dashboard/kelola-jasa', function () {
    return view('admin.kelolajasa');
})->name('admin.kelolajasa');

Route::get('/admin/dashboard/kelola-produk', function () {
    return view('admin.kelolaproduk');
})->name('admin.kelolaproduk');

Route::get('/admin/dashboard/kelola-pesanan', function () {
    return view('admin.kelolapesanan');
})->name('admin.kelolapesanan');

Route::get('/admin/dashboard/kelola-keuangan', function () {
    return view('admin.kelolakeuangan');
})->name('admin.kelolakeuangan');

