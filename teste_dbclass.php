<?php
require_once "config/config.php";

$root = new \classes\Cadastro_cliente();

$root -> loadById(2);

echo $root;
?>