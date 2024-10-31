<?php

namespace App\Controllers;

class CO extends BaseController
{
    public function index()
    {
        $cart = session()->get('cart');

        if (empty($cart)) {
            return redirect()->to('/products')->with('error', 'Keranjang Anda kosong!');
        }

        return view('checkout', ['cart' => $cart]);
    }

    public function processCheckout()
    {
        $request = service('request');
        $name = $request->getPost('name');
        $phone = $request->getPost('phone');
        $address = $request->getPost('address');
        $shipping = $request->getPost('shipping');
        $payment = $request->getPost('payment');

        if (!$name || !$phone || !$address || !$shipping || !$payment) {
            return redirect()->back()->with('error', 'Silakan isi semua data!');
        }

        $cart = session()->get('cart');
        $total = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        $orderData = [
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'shipping' => $shipping,
            'payment' => $payment,
            'total' => $total,
            'items' => $cart, 
        ];

        session()->set('last_order', $orderData);
        session()->remove('cart');

        return redirect()->to('/checkout/success')->with('message', 'Pemesanan berhasil! Terima kasih atas pesanan Anda.');
    }

    public function success()
    {
        $lastOrder = session()->get('last_order');

        return view('checkout_success', ['order' => $lastOrder]);
    }

    public function orders()
    {
        $lastOrder = session()->get('last_order');
        if (empty($lastOrder)) {
            return redirect()->to('')->with('error', 'Belum ada pesanan!');
        }

        return view('orders', ['order' => $lastOrder]);
    }
}
