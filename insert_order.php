<?php

?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>PJ Sistema de Segurança</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
    <h2> <span class="";>Ordem de serviços</span></h2>
    <br>
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
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct" style="display:none;">
            <form action="#" class="row gx-3  form-control">
                <div class="col-md-5">
                    <label for="productDescription" class="form-label">Descrição produto</label>
                    <input type="text" class="form-control" id="productDescription" name="descricao_produto">
                </div>
                    <div class="col-md-5">
                        <label for="manufacturer" class="form-label">Fabricante</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="manufacturerNumber" class="form-label">Código fabricante</label>
                        <input type="text" class="form-control" id="manufacturerNumber" name="manufacturerNumber">
                    </div>
                    <div class="col-md-2">
                        <label for="warrantPeriod" class="form-label">Prazo de garantia</label>
                        <input type="tel" class="form-control" id="warrantPeriod" name="warrantPeriod">
                    </div>
                    <div class="col-md-6">
                        <label for="productCost" class="form-label">Valor de custo</label>
                        <input type="tel" class="form-control" id="productCost" name="productCost">
                    </div>
                    <div class="col-md-6">
                        <label for="productValue" class="form-label">Valor de venda</label>
                        <input type="tel" class="form-control" id="productValue" name="productValue">
                    </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-6 align-items-center gy-4">
                        <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
                    </div>
                    <div class="col-md-6 align-items-center gy-4">
                        <button value="save" class="btn btn-success w-100 p-3">Salvar</button>
                    </div>
                </div>
            </form>

    </fieldset>
    <br>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetService">
        <form action="#" class="row gx-3 gy1">
            
                <div class="col-md-5">
                    <label for="serviceDescription" class="form-label">Descrição serviço</label>
                    <input type="text" class="form-control" id="serviceDescription" name="serviceDescription">
                </div>
            
                <div class="col-md-6">
                    <label for="serviceValue" class="form-label">Valor</label>
                    <input type="tel" class="form-control" id="serviceValue" name="serviceValue">
                </div>
            
            <div class="row col-12 mt-2">
                <div class="col-md-6 align-items-center gy-4">
                    <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
                </div>
                <div class="col-md-6 align-items-center gy-4">
                    <button value="save" class="btn btn-success w-100 p-3">Salvar</button>
                </div>
            </div>
        </form>

</fieldset>


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