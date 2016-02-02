<?php

/* * *************************************************************************************************
 * **************************************************************************************************
 *                                            FUNCTIONS                                            *
 * **************************************************************************************************
 * ************************************************************************************************ */

function listProduct() {
    //DATABASE work
    $database = new pdodatabase();
    $values = array("*");
    $sql = $database->createSelect("producto", $values, $conditions);
    $datos = $database->execSelect($sql, null);

    if ($datos != false) {

        //list all the products
        while ($row = $datos->fetch()) {
            $productos[$row['nombre_corto']][0] = $row['PVP'];
            if ($row['familia'] === "ORDENA") {
                $productos[$row['nombre_corto']][1] = $row['cod'];
            }
        }
        return $productos;
    }
}

function addProduct($prod_name, $prod_pvp) {
    if (isset($_SESSION['cesta'][$prod_name])) {
        $_SESSION['cesta'][$prod_name]->addCant();
    } else {
        $_SESSION['cesta'][$prod_name] = new producto($prod_name, $prod_pvp);
    }
}

function serialCesta() {
    foreach ($_SESSION['cesta'] as $key => $value) {
        $_SESSION['cesta'][$key] = serialize($value);
    }
}

function unserialCesta() {
    foreach ($_SESSION['cesta'] as $key => $value) {
        $_SESSION['cesta'][$key] = unserialize($value);
    }
}
