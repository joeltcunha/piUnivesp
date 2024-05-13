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
<h2> <span class="badge text-bg-secondary">Relatórios de produtos e serviços</span></h2>
<br>
<h3> <span class="badge text-bg-secondary">Pesquisar por:</span></h3>

<section>
<p><span>Produto</span></p>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Descrição do Produto</label>
                      <input type="text" class="form-control" id="razaoSocialClient" name="searchRazaoSocialClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
 <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Fabricante</label>
                      <input type="text" class="form-control" id="manufacturer" name="searchManufacturer">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>

                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">Código do fabricante</label>
                      <input type="text" class="form-control" id="manufacturerCode" name="searchManufacturerCode">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               </div>
</section>
<br>
<br>
<section>
<p><span>Serviço</span></p>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Descrição do serviço</label>
                      <input type="text" class="form-control" id="serviceName" name="searchServiceName">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
 
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
        document.getElementById("razaoSocialClient").value = '';
        document.getElementById("manufacturer").value = '';
        document.getElementById("manufacturerCode").value = '';
	document.getElementById("serviceName").value = '';
    }
</script>

</body>
</html>
