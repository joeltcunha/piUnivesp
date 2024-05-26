<?php

$conn = new PDO("mysql:dbname=pi_univesp;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO cadastro_cliente (razao_social, nome_fantasia, cnpj, inc_estadual, cep, logradouro, numero_end, complemento_end, bairro, uf) VALUES(:razao_social, :nome_fantasia, :cnpj, :inc_estadual, :cep, :logradouro, :numero_end, :complemento_end, :bairro, :uf)");

$razao_social = "Fundamental Manutenção Sustentável Ltda.";
$nome_fantasia = "Fundamental";
$cnpj = "18.817.752/0001-05";
$inc_estadual = '1234567890';
$cep = "31530-290";
$logradouro = "Rua dos Bororos";
$numero_end = "219";
$complemento_end = "casa 12";
$bairro = "Santa Mônica";
$uf = "MG";

$stmt -> bindParam(":razao_social", $razao_social);
$stmt -> bindParam(":nome_fantasia", $nome_fantasia);
$stmt -> bindParam(":cnpj", $cnpj);
$stmt -> bindParam(":inc_estadual", $inc_estadual);
$stmt -> bindParam(":cep", $cep);
$stmt -> bindParam(":logradouro", $logradouro);
$stmt -> bindParam(":numero_end", $numero_end);
$stmt -> bindParam(":complemento_end", $complemento_end);
$stmt -> bindParam(":bairro", $bairro);
$stmt -> bindParam(":uf", $uf);


$stmt->execute();
    echo "Informações inseridas com sucesso!!!";


