<?php

class pdodatabase {

    protected $connection=null;

    public function __construct($dsn = "mysql:host=localhost;dbname=francisco_dwes", $username = "francisco_admin", $passwd = "Admin17", $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_FOUND_ROWS => true)) {
            $this->connection = new PDO($dsn, $username, $passwd, $options);
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
        $sql .= $this->createCondition($conditions);
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
        $sql .= " from $table " . $this->createCondition($conditions);
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
     * @param string $sql
     * @param array $conditions
     * @return PDOStatement
     */
    function execSelect($sql, $conditions) {
        $values=array();
        $cond = $this->mixVal_Cond($values, $conditions);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($cond);
            return $stmt;
        } catch (Exception $ex) {
            echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
            return false;
        }
    }

    /**
     * 
     * @param string $sql
     * @param array $values
     * @return mixed returns the error code in case the insert fails, if success returns OK.
     */
    function execInsert($sql, $values) {
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($values);
            return true;
        } catch (Exception $ex) {
            echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
            return false;
        }
    }

    /**
     * 
     * @param string $sql
     * @param type $values
     * @param type $conditions
     * @return string
     */
    function execUpdate($sql, $values, $conditions) {
        $updValues = $this->mixVal_Cond($values, $conditions);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try {

            $stmt = $this->connection->prepare($sql);

            $stmt->execute($updValues);
            $filas = $stmt->rowCount();
            return $filas;
        } catch (Exception $ex) {
            echo "Error code: " . $ex->getCode() . " __ Error message: " . $ex->getMessage();
            return false;
        }
    }

    /**
     * 
     * @param array $values
     * @param array $conditions
     * @return array It returns the array result of combine the 2 arrays sent as params
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

    /**
     * 
     * @param string $table
     * @param string $user
     * @param string $password
     * @return boolean The function returns true if the combination User/Pass
     * is correct false if incorrect
     */
    function validateUser($table, $user, $password) {
        $conditions = ["usuario" => $user, "password" => md5($password)];
        $vals = array("*");
        $sql = $this->createSelect($table, $vals, $conditions);
        $validate = $this->execSelect($sql, $conditions);
        if ($validate->fetch()) {
            return true;
        } else {
            return false;
        }
    }

}
