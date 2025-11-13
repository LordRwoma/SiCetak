<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function katalog()
    {
        return view('dashboard.katalog');
    }

    public function produk()
    {
        return view('dashboard.produk');
    }

    public function keranjang()
    {
        return view('dashboard.keranjang');
    }

    public function lacakPesanan()
    {
        // Ambil semua pesanan dari database, urutkan dari terbaru
        $orders = Order::orderBy('created_at', 'desc')->get();

        // Kirim data ke view
        return view('dashboard.lacak-pesanan', compact('orders'));
    }

    public function siBot()
    {
        return view('dashboard.si-bot');
    }
}
