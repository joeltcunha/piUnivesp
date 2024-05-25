<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Relatórios de ordem de serviço</title>


<body>
<?php
    include ("header.php");
    include ("navbar.php");
?>
<h1> <span class="badge text-bg-secondary">Relatórios de ordem de serviço</span></h1>
<br>
<h3> <span class="badge text-bg-secondary">Pesquisar por:</span></h3>


<section>
    <div class="col-md-6">
        <label for="serviceDate" class="form-label">Número Ordem de Serviço</label>
        <input type="number" class="form-control" id="orderNumber" name="searchOrderNumber">
    </div>
    
    <div class="col-md-6 align-items-center gy-4">
        <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
    </div>
    </div>
    <div class="col-md-6">
                      <label for="serviceValue" class="form-label">Data</label>
                      <input type="date" class="form-control" id="serviceDate" name="searchDate">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
</section>

<section>
    <div class="col-md-6">
                      <label for="serviceDate" class="form-label">CPF Cliente</label>
                      <input type="number" class="form-control" id="serviceClientCPF" name="searchClientCPF">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
                </section>

<section>
    <div class="col-md-6">
                      <label for="product" class="form-label">Produto</label>
                      <input type="text" class="form-control" id="serviceProduct" name="searchProduct">
                  </div>
  
    <div class="col-md-6 align-items-center gy-4">
                      <button value="search" class="btn btn-success w-100 p-3">Buscar</button>
                  </div>
    </section>
</div>
<br>
<?php
            include "button-group.php";
            ?>


<script>
    function limparCampos() {
        document.getElementById("serviceDate").value = '';
        document.getElementById("serviceClientCPF").value = '';
        document.getElementById("serviceProduct").value = '';
        document.getElementById("orderNumber").value = '';
    }
</script>
<?php
    include ("footer.php")

?>
</body>
</html>
