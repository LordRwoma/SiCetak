<h2>Invoice {{ $order->order_code }}</h2>
<p>Nama: {{ $order->nama }}</p>
<p>No HP: {{ $order->phone }}</p>
<p>Metode Pembayaran: {{ strtoupper($order->payment_method) }}</p>
<p>Tanggal: {{ $order->created_at->format('d M Y H:i') }}</p>
