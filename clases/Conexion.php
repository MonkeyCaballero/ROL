<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/adminbd/vendor/autoload.php";
        class Conexion{
            public static function conectar(){
            $servidor = "127.0.0.1";
            $puerto = "27017";
            $usuario = "escritor";
            $password = "12345";
            $BD = "crudmongo";

            $cadenaConexion = "mongodb://" . $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/" . $BD;

            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($BD);
            
            }
        }

        // $obj = new Conexion();
        // print_r($obj->conectar());
?>