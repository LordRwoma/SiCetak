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
