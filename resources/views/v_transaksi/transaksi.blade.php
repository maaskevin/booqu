<!DOCTYPE html>
<html>
<head>
    <title>Bayar QRIS</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        img { margin-top: 20px; max-width: 300px; }
        button { padding: 10px 20px; margin-top: 20px; }
    </style>
</head>
<body>
    <h2>Silakan Scan QRIS untuk Membayar</h2>

    @if(isset($qris_url))
        <img src="{{ $qris_url }}" alt="QR Code Pembayaran">
        <p><strong>Order ID:</strong> {{ $order_id }}</p>
    @else
        <p>QRIS tidak tersedia.</p>
    @endif
</body>
</html>
