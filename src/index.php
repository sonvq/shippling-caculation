<?php

require '../vendor/autoload.php';
use Shipping\Model\Product;
use Shipping\Model\Order;

$product1 = new Product(10, 1.1, 0.21, 0.13, 14);
$product2 = new Product(10, 1.3, 3.1, 0.13, 14);
$product3 = new Product(10, 2.3, 0.31, 0.13, 14);
echo $product1->calculateProductPrice();
echo $product2->calculateProductPrice();
echo $product3->calculateProductPrice();
$order = new Order();
$order->setProducts([$product1, $product2]);
echo $order->calculateGrossPrice();

$order->addProducts($product3);
echo $order->calculateGrossPrice();

