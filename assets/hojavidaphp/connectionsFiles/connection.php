<?php
 // Establecer una conexion a MySQL
 function makeconnection($paramDB){
    try {
        $connection = new PDO("mysql: host={$paramDB['serverhost']}; dbname={$paramDB['database']}; charset=utf8",$paramDB['username'],$paramDB['passawor']);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $exception) {
        exit($exception->getMessage());
        //throw $th;p
    }
 }
 //funcion par sociar parametros a una SQL
 function bindAllValues($statement, $params){
    foreach ($params as $param => $value) {
        $statement->bindAllValues(':'.$param, $value);
        # code...
    }
    return $statement;
 }


