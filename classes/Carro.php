<?php

namespace classes;

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($modelo)
    {
        $this -> modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor): void
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano): void
    {
        $this->ano = $ano;
    }
    public function exibir()
    {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }


}

$mustang = new Carro();
$mustang->setModelo("Mustang Shelby 67");
$mustang->setMotor("V6 400 HP");
$mustang->setAno(1967);

print_r($mustang->exibir());

$fiesta = new Carro();
$fiesta -> setModelo("Fiesta Class");
$fiesta -> setMotor("1,6 16V");
$fiesta -> setAno(2012);

echo $fiesta -> getModelo();
echo $fiesta -> getMotor();
echo $fiesta -> getAno();