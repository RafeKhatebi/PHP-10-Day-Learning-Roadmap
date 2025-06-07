<?php
// Simple product list array
$products = [
    ['id' => 1, 'name' => 'Milk', 'price' => " 100 Afg"],
    ['id' => 2, 'name' => 'Yogurt', 'price' => "200 Afg"],
    ['id' => 3, 'name' => 'Cheese', 'price' => "150 Afg"],
];

// Display product list
foreach ($products as $product) {
    echo "ID: {$product['id']} ----> Name: {$product['name']} ----> Price: {$product['price']}\n";
}

// Adding a new product
$newProduct = ['id' => 4, 'name' => 'Butter', 'price' => "150 Afg"];
array_push($products, $newProduct);
array_pop($products); // Remove the last product if needed


// We can also use all other array functions like array_shift, array_unshift,
//  etc. as shown in the previous code in index.php
