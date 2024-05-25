<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Relatórios de clientes</title>


<body>
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Relatórios de clientes</span></h1>
<br>
<h3> <span class="badge text-bg-secondary">Pesquisar por:</span></h3>

<div>
<section>
<p><span>Pessoa Jurídica</span></p>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Razão Social</label>
                      <input type="text" class="form-control" id="razaoSocialClient" name="searchRazaoSocialClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="CNPJClient" name="searchCNPJClient">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
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
               <?php
            include "button-group.php";
            ?>

<script>
    function limparCampos() {
        document.getElementById("razaoSocialClient").value = '';
        document.getElementById("CNPJClient").value = '';
        document.getElementById("nameClient").value = '';
        document.getElementById("CPFClient").value = '';
    }
</script>

<?php
    include ("footer.php")

?>
</body>
</html>

