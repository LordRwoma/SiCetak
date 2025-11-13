<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PDF; // kalau kamu pakai barryvdh/laravel-dompdf

class InvoiceController extends Controller
{
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('invoice.show', compact('order'));
    }

    public function download($id)
    {
        $order = Order::findOrFail($id);
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('invoice.pdf', compact('order'));
        return $pdf->download("Invoice_{$order->order_code}.pdf");
    }
}
