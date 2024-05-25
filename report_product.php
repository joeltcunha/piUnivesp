<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Relatórios de produtos e serviços</title>


<body>
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Relatórios de produtos e serviços</span></h1>
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
 <br>
 
<?php
            include "button-group.php";
            ?>



<script>
    function limparCampos() {
        document.getElementById("razaoSocialClient").value = '';
        document.getElementById("manufacturer").value = '';
        document.getElementById("manufacturerCode").value = '';
	document.getElementById("serviceName").value = '';
    }
</script>
<?php
    include ("footer.php")

?>
</body>
</html>
