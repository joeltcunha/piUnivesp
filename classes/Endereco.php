<?php

namespace classes;

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct ($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __toString()
    {
        return $this -> logradouro. ", ".$this->numero. " - ". $this->cidade;
    }
}

$meuEndereco = new Endereco("Rua dos Bororós", 356, "Santa Mônica");

var_dump($meuEndereco);
echo $meuEndereco;
