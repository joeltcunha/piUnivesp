<?php
include "functions/funcao_inserir.php";

@$matricula = $_REQUEST['matricula'];
@$nome = $_REQUEST['nomeColaborador'];
@$cpf = $_REQUEST['cpf'];
@$cep = $_REQUEST['cep'];
@$logradouro = $_REQUEST['logradouro'];
@$numero_end = $_REQUEST['numero_end'];
@$complemento_end = $_REQUEST['complemento_end'];
@$bairro = $_REQUEST['bairro'];
@$cidade = $_REQUEST['cidade'];
@$uf = $_REQUEST['uf'];
@$email = $_REQUEST['email'];
@$telefone = $_REQUEST['telefone'];

if (isset($nome))
{
    inserir(array("matricula", "nome", 'cpf', 'cep','endereco', 'numero', 'complemento', 'bairro', "cidade", 'uf','email', 'telefone'), array(
        $matricula, $nome, $cpf, $cep, $logradouro,$numero_end, $complemento_end, $bairro, $cidade, $uf, $email, $telefone
    ), "prestadores");
    echo "<script>alert('Cadastro de Prestadores realizado com sucesso!!!');</script>";

}


?>
<!DOCTYPE html>

<?php

include ("head.php")
?>
<title>PJ Sistema de Segurança</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
    <h2> <span class="";>Cadastro de prestadores</span></h2>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
            <form action="#" class="row gx-3 gy1">
                <div class="row col-12 mt-2">
                    <div class="col-md-2">
                        <label for="matricula" class="form-label">Matrícula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula">
                    </div>
                    <div class="col-md-4">
                        <label for="employeeName" class="form-label">Nome Colaborador</label>
                        <input type="text" class="form-control" id="employeeName" name="nomeColaborador">
                    </div>
                    <div class="col-md-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cpf" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                     <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cep" aria-label="Somente números" aria-describedby="button-addon1">
                            <button class="btn btn-outline-primary" type="button" id="button-addon1">Pesquisar</button>
                        </div>
                    </div>
                    <div class="row col-12 mt-2">
                        <div class="col-md-6">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="logradouro">
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
                        <div class="col-md-4">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>

                    </div>
                <?php
                include "button-group-insert.php"
                ?>
            </form>

    </fieldset>

<?php
include ("footer.php")

?>


<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>
