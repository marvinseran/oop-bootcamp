<?php
// Prices and quantities
$banana_price_per_piece = 1;
$banana_quantity = 6;
$banana_tax_rate = 0.06;

$apple_price_per_piece = 1.5;
$apple_quantity = 3;
$apple_tax_rate = 0.06;

$wine_price_per_bottle = 10;
$wine_quantity = 2;
$wine_tax_rate = 0.21;

// Calculating total prices
$banana_total_price = $banana_price_per_piece * $banana_quantity;
$apple_total_price = $apple_price_per_piece * $apple_quantity;
$wine_total_price = $wine_price_per_bottle * $wine_quantity;

// Calculating total tax for each item
$banana_total_tax = $banana_total_price * $banana_tax_rate;
$apple_total_tax = $apple_total_price * $apple_tax_rate;
$wine_total_tax = $wine_total_price * $wine_tax_rate;

// Calculating overall total price and tax
$total_price = $banana_total_price + $apple_total_price + $wine_total_price;
$total_tax = $banana_total_tax + $apple_total_tax + $wine_total_tax;

?>
