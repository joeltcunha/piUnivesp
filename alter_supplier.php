<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Alteração de cadastro de fornecedores</title>
<body>


<body>
    
<?php
    include ("header.php");
    include ("navbar.php");
?>
  <h1> <span class="badge text-bg-secondary">Alteração de cadastro de fornecedores</span></h1>
  <br>
<form action="#" onsubmit="return validarCNPJ()" class="form-control">                
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
                <?php
            include "button-group-insert.php";
            ?>

    </form>
<script>
      function limparCampos() {
        document.getElementById('cpf').value = '';
        document.getElementById('cnpj').value = '';
    }
</script>
<?php
    include ("footer.php")

?>
  
   </body>
</html>

