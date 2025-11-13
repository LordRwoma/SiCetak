<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{
    // 👇 Fungsi untuk menampilkan halaman checkout
    public function show()
    {
        return view('dashboard.checkout');
    }

    // 👇 Fungsi untuk menyimpan data checkout ke database
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'payment_method' => 'required|in:cash,qris',
            'bukti' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('bukti')) {
            $data['bukti'] = $request->file('bukti')->store('bukti-qris', 'public');
        }

        $order = Order::create($data);
        $order->order_code = sprintf('#ORD-%s-%03d', date('Y'), $order->id);
        $order->save();

        return redirect()->route('invoice.show', ['id' => $order->id]);
    }
}
