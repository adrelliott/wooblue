<?php


$options = [
    'wp_api' => true,
    'version' => 'wc/v3',
    'verify_ssl' => false,
    'query_string_auth' => true
];
$woocommerce = new Automattic\WooCommerce\Client(
    $_ENV['WOOCOMMERCE_URL'],
    $_ENV['WOOCOMERCE_API_KEY'],
    $_ENV['WOOCOMERCE_API_SECRET'],
    $options
);

// Get all orders (up to 100)
$orders = $woocommerce->get('orders', ['per_page' => 100]);

// Get orders with ID=?
$product_id = 3864;
$orders_with = $woocommerce->get('orders', [
    'per_page' => 100,
    'product' => $product_id
]);


// use Automattic\WooCommerce\Client;

// $woocommerce = new Client(
//     WOOCOMMERCE_URL,
//     WOOCOMERCE_API_KEY,
//     WOOCOMERCE_API_SECRET,
//     [
//         'version' => 'wc/v3',
//     ]
// );
