<?php

require '../vendor/twig/autoload.php';
require '/../src/View/index.html.twig';

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', $products);

?>


