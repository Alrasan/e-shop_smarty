<?php

//prepare the environement

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./index.php");
}

//include the files that our program needs
require '../common/class_pdo.php';
require '../common/producto.php';
require '../common/functions_cesta.php';

//Include the smarty lib
require '../../libs/smarty/libs/Smarty.class.php';

//init an object of the smarty class
$smarty = new Smarty;

//init basic attributes
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';
$smarty->config_dir = '../configs/';
$smarty->cache_dir = '../cache/';


//start the program code
unserialCesta();
//assign the user to a var so we can use it easier
$user = $_SESSION['username'];
$smarty->assign('user', $user);

//if user wants to log out, we redirect to login page
if (isset($_POST['logout'])) {
    header("Location: ./login.php");
}
//if user wants to add a product
if (isset($_POST['add'])) {
    $prod_name = filter_input(INPUT_POST, 'nombre_corto');
    $prod_pvp = filter_input(INPUT_POST, 'PVP');
    addProduct($prod_name, $prod_pvp);
}

//when user wants to drop the cart
if (isset($_POST['clear'])) {
    unset($_SESSION['cesta']);
}

//if user wants to purchase
if (isset($_POST['buy'])) {
    header("Location: ./comprar.php");
}

$smarty->assign('products', listProduct());
//prepare the cart to be shown
foreach ($_SESSION['cesta'] as $key => $value) {
    $cart[$key] = $value->getProd();
    $fullPrice += $value->getPrice();
}

$smarty->assign('cart', $cart);
$smarty->assign('precioTotal', $fullPrice);

serialCesta();
$smarty->display("products.tpl");

