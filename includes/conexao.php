<?php
    $banco = "pj_final";
    $usuario = "root";
    $senha = "";
    $hostname = "localhost";

    function conectar ($banco = 'pj_final', $usuario= 'root', $senha = '', $hostname = 'localhost') {
        $connect = mysqli_connect('localhost', 'root', '', 'pj_final');
        if (!$connect) {
            die(trigger_error("Não foi possível estabelecer conexão com o banco de dados"));
            return false;
        }else {
            $db = mysqli_select_db($connect, $banco);
            if (!$db) {
                die(trigger_error("Não foi possível selecionar o banco de dados"));
                return  false;
            }else {
                return $connect;
            }
        }
    }
