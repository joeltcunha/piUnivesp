<?php

?>
<!DOCTYPE html>
<?php

include("includes/head.php")
?>
<title>PJ Sistema de Segurança</title>
<body>


<?php
include("includes/header.php");
include("includes/navbar.php");
?>

<br>
<div class="ps-3">
    <h2> <span class="">Relatórios de clientes</span></h2>
    <br>
    <h3> <span class="">Pesquisar por:</span></h3>
</div>

<br>


<div>
<section class="ps-3">
<p><span>Pessoa Jurídica</span></p>
    <div class="row">
        <div class="col-md-3">
            <label for="serviceValue" class="form-label">Razão Social</label>
            <input type="text" class="form-control" id="razaoSocialClient" name="searchRazaoSocialClient">
        </div>

        <div class="col-md-3 align-items-center gy-4">
            <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
        </div>
        <div class="col-md-3">
            <label for="serviceDate" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="CNPJClient" name="searchCNPJClient">
        </div>

        <div class="col-md-3 align-items-center gy-4">
            <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
        </div>
    </div>
    </div>

</section>
<br>
<br>
<br>

<p><span>Pessoa Física</span></p>
<div class="col-md-6">
                      <label for="serviceValue" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nameClient" name="searchNameClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="CPFClient" name="searchCPFClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
               </div>
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
        document.getElementById("CNPJClient").value = '';
        document.getElementById("nameClient").value = '';
        document.getElementById("CPFClient").value = '';
    }
</script>

</body>
</html>

