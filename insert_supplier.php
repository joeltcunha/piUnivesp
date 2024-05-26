<?php
include "functions/funcao_inserir.php";

@$razaoSocial = $_REQUEST['razaoSocial'];
@$cnpj = $_REQUEST['cnpj'];
@$cep = $_REQUEST['cep'];
@$logradouro = $_REQUEST['endereco'];
@$numero_end = $_REQUEST['numero_end'];
@$complemento_end = $_REQUEST['complemento_end'];
@$bairro = $_REQUEST['bairro'];
@$cidade = $_REQUEST['cidade'];
@$uf = $_REQUEST['uf'];
@$email = $_REQUEST['email'];
@$telefone = $_REQUEST['telefone'];

if (isset($razaoSocial) and isset($cnpj))
{
    inserir(array("razaoSocial", 'cnpj', 'cep','endereco', 'numero_end', 'complemento_end', 'bairro', "cidade", 'uf','email', 'telefone'), array(
        $razaoSocial, $cnpj, $cep, $logradouro,$numero_end, $complemento_end, $bairro, $cidade, $uf, $email, $telefone
    ), "fornecedores");
    echo "<script>alert('Cadastro de fornecedor realizado com sucesso!!!');</script>";

}

?>
<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Cadastro de Fornecedores</title>
<body>


<?php
include("header.php");
include("navbar.php");

?>
<br>
<div class="ps-3">
    <h2> <span class="mt-2";>Cadastro de fornecedores</span></h2>
</div>


        <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
        
            <form action="#" method="post">
                
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="razaoSocial" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razaoSocial" name="razaoSocial">
                    </div>
                    <div class="col-md-4">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cep" aria-label="Somente números" aria-describedby="button-addon1">
                            <button class="btn btn-outline-primary" type="button" id="button-addon1">Pesquisar</button>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mt-2">

                </div>

                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="col-md-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero_end">
                    </div>
                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento_end">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="uf">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-8">
                        <label for="ramoAtividade" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="ramoAtividade" name="email">
                    </div>
                    <div class="col-md-4">
                        <label for="local" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="local" name="telefone">
                    </div>
                </div>
                <?php
                include "button-group-insert.php";
                ?>

            </form>
        </legend>
    </fieldset>

<?php
include "footer.php";
?>
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
