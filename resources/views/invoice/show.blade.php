@extends('layouts.dashboard')

@section('title', 'Invoice - SiRoma')

@section('content')
<div class="invoice-container">
    <h2>Invoice {{ $order->order_code }}</h2>

    <p><strong>Nama:</strong> {{ $order->nama }}</p>
    <p><strong>No. HP:</strong> {{ $order->phone }}</p>
    <p><strong>Metode Pembayaran:</strong> {{ strtoupper($order->payment_method) }}</p>

    @if ($order->bukti)
        <p><strong>Bukti Pembayaran:</strong></p>
        <img src="{{ asset('storage/' . $order->bukti) }}" width="200">
    @endif

    <a href="{{ route('invoice.download', $order->id) }}" class="btn btn-primary">Download Invoice PDF</a>
</div>
@endsection
