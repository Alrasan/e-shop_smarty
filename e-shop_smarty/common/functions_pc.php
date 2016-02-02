<?php

require_once '../common/class_pdo.php';

function getPC($cod) {

    $pcData = accessDB($cod, "ordenador");
    return $pcData;
}

function getDesc($cod) {
    $pcData = accessDB($cod, "producto");
    return $pcData[$cod]['descripcion'];
}

function accessDB($cod, $tabla) {
    //DATABASE work
    $database = new pdodatabase();
    $values = array("*");
    $conditions = array("cod" => $cod);
    $sql = $database->createSelect($tabla, $values, $conditions);
    $datos = $database->execSelect($sql, $conditions);
    if ($datos != false) {
        $row = $datos->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $key => $value) {
            $producto[$row['cod']][$key] = $value;
        }

        return $producto;
    }
}
