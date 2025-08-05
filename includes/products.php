<?php

// Read JSON file
$products = file_get_contents('./src/js/products.json');
$productsCategory = file_get_contents('./src/js/productsCategory.json');

// Decode JSON string to PHP array
$data = json_decode($products, true); // true for associative array
$category = json_decode($productsCategory, false); // true for associative array

// $images = ');
?>