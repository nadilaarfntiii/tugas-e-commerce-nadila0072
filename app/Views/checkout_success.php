<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Sukses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f2;
            text-align: center;
            padding: 50px;
        }

        h2 {
            color: #ff66b2;
            margin-bottom: 20px;
        }

        .order-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            max-width: 400px;
            border: 1px solid #ff66b2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            color: #ff4081;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #666;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff66b2;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #ff4081;
        }
    </style>
</head>
<body>
    <h2>Pemesanan Sukses!</h2>
    <div class="order-details">
        <table>
            <tr>
                <td>Nama Pembeli:</td>
                <td><?= $order['name']; ?></td>
            </tr>
            <tr>
                <td>Nomor Telepon:</td>
                <td><?= $order['phone']; ?></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><?= $order['address']; ?></td>
            </tr>
            <tr>
                <td>Ekspedisi:</td>
                <td><?= $order['shipping']; ?></td>
            </tr>
            <tr>
                <td>Metode Pembayaran:</td>
                <td><?= $order['payment']; ?></td>
            </tr>
            <tr>
                <td class="total">Total Bayar:</td>
                <td class="total">Rp <?= number_format($order['total']); ?></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        Terima kasih atas pesanan Anda! Kami akan segera memprosesnya.
    </div>
    <a href="/" class="back-button">Kembali ke Beranda</a>
</body>
</html>
