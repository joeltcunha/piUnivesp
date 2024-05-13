<?php

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relatórios de ordens de serviço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/cpf-cnpj-validator/dist/browser.js"></script>
</head>

<body style="background-color:black;">
<h1> <span class="badge text-bg-secondary">PJ SISTEMA DE SEGURANÇA</span></h1>
<h2> <span class="badge text-bg-secondary">Relatórios de fornecedores</span></h2>
<br>
<h3> <span class="badge text-bg-secondary">Pesquisar por:</span></h3>

<div>
<section>

<div class="col-md-6">
                      <label for="serviceValue" class="form-label">Nome Fantasia</label>
                      <input type="text" class="form-control" id="NomeFantasiaSupplier" name="searchNomeFantasiaSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Razão Social</label>
                      <input type="text" class="form-control" id="razaoSocialSupplier" name="searchRazaoSocialSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CNPJ</label>
                      <input type="number" class="form-control" id="CNPJsupplier" name="searchCNPJSupplier">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               </div>
</section>
<section>
    <div class="mt-2 col-12 row">
        <div class="col-md-6 align-items-center gy-4">
	
          <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
        </div>
        <div class="col-md-6 align-items-center gy-4">
          <button class="btn btn-danger w-100 p-3" type="reset" onclick="limparCampos()">Limpar</button>
        </div>
      </div>
</section>


<script>
    function limparCampos() {
        document.getElementById("NomeFantasiaSupplier").value = '';
        document.getElementById("razaoSocialSupplier").value = '';
        document.getElementById("CNPJsupplier").value = '';
    }
</script>

</body>
</html>


