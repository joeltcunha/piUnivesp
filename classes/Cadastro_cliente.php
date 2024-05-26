<?php

namespace classes;

class Cadastro_cliente
{
    private $client_id;
    private $razao_social;
    private $nome_fantasia;
    private $cnpj;
    private $insc_estadual;
    private $cep;
    private $logradouro;
    private $numero_end;
    private $complemento_end;
    private $bairro;
    private $cidade;
    private $uf;
    private $created_at;

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($value): void
    {
        $this->client_id = $value;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazaoSocial($value): void
    {
        $this->razao_social = $value;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nome_fantasia;
    }

    /**
     * @param mixed $nome_fantasia
     */
    public function setNomeFantasia($value): void
    {
        $this->nome_fantasia = $value;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($value): void
    {
        $this->cnpj = $value;
    }

    /**
     * @return mixed
     */
    public function getInscEstadual()
    {
        return $this->insc_estadual;
    }

    /**
     * @param mixed $insc_estadual
     */
    public function setInscEstadual($value): void
    {
        $this->insc_estadual = $value;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($value): void
    {
        $this->cep = $value;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($value): void
    {
        $this->logradouro = $value;
    }

    /**
     * @return mixed
     */
    public function getNumeroEnd()
    {
        return $this->numero_end;
    }

    /**
     * @param mixed $numero_end
     */
    public function setNumeroEnd($value): void
    {
        $this->numero_end =$value;
    }

    /**
     * @return mixed
     */
    public function getComplementoEnd()
    {
        return $this->complemento_end;
    }

    /**
     * @param mixed $complemento_end
     */
    public function setComplementoEnd($value): void
    {
        $this->complemento_end = $value;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($value): void
    {
        $this->bairro = $value;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($value): void
    {
        $this->cidade = $value;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($value): void
    {
        $this->uf = $value;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($value): void
    {
        $this->created_at = $value;
    }

    public function loadById($id)
    {
        $sql = new Database();
        $result = $sql ->select("SELECT * FROM cadastro_cliente WHERE client_id = :ID", array(
            ":ID" => $id
        ));

        if (count($result) > 0)
        {
            $row = $result[0];

            $this -> setClientId($row['client_id']);
            $this -> setRazaoSocial($row['razao_social']);
            $this -> setNomeFantasia($row['nome_fantasia']);
            $this -> setCnpj($row['cnpj']);
            $this -> setInscEstadual($row['insc_estadual']);
            $this -> setCep($row['cep']);
            $this -> setLogradouro($row['logradouro']);;
            $this -> setNumeroEnd($row['numero_end']);
            $this -> setComplementoEnd($row['complemento_end']);
            $this -> setBairro($row['bairro']);
            $this -> setCidade($row['cidade']);
            $this -> setUf($row['uf']);
            $this -> setCreatedAt(new \DateTime($row['created_at']));
        }
    }

    public static function getList()
    {
        $sql = new Database();
        return $sql -> select("SELECT * FROM cadastro_cliente ORDER BY client_id");
    }

    public static function search($client_name)
    {
        $sql = new Database();
        return $sql -> select("SELECT * FROM cadastro_cliente WHERE razao_social LIKE :SEARCH ORDER BY razao_soical, array(
                                                                                      ':SEARCH' => "%".$client_name."%"
)");
    }
    public function __toString()
    {
        return json_encode((array(
            "client_id" => $this -> getClientId(),
            "razao_social" => $this -> getRazaoSocial(),
            "nome_fantasia" => $this -> getNomeFantasia(),
            "cnpj" => $this -> getCnpj(),
            "insc_estadual" => $this -> getInscEstadual(),
            "cep" => $this -> getCep(),
            "logradouro" => $this -> getLogradouro(),
            "numero_end" => $this -> getNumeroEnd(),
            "complemento_end" => $this -> getComplementoEnd(),
            "bairro" => $this -> getBairro(),
            "cidade" => $this -> getCidade(),
            "uf" => $this -> getUf(),
            "created_at" => $this -> getCreatedAt() -> format ("d,m,Y H:i:s")
        )));
    }
}