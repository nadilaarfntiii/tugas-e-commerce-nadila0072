<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #ffe6f2;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .checkout-container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 2px solid #ff99cc;
        }

        h2 {
            color: #ff66b2;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #ff66b2;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ff99cc;
            border-radius: 4px;
            background-color: #ffe6f2;
            color: #333;
        }

        .cart-items {
            margin-bottom: 20px;
        }

        .cart-items h3 {
            color: #ff66b2;
            margin-bottom: 10px;
        }

        .cart-items ul {
            list-style: none;
            padding: 0;
        }

        .cart-items li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #ffccdd;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            color: #333;
        }

        .total-price {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
            text-align: right;
            color: #ff66b2;
        }

        .checkout-button {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #ff66b2;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        .checkout-button:hover {
            background-color: #ff4da6;
        }
    </style>
</head>
<body>
    <div class="checkout-container">
        <h2>Checkout</h2>
        
        <div class="cart-items">
            <h3>Produk</h3>
            <ul>
                <?php foreach ($cart as $item): ?>
                    <li>
                        <span><?= $item['name']; ?> x <?= $item['quantity']; ?></span>
                        <span>Rp <?= number_format($item['price'] * $item['quantity']); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <p class="total-price">Total Bayar: Rp <?= number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, $cart))); ?></p>

        <form action="/proses_checkout" method="post">
            <div class="form-group">
                <label for="name">Nama Pembeli</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="shipping">Ekspedisi Pengiriman</label>
                <select id="shipping" name="shipping" required>
                    <option value="">Pilih Ekspedisi</option>
                    <option value="jne">JNE</option>
                    <option value="pos">Pos Indonesia</option>
                    <option value="tiki">TIKI</option>
                    <option value="sicepat">SiCepat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="payment">Metode Pembayaran</label>
                <select id="payment" name="payment" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="bank_transfer">Transfer Bank</option>
                    <option value="gopay">GoPay</option>
                    <option value="ovo">OVO</option>
                    <option value="dana">Dana</option>
                    <option value="credit_card">Kartu Kredit</option>
                    <option value="cod">COD</option>
                </select>
            </div>

            <button type="submit" class="checkout-button">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>
