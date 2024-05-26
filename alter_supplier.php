<?php

?>
<!DOCTYPE html>
<<?php

include("head.php")
?>
<title>PJ Sistema de Segurança</title>
<body>


<?php
include("header.php");
include("navbar.php");
?>

<br>
  <h2> <span class="ps-3">Alteração de cadastro de fornecedores</span></h2>
  <br>
<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaJuridica">
<form action="#" onsubmit="return validarCNPJ()">                
                <div class="row col-12 mt-2">
                    <div class="col-md-5">
                        <label for="razaoSocial" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razaoSocial" name="razao_social">
                    </div>
                    <div class="col-md-3">
                        <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
                    </div>
                    <div class="col-md-3">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                </div>


<br>

    <?php
    include "button-group.php"
    ?>
    </form>
</fieldset>
<?php
include "footer.php"
?>
<script>
      function limparCampos() {
        document.getElementById('cpf').value = '';
        document.getElementById('cnpj').value = '';
    }
</script>
  
  
   </body>
</html>

