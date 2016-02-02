<?php

/**
 * Common Functions oriented to PDO databases
 *
 * @author Fran Lapuente <lapuentebermejofran@gmail.com>
 */

/**
 * This function allows us to connect to a PDO database.
 * @param string $dns is the name of the host and the database that we will connect
 * @param string $user user which we will connect
 * @param string $pass password of the user.
 * @param array $options
 * @return \PDO returns the connection object
 */
function connectPDO($dns = "mysql:host=localhost;dbname=francisco_dwes", $user = "francisco_admin", $pass = "Admin17", $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_FOUND_ROWS => true)) {
    $conexion = new PDO($dns, $user, $pass, $options);
    return $conexion;
}

/**
 * 
 * @param string $table name of the table
 * @param array $values assoc array with the values, the index must be the name of the colum.
 * @return string returns the insert sentence ready to be executed.
 */
function createInsert($table, $values) {
    $sql = "Insert into $table (";
    $vsql = "";
    $control = 0;
    foreach ($values as $index => $value) {
        if ($control == (count($values) - 1)) {
            $sql .="$index";
            $vsql .=":$index";
        } else {
            $sql.="$index ,";
            $vsql.=":$index ,";
        }
        $control++;
    }
    $sql .= ") values (";
    $sql .= $vsql;
    $sql .= ")";
    return $sql;
}

/**
 * 
 * @param type $table
 * @param type $values
 * @param type $conditions
 * @return type
 */
function createUpdate($table, $values, $conditions) {
    $sql = "update $table set ";
    $control = 0;
    foreach ($values as $index => $value) {
        if ($control == (count($values) - 1)) {
            $sql .="$index =:$index ";
        } else {
            $sql.="$index =:$index ,";
        }
        $control++;
    }
    $sql .= createCondition($conditions);
    return $sql;
}

/**
 * 
 * @param string $table
 * @param array $columns
 * @param array $conditions
 * @return string
 */
function createSelect($table, $columns, $conditions) {
    $sql = "Select";
    $control = 0;
    foreach ($columns as $value) {
        if ($control == (count($columns) - 1)) {
            $sql .=" $value";
        } else {
            $sql.=" $value,";
        }
        $control++;
    }
    $sql .= " from $table " . createCondition($conditions);
    return $sql;
}

/**
 * 
 * @param array $conditions array with the conditions that the sentence needs.
 * @return string that contains the condition.
 */
function createCondition($conditions) {
    if (count($conditions) != 0) {
        $where = "where ";
        $control = 0;
        foreach ($conditions as $index => $value) {
            if ($control == (count($conditions) - 1)) {
                $where .="$index =:cond$control";
            } else {
                $where.="$index =:cond$control and ";
            }
            $control++;
        }
        return $where;
    }
}

/**
 * 
 * @param PDO $connection
 * @param string $sql
 * @param array $conditions
 * @return PDOStatement
 */
function execSelect($connection, $sql, $conditions) {
    $cond = mixVal_Cond($values, $conditions);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $stmt = $connection->prepare($sql);
        $stmt->execute($cond);
        return $stmt;
    } catch (Exception $ex) {
        echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
        return "Error";
    }
}

/**
 * 
 * @param PDO $connection
 * @param string $sql
 * @param array $values
 * @return mixed returns the error code in case the insert fails, if success returns OK.
 */
function execInsert($connection, $sql, $values) {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $stmt = $connection->prepare($sql);
        $stmt->execute($values);
        return "OK";
    } catch (Exception $ex) {
        echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
        return "Error";
    }
}

/**
 * 
 * @param type $connection
 * @param type $sql
 * @param type $values
 * @param type $conditions
 * @return string
 */
function execUpdate($connection, $sql, $values, $conditions) {
    $updValues = mixVal_Cond($values, $conditions);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {

        $stmt = $connection->prepare($sql);

        $stmt->execute($updValues);
        $filas = $stmt->rowCount();
        return $filas;
    } catch (Exception $ex) {
        echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
        return "Error";
    }
}

/**
 * 
 * @param type $values
 * @param type $conditions
 * @return type
 */
function mixVal_Cond($values, $conditions) {
    if ($conditions != null) {
        $i = 0;
        foreach ($conditions as $val) {
            $cond = "cond" . $i;
            $values[$cond] = $val;
            $i++;
        }
        return $values;
    }
}

function validateUser($connection, $table, $user, $password) {
    $conditions = ["usuario" => $user, "password" => md5($password)];
    $vals = array("*");
    $sql = createSelect($table, $vals, $conditions);
    echo $sql;
    $validate = execSelect($connection, $sql, $conditions);
    if ($validate->fetch()) {
        return true;
    } else {
        return false;
    }
}
