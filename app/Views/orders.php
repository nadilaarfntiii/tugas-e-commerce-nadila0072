<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #ff5c95;
            margin-bottom: 20px;
        }

        .order-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            max-width: 600px;
        }

        .buyer-info {
            margin-bottom: 20px;
        }

        .buyer-info div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .buyer-info strong {
            width: 200px; /* Atur lebar label */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #ff5c95;
            color: white;
        }

        .total {
            font-weight: bold;
            font-size: 18px;
            color: #ff4081;
            margin-top: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #666;
        }

        .back-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff5c95;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #ff4081;
        }
    </style>
</head>
<body>
    <h2>Riwayat Pesanan Anda</h2>
    <div class="order-details">
        <div class="buyer-info">
            <div><strong>Nama Pembeli     </strong> <?= htmlspecialchars($order['name']); ?></div>
            <div><strong>Nomor Telepon    </strong> <?= htmlspecialchars($order['phone']); ?></div>
            <div><strong>Alamat           </strong> <?= htmlspecialchars($order['address']); ?></div>
            <div><strong>Ekspedisi        </strong> <?= htmlspecialchars($order['shipping']); ?></div>
            <div><strong>Metode Pembayaran</strong> <?= htmlspecialchars($order['payment']); ?></div>
        </div>

        <?php if (isset($order['items']) && !empty($order['items'])): ?>
            <table>
                <thead>
                    <tr>
                        <th style="width: 40%;">Nama Produk</th>
                        <th style="width: 20%;">Jumlah</th>
                        <th style="width: 20%;">Harga</th>
                        <th style="width: 20%;">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totalBayar = 0;
                    foreach ($order['items'] as $item): 
                        $totalItem = $item['price'] * $item['quantity'];
                        $totalBayar += $totalItem;
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($item['name']); ?></td>
                            <td><?= htmlspecialchars($item['quantity']); ?></td>
                            <td>Rp <?= number_format($item['price'], 0, ',', '.'); ?></td>
                            <td>Rp <?= number_format($totalItem, 0, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <span>Total Bayar: Rp <?= number_format($totalBayar, 0, ',', '.'); ?></span>
            </div>
        <?php else: ?>
            <div class="order-item">
                <span>Tidak ada item dalam pesanan.</span>
            </div>
        <?php endif; ?>

        <a href="index" class="back-button">Kembali ke Beranda</a>
    </div>
</body>
</html>
