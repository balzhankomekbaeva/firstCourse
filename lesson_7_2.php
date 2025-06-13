<?php
$products = [
    [
        'name' => 'Wireless Earbuds',
        'price' => 79.99,
        'stock' => 42
    ],
    [
        'name' => 'Smart Watch',
        'price' => 199.99,
        'stock' => 15
    ],
    [
        'name' => 'Portable Charger',
        'price' => 29.99,
        'stock' => 87
    ],
    [
        'name' => 'Bluetooth Speaker',
        'price' => 59.95,
        'stock' => 23
    ]
];

foreach ($products as $product) {
    echo "Product: " . $product['name'] . "\n";
    echo "Price: $" . number_format($product['price'], 2) . "\n";
    echo "In Stock: " . $product['stock'] . " units\n\n";
}
?>