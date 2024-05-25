<?php

?>
<!DOCTYPE html>
<html lang="br" data-bs-theme="dark">
<?php

include ("head.php")
?>
<title>Alteração de produtos ou serviços</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
      <h1> <span class="badge text-bg-secondary">Alteração de produtos ou serviços</span></h1>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="productRadio" onclick="showproductRadio()">
        <label class="form-check-label" for="productRadio">
          Produto
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="serviceRadio" checked onclick="showServiceRadio()">
        <label class="form-check-label" for="productRadio">
          Serviço
        </label>
    </div>
      <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct"  style="display:none;">
        <form action="#" class="form-control">
            <div class="row">
                <div class="col-md-4">
                    <label for="nomeColaborador" class="form-label">Nome do produto</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nomeColaborador" placeholder="Nome do colaborador" name="nomeColaborador" aria-label="" aria-describedby="button-addon0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label for="manufactNumber" class="form-label">Código fabricante</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="manufactNumber" placeholder="Código de fabricante" name="manufactNumber" aria-label="" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                    </div>
                </div>
            </div>
                <?php
                include ("button-group-insert.php")

                ?>
        </form>
    </fieldset>
  <br>

  <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetService">
        <form action="#" class="form-control">
            <div class="row">
                <div class="col-md-4">
                    <label for="osNumber" class="form-label">Número da OS</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="osNumber" placeholder="Número da ordem de serviço" name="osNumber" aria-label="" aria-describedby="button-addon0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label for="serviceDescript" class="form-label">Descrição do serviço</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="serviceDescript" placeholder="Descrição do serviço" name="serviceDescript" aria-label="" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                </div>
                <?php
                include ("button-group-insert.php")

                ?>
            </div>

        </form>
    </fieldset>

<br>

  <script>
   
         function showproductRadio() {
        document.getElementById("fieldsetProduct").style.display = "block";
        document.getElementById("fieldsetService").style.display = "none";
    }

    function showServiceRadio() {
        document.getElementById("fieldsetService").style.display = "block";
        document.getElementById("fieldsetProduct").style.display = "none";
    }

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

