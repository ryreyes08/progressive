
<?php

$store_name = "The Candy Store";
$customer_name = "Ryan";
$store_location = "Angeles City";

$best_sellers = [
    'Chocolate',
    'Mints',
    'Fudge',
    'Licorice',
    'Bubble Gum',
    'Toffee',
    'Jelly Beans'
];

$nutrition = [
    'Fat' => 36,
    'Sugar' => 51,
    'Salt' => 0.25,
    'Fiber' => 2.1,
    'Protein' => 7.3
];

$candies = [
    [
        'name' => 'Chocolate',
        'price' => 50,
        'stock' => 15,
        'category' => 'Popular'
    ],
    [
        'name' => 'Mints',
        'price' => 25,
        'stock' => 0,
        'category' => 'Refreshing'
    ],
    [
        'name' => 'Fudge',
        'price' => 40,
        'stock' => 8,
        'category' => 'Popular'
    ],
    [
        'name' => 'Licorice',
        'price' => 35,
        'stock' => 3,
        'category' => 'Classic'
    ],
    [
        'name' => 'Bubble Gum',
        'price' => 15,
        'stock' => 20,
        'category' => 'Popular'
    ],
    [
        'name' => 'Toffee',
        'price' => 30,
        'stock' => 0,
        'category' => 'Classic'
    ],
    [
        'name' => 'Jelly Beans',
        'price' => 45,
        'stock' => 12,
        'category' => 'Popular'
    ]
];

// Updating variables and arrays

$customer_name = "Ryan";
$candies[0]['price'] = 45;
$nutrition['Fat'] = 34;

?>
