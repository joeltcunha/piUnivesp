<?php

$conn = new PDO("mysql:dbname=pi_univesp;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM cadastro_cliente WHERE client_id = :ID");

$id = 1;

$stmt -> bindParam(":ID", $id);
$stmt->execute();
echo "Cliente apagado com sucesso";

