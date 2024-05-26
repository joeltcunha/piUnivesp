<?php

?>
<!DOCTYPE html>
<html lang="br" data-bs-theme="dark">
<?php

include ("head.php")
?>
<title>Alteração de serviços</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
    <br>
    <h2> <span class="ps-3";>Alteração de serviços</span></h2>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetService">
        <form action="#" class="gx-3 gy1 form-control">
            <div class="row">
                <div class="col-md-4">
                    <label for="osNumber" class="form-label">Código do serviço</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="osNumber" placeholder="Código do serviço" name="osNumber" aria-label="" aria-describedby="button-addon0">
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
                include ("button-group.php")

                ?>
            </div>

        </form>
    </fieldset>

<br>

        <?php
        include "footer.php";
        ?>

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
</body>
</html>

