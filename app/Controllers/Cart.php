<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Cart extends Controller
{
    private $cartItems = [];

    public function __construct()
    {
        $this->cartItems = [
            [
                'productId' => 1,
                'name' => 'SKINTIFIC MSH Niacinamide Brightening Moisturizer',
                'price' => 128000,
                'quantity' => 1,
                'stock' => 10,
                'img' => 'assets/img/skintific.jpeg'
            ],
            [
                'productId' => 2,
                'name' => 'SKINTIFIC Ultra Cover Powder Foundation',
                'price' => 148800,
                'quantity' => 1,
                'stock' => 15,
                'img' => 'assets/img/bedak-skintific.jpeg'
            ],
            [
                'productId' => 3,
                'name' => 'TIRTIR Mask Fit Red Cushion',
                'price' => 288000,
                'quantity' => 1,
                'stock' => 8,
                'img' => 'assets/img/tirtir.png'
            ],
            [
                'productId' => 4,
                'name' => 'Maybelline Superstay Teddy Tint',
                'price' => 140900,
                'quantity' => 1,
                'stock' => 20,
                'img' => 'assets/img/maybelline-lipteddy.jpeg'
            ],
            [
                'productId' => 5,
                'name' => 'SKINTIFIC Retinol Skin Renewal Moisturizer',
                'price' => 115600,
                'quantity' => 1,
                'stock' => 5,
                'img' => 'assets/img/skintific-retinol-gold.png'
            ],
            [
                'productId' => 6,
                'name' => 'Derma Angel Acne Beauty Patch Hologram - Butterfly & Star',
                'price' => 38700,
                'quantity' => 1,
                'stock' => 25,
                'img' => 'assets/img/dermaangel-hologram.png'
            ],
            [
                'productId' => 7,
                'name' => 'Derma Angel Acne Beauty Patch Hologram - Heart & Flower',
                'price' => 43000,
                'quantity' => 1,
                'stock' => 30,
                'img' => 'assets/img/dermaangel-hologram2.png'
            ],
            [
                'productId' => 8,
                'name' => 'COSRX Ultra-Light Invisible Sunscreen SPF 50 PA++++',
                'price' => 249000,
                'quantity' => 1,
                'stock' => 12,
                'img' => 'assets/img/cosrx.avif'
            ],
            [
                'productId' => 9,
                'name' => 'CBD Professional Bio+Peptide Complex Hair Mask',
                'price' => 126990,
                'quantity' => 1,
                'stock' => 18,
                'img' => 'assets/img/cbd.png'
            ],
            [
                'productId' => 10,
                'name' => 'Scarlett Whitening Scarlett Whitening Body Scrub Jolly',
                'price' => 67500,
                'quantity' => 1,
                'stock' => 22,
                'img' => 'assets/img/bodyscrub.png'
            ],
        ];
    }

    public function updateQuantity($productId)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $quantity = $this->request->getPost('quantity');
        $quantity = max(0, $quantity);

        foreach ($cart as &$item) {
            if ($item['productId'] == $productId) {
                if ($quantity === 0) {
                    $this->removeItem($productId);
                } else {
                    $item['quantity'] = $quantity;
                }
                break;
            }
        }

        if ($quantity > 0) {
            $session->set('cart', array_values($cart));
        }
        return redirect()->to('/cart'); 
    }

    public function index()
    {
        $session = session();
        if (!$session->has('isLoggedIn') || !$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data['cart'] = $session->get('cart') ?? [];
        return view('cart', $data);
    }

    public function addToCart($productId)
    {
        $session = session();

        if (!$session->has('isLoggedIn') || !$session->get('isLoggedIn')) {
            $session->setFlashdata('error', 'Silakan login terlebih dahulu untuk menambah produk ke keranjang.');
            return redirect()->to('/login');
        }

        $cart = $session->get('cart') ?? [];
        $product = array_filter($this->cartItems, function($item) use ($productId) {
            return $item['productId'] == $productId;
        });

        if (!empty($product)) {
            $product = array_values($product)[0];
            $key = array_search($productId, array_column($cart, 'productId'));

            if ($key !== false) {
                $cart[$key]['quantity'] += 1;
            } else {
                $cart[] = $product;
            }

            $session->set('cart', $cart);
        }

        return redirect()->to('');
    }

    public function removeItem($productId)
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $cart = array_filter($cart, function($item) use ($productId) {
            return $item['productId'] != $productId;
        });

        $session->set('cart', array_values($cart));
        return redirect()->to('/cart');
    }

    public function clearCart()
    {
        $session = session();
        $session->remove('cart');
        return redirect()->to('/cart');
    }
}
