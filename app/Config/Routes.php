<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/login/authenticate', 'Home::authenticate');
$routes->get('/register', 'Home::register'); 
$routes->post('/register/store', 'Home::store');
$routes->get('/logout', 'Home::logout');

$routes->get('/index', 'Home::beranda');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/kategori', 'Home::kategori');

$routes->get('cart', 'Cart::index'); 
$routes->get('cart/addToCart/(:num)', 'Cart::addToCart/$1'); 
$routes->post('cart/updateQuantity/(:num)', 'Cart::updateQuantity/$1');
$routes->get('cart/removeItem/(:num)', 'Cart::removeItem/$1');  
$routes->get('cart/clearCart', 'Cart::clearCart'); 

$routes->get('/checkout', 'CO::index');
$routes->post('/proses_checkout', 'CO::processCheckout');
$routes->get('/checkout/success', 'CO::success');

$routes->get('/orders', 'CO::orders');

