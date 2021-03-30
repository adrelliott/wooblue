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

$orders = $woocommerce->get('orders');


// use Automattic\WooCommerce\Client;

// $woocommerce = new Client(
//     WOOCOMMERCE_URL,
//     WOOCOMERCE_API_KEY,
//     WOOCOMERCE_API_SECRET,
//     [
//         'version' => 'wc/v3',
//     ]
// );
