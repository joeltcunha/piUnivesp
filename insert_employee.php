<?php

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de colaboradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>


  <body style= "background-color:black";>
    <h1> <span class="badge text-bg-secondary";>PJ SISTEMA DE SEGURANÇA</span></h1>
    <h2> <span class="badge text-bg-secondary";>Cadastro de colaboradores</span></h2>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
            <form action="#" class="row gx-3 gy1">
                <div class="row col-12 mt-2">
                    <div class="col-md-2">
                        <label for="matricula" class="form-label">Matrícula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula">
                    </div>
                    <div class="col-md-5">
                        <label for="employeeName" class="form-label">Nome Colaborador</label>
                        <input type="text" class="form-control" id="employeeName" name="nome_colaborador">
                    </div>
                    <div class="col-md-5">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="phone_number" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="phone_number" name="telefone">
                    </div>
                    <div class="col-md-2">
                        <label for="phone_ext" class="form-label">Ramal</label>
                        <input type="tel" class="form-control" id="phone_ext" name="ramal">
                    </div>
                    <div class="col-md-6">
                        <label for="cell_phone" class="form-label">Celular</label>
                        <input type="tel" class="form-control" id="cell_phone" name="celular">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="cargo" class="form-label">Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="cargo">
                    </div>
                    <div class="col-md-4">
                        <label for="funcao" class="form-label">Função</label>
                        <input type="text" class="form-control" id="funcao" name="funcao">
                    </div>
                    <div class="col-md-4">
                        <label for="setor" class="form-label">Setor </label>
                        <input type="text" class="form-control" id="setor" name="setor">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="password1" class="form-label">Senha<img
                                    src="../images/circle-info-solid.svg" width="20px" style="margin-left: 10px; color: blue" alt="Configuração de senha" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Deve conter: números, letras e caracteres especias."></label>
                        <input type="password" class="form-control" id="password1" name="password1">
                    </div>
                    <div class="col-md-6">
                        <label for="password2" class="form-label">Repita a senha</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-6 align-items-center gy-4">
                        <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
                    </div>
                    <div class="col-md-6 align-items-center gy-4">
                        <button value="save" class="btn btn-success w-100 p-3">Salvar</button>
                    </div>
                </div>
            </form>

    </fieldset>

<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>
