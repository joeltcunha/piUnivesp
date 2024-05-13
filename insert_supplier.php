<?php

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body style= "background-color:black";>
    <h1> <span class="badge text-bg-secondary";>PJ SISTEMA DE SEGURANÇA</span></h1>
    <h2> <span class="badge text-bg-secondary";>Cadastro de fornecedores</span></h2>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
        
            <form action="#">
                
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
                <div class="mt-2 col-12 row">
                    <div class="col-md-6 align-items-center gy-4">
                        <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
                    </div>
                    <div class="col-md-6 align-items-center gy-4">
                        <button value="save" class="btn btn-success w-100 p-3">Salvar</button>
                    </div>
                </div>






            </form>
        </legend>
    </fieldset>

<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
