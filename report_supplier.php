<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Relatórios de fornecedores</title>


<body>
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Relatórios de fornecedores</span></h1>
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
<br>
<?php
            include "button-group.php";
            ?>


<script>
    function limparCampos() {
        document.getElementById("NomeFantasiaSupplier").value = '';
        document.getElementById("razaoSocialSupplier").value = '';
        document.getElementById("CNPJsupplier").value = '';
    }
</script>
<?php
    include ("footer.php")

?>
</body>
</html>


