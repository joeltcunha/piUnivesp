<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Cadastro de fornecedores</title>

  <body>
  <?php
    include ("header.php");
    include ("navbar.php");
?>

    <h1> <span class="badge text-bg-secondary";>Cadastro de fornecedores</span></h1>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
        
            <form action="#" class="form-control">
                
                <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="razaoSocial" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razaoSocial" name="razao_social">
                    </div>
                    <div class="col-md-6">
                        <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-7">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="inscEstadual" class="form-label">Inscrição Estadual</label>
                        <input type="text" class="form-control" id="inscEstadual" name="insc_estadual">
                    </div>
                    <div class="col-md-6">
                        <label for="inscMunicipal" class="form-label">Inscrição Municipal</label>
                        <input type="text" class="form-control" id="inscMunicipal" name="insc_municipal">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-7">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cep" aria-label="Somente números" aria-describedby="button-addon1">
                            <button class="btn btn-outline-primary" type="button" id="button-addon1">Pesquisar</button>
                        </div>
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
                        <input type="text" class="form-control" id="complemento" name="complemento">
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
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-8">
                        <label for="ramoAtividade" class="form-label">Ramo de Atividade Principal</label>
                        <input type="text" class="form-control" id="ramoAtividade" name="ramo_atividade">
                    </div>
                    <div class="col-md-4">
                        <label for="local" class="form-label">Local/Unidade</label>
                        <input type="text" class="form-control" id="local" name="local_unidade">
                    </div>
                </div>
                




                <?php
            include "button-group-insert.php";
            ?>


            </form>
        </legend>
    </fieldset>

<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<?php
    include ("footer.php")

?>
</body>
</html>
