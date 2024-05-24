<?php

namespace classes;

class Pessoa
{
    public $nome;   //Atributo
    public function falar() //Método
    {
        return "O meu nome é". $this ->nome;
    }

}

$myName = new Pessoa();
$myName -> nome = "Joel Teixeira da Cunha";

echo $myName ->falar();