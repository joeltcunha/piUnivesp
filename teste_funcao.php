<?php
//include_once "includes/conexao.php";
include "functions/funcao_inserir.php";
//
//@$razaoSocial = $_REQUEST['razaoSocial'];
//@$cnpj = $_REQUEST['cnpj'];
//@$cpf = $_REQUEST['cpf'];
//@$cep = $_REQUEST['cep'];
//@$logradouro = $_REQUEST['logradouro'];
//@$numero_end = $_REQUEST['numero_end'];
//@$complemento_end = $_REQUEST['complemento_end'];
//@$bairro = $_REQUEST['bairro'];
//@$cidade = $_REQUEST['cidade'];
//@$uf = $_REQUEST['uf'];
//@$email = $_REQUEST['email'];
//@$telefone = $_REQUEST['telefone'];
//
//if (isset($razaoSocial))
{
    inserir(array("Nome", "cpf",'cnpj', 'cep', "endereco", 'numero', 'complemento', 'bairro', "cidade", 'uf', 'email', 'telefone'), array(
        'Liliana', "", "26644087000123", '31530290', "Rua dos Javaes", "219", "casa 12", "Santa Mônica", "Belo Horizonte", "MG", 'joelcunha6@gmail.com', '31995415660'
//            $razaoSocial, $cpf, $cnpj, $cep, $logradouro,$numero_end, $complemento_end, $bairro, $cidade, $uf, $email, $telefone
    ), "clientes");
}

