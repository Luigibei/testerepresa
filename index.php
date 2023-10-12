<?php

require 'Cart.php';
require 'Product.php';

session_start();

$products = [
    1 => ['id' => 1, 'name' => 'Bronze', 'price' => 15, 'quantity' => 1],
    2 => ['id' => 2, 'name' => 'Prata', 'price' => 30, 'quantity' => 1],
    3 => ['id' => 3, 'name' => 'Ouro', 'price' => 50, 'quantity' => 1],
    4 => ['id' => 4, 'name' => 'Platina', 'price' => 75, 'quantity' => 1],
    5 => ['id' => 5, 'name' => 'Diamante', 'price' => 150, 'quantity' => 1],
    6 => ['id' => 6, 'name' => 'Esmeralda, 'price' => 250, 'quantity' => 1],
    7 => ['id' => 7, 'name' => 'Safira', 'price' => 500, 'quantity' => 1],
    8 => ['id' => 8, 'name' => 'Rubi', 'price' => 1000, 'quantity' => 1],
];


if (isset($_GET['id'])) {
    $id= strip_tags($_GET['id']);
    $productInfo = $products[$id]
    $product = new Product;
    $product->setId($productInfo['id']);
    $product->setName($productInfo['name']);
    $product->setPrice($productInfo['price']);
    $product->setQuantity($productInfo['quantity]);

    $cart = new Cart;
    $cart-> add($product);
}

var_dump($_SESSION['cart'] ?? []);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>


<body>
    <a href="mycart.php">Go to cart</a>
    <ul class="vips">
        <li>Bronze <a href="?id=1">Add</a> R$ 15,00</li>
        <li>Prata  <a href="?id=2">Add</a> R$ 30,00</li></li>
        <li>Ouro <a href="?id=3">Add</a> R$ 50,00</li></li>
        <li>Platina <a href="?id=4">Add</a> R$ 75,00</li></li>
        <li>Diamante <a href="?id=5">Add</a> R$ 150,00</li></li>
        <li>Esmeralda <a href="?id=6">Add</a> R$ 250,00</li></li>
        <li>Safira <a href="?id=7">Add</a> R$500,00</li></li>
        <li>Rubi <a href="?id=8">Add</a> R$1000,00</li></li>
    </ul>
    </body>

    </html>