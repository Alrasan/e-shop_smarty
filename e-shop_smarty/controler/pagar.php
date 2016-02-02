<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./login/index.php");
}
$user = $_SESSION['username'];



if (isset($_POST['logout'])) {
    header("Location: ./login/");
}
if (isset($_POST['shop'])) {
    unset($_SESSION['cesta']);
    header("Location: ./product.php");
}

//Include the smarty lib
require '../../libs/smarty/libs/Smarty.class.php';

//init an object of the smarty class
$smarty = new Smarty;

//init basic attributes
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';
$smarty->config_dir = '../configs/';
$smarty->cache_dir = '../cache/';

//assign the user to a var so we can use it easier
$user = $_SESSION['username'];

$smarty->assign('user', $user);
$smarty->display("pay.tpl");