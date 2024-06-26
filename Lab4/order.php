<?php

$base_prices = array("small" => 5, "medium" => 7, "large" => 9);
$topping_prices = array("small" => 0.5, "medium" => 1, "large" => 1.5);

$pizza = $_POST["pizza"];
$base_price = $base_prices[$pizza];
$topping_price = $topping_prices[$pizza];

$total = $base_price;
$selected_toppings = isset($_POST["toppings"]) ? $_POST["toppings"] : array();
$total += count($selected_toppings) * $topping_price;

echo "You ordered a: " . $pizza . " sized pizza. Your pizza has " . (count($selected_toppings)) . " toppings, and your total is: $" . $total . ". </br>"; 
echo "Pizza toppings: " . implode($selected_toppings);