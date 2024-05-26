<?php

$conn = new PDO("mysql:dbname=pi_univesp;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE cadastro_cliente SET  razao_social = :razao_social, nome_fantasia = :nome_fantasia, cnpj = :cnpj, inc_estadual = :inc_estadual, cep = :cep, logradouro = :logradouro, numero_end = :numero_end, complemento_end = :complemento_end, bairro = :bairro, uf = :uf WHERE client_id = :ID");

$razao_social = "Fundamental Manutenção Sustentável Ltda.";
$nome_fantasia = "Fundamental";
$cnpj = "18.817.752/0001-05";
$inc_estadual = '1234567890';
$cep = "31530-290";
$logradouro = "Rua Vila Rica";
$numero_end = "856";
$complemento_end = "casa 12";
$bairro = "Padre Eustáquio";
$uf = "MG";
$id = 2;

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
$stmt -> bindParam(":ID", $id);


$stmt->execute();
    echo "Informações atualizadas com sucesso!!!";


