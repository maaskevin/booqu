<!DOCTYPE html>
<html>
<head>
    <title>QRIS Payment</title>
</head>
<body style="text-align:center; padding:30px; font-family:sans-serif;">
    <h2>Scan QR untuk Bayar</h2>
    <p>Order ID: <strong>{{ $order_id }}</strong></p>
    <img src="{{ $qris_url }}" alt="QRIS" style="width:250px; height:250px;">
    <p>Gunakan aplikasi DANA / OVO / ShopeePay / GoPay untuk membayar</p>

    <a href="{{ route('bayar.cek', $order_id) }}" style="padding: 10px 20px; background: green; color: white; border-radius: 5px; text-decoration: none;">Sudah Bayar?</a>
</body>
</html>
