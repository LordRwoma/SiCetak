<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeranjangController extends Controller
{
    public function add(Request $request)
    {
        $cart = Session::get('cart', []);
        $cart[] = [
            'id' => $request->input('id'),
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
        ];
        Session::put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Produk ditambahkan ke keranjang!']);
    }
}
