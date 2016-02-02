<?php

//prepare the environement

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./index.php");
}
if (isset($_POST['logout'])) {
    header("Location: ./login.php");
}

if (isset($_POST['go_back'])) {
    header("Location: ./product.php");
}

//include the files that our program needs
require '../common/class_pdo.php';
require '../common/producto.php';
require '../common/functions_pc.php';

//Include the smarty lib
require '../../libs/smarty/libs/Smarty.class.php';

//init an object of the smarty class
$smarty = new Smarty;

//init basic attributes
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';
$smarty->config_dir = '../configs/';
$smarty->cache_dir = '../cache/';

/*
 * 
 * 
 * INICIO DEL PROGRAMA
 * 
 * 
 */
$user = $_SESSION['username'];
$smarty->assign('user', $user);

$cod_pc = filter_input(INPUT_GET, 'pc');
$computer = getPC($cod_pc);
$computer_desc = getDesc($cod_pc);

$smarty->assign("pc", $computer);
$smarty->assign("desc", $computer_desc);

$smarty->display("computers.tpl");
