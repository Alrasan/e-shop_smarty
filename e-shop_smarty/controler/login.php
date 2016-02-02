<?php

session_start();
//Include the smarty lib
require_once '../../libs/smarty/libs/Smarty.class.php';

//init an object of the smarty class
$smarty = new Smarty;

//init basic attributes
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';
$smarty->config_dir = '../configs/';
$smarty->cache_dir = '../cache/';
$error = "";
$success = "";

unset($_SESSION['username']);

unset($_SESSION['cesta']);

require_once '../common/class_pdo.php';
if (isset($_POST['send'])) {
    session_start();
    $username = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $bd_pdo = new pdodatabase();
    if ($bd_pdo->validateUser("usuarios", $username, $password)) {
        $_SESSION['username'] = $username;
        $success = "Usuario correcto, redirigiendo";
        header("Refresh: 3; url=product.php");
    } else {

        $error = "Usuario incorrecto. Compruebe que haya introducido bien sus datos";
    }
}

$smarty->assign('success', $success);
$smarty->assign('error', $error);

//Load the template or html page
$smarty->display('login.tpl');
?>