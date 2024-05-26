<?php

include "functions/funcao_inserir.php";

@$ordemDeServico = $_REQUEST['serviceNumber'];
@$serviceDescript = $_REQUEST['serviceDescrip'];
@$cliente = $_REQUEST['customer'];
@$produtos = $_REQUEST['productName'];
@$garantia = $_REQUEST['warranty'];
@$serviceValue = $_REQUEST['serviceValue'];

if (isset($ordemDeServico))
{
    inserir(array("osNumber", 'cliente', 'descricaoServico','produtos', 'garantia', 'valorTotal'), array(
       $ordemDeServico, $cliente, $serviceDescript, $produtos, $garantia, $serviceValue
    ), 'ordemservicos');
    echo "<script>alert('Ordem de serviço realizada com sucesso!!!');</script>";

}



?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>Cadastro de ordens de serviço</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
<br>
<div class="ps-3">
    <h2> <span class="";>Cadastro de ordens de serviço</span></h2>
</div>

    <br>

    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct">
            <form action="#" class="gx-3 form-control">
                <div class="row mt-2">
                    <div class="col-md-2">
                        <label for="serviceNumber" class="form-label">Número da OS</label>
                        <input type="text" class="form-control" id="serviceNumber" name="serviceNumber">
                    </div>
                    <div class="col-md-6">
                        <label for="customer" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="customer" name="customer">
                    </div>

                </div>
                <div class="row justify-content-end">
                    <div class="col-md-10">
                        <label for="serviceDescrip" class="form-label">Descrição dos serviços</label>
                        <textarea rows="2" cols="60" class="form-control" id="serviceDescrip" name="serviceDescrip"></textarea>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-end">
                        <div class="col-md-10">
                            <label for="productName" class="form-label">Produtos utilizados</label>
                            <textarea rows="1" cols="5" class="form-control" id="productName" name="productName"></textarea>
                    </div>

                <div class="row mt-2 justify-content-end">
                    <div class="col-md-2">
                        <label for="warranty" class="form-label">Prazo de garantia</label>
                        <input type="text" class="form-control" id="warranty" name="warranty">
                    </div>
                    <div class="col-md-2">
                        <label for="serviceValue" class="form-label">Valor do serviço</label>
                        <input type="tel" class="form-control" id="serviceValue" name="serviceValue">
                    </div>
                    <?php
                    include "button-group-insert.php";
                    ?>

            </form>

    </fieldset>


</fieldset>

<?php
include ("footer.php")

?>
<script src="../js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
         function showproductRadio() {
        document.getElementById("fieldsetProduct").style.display = "block";
        document.getElementById("fieldsetService").style.display = "none";
    }

    function showServiceRadio() {
        document.getElementById("fieldsetService").style.display = "block";
        document.getElementById("fieldsetProduct").style.display = "none";
    }

    
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>
</html>