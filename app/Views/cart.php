<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja Elora's</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f48fb1;
            color: #880e4f;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: white;
        }

        .cart-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #e91e63;
        }

        th {
            background-color: #d81b60; 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f8bbd0; 
        }

        .product-image {
            max-width: 100px;
            height: auto;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-control button {
            width: 25px;
            height: 25px;
            border: none;
            background-color: #c2185b;
            color: white;
            cursor: pointer;
            margin: 0;
        }

        .quantity-control input {
            width: 40px;
            height: 25px; 
            text-align: center;
            margin: 0; 
            border: 1px solid #e91e63; 
            background-color: #f8bbd0; 
            color: #880e4f; 
        }

        .button {
            display: inline-block;
            margin: 10px;
            padding: 5px 10px; 
            background-color: #c2185b;
            color: white; 
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #880e4f;
        }

        p {
            text-align: center;
            color: #880e4f;
        }

        .error-message {
            color: red;
            text-align: center;
        }

        .button-container {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>
        Keranjang Belanja Elora's
    </h2>

    <div class="cart-container">
    <?php if(!empty($cart)): ?>
    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Kuantitas</th>
            <th>Total</th>
        </tr>
        <?php $totalHarga = 0; ?>
        <?php foreach($cart as $item): ?>
            <tr>
                <td><?= htmlspecialchars($item['name']); ?></td>
                <td class="image-cell">
                    <?php if (isset($item['img']) && !empty($item['img'])): ?>
                        <img src="<?= base_url($item['img']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" class="product-image">
                    <?php else: ?>
                        <p>Tidak ada gambar</p>
                    <?php endif; ?>
                </td>
                <td>Rp <?= number_format($item['price'], 0, ',', '.'); ?></td>
                <td>
                    <div class="quantity-control">
                        <form action="<?= site_url('cart/updateQuantity/' . $item['productId']); ?>" method="POST">
                            <button type="button" onclick="updateQuantity(<?= $item['productId']; ?>, -1)">-</button>
                            <input type="number" name="quantity" id="quantity_<?= $item['productId']; ?>" value="<?= htmlspecialchars($item['quantity']); ?>" min="0" readonly>
                            <button type="button" onclick="updateQuantity(<?= $item['productId']; ?>, 1)">+</button>
                            <input type="submit" value="Update" style="display:none;">
                        </form>
                    </div>
                </td>
                <td>Rp <?= number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?></td>
            </tr>
            <?php $totalHarga += $item['price'] * $item['quantity']; ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="4">Total Bayar</td>
            <td>Rp <?= number_format($totalHarga, 0, ',', '.'); ?></td>
        </tr>
    </table>
    <div class="button-container">
        <a href="/index" class="button">Kembali</a>
        <a href="/checkout" class="button">Checkout</a>
    </div>
<?php else: ?>
    <p>Keranjang kosong.</p>
<?php endif; ?>
    </div>

    <script>
    function updateQuantity(productId, change) {
        const quantityInput = document.getElementById('quantity_' + productId);
        let quantity = parseInt(quantityInput.value) + change;

        if (quantity < 0) {
            quantity = 0;
        }

        quantityInput.value = quantity;

        if (quantity === 0) {
            const form = quantityInput.closest('form');
            form.submit();
        } else {
            const updateButton = form.querySelector('input[type="submit"]');
            updateButton.click();
        }
    }
    </script>
</body>
</html>
