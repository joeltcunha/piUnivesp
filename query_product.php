<?php

?>
<!DOCTYPE html>
<html lang="br" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:black;">
    <h1> <span class="badge text-bg-secondary">PJ SISTEMA DE SEGURANÇA</span></h1>
    <h2> <span class="badge text-bg-secondary">Consulta de produtos e serviços</span></h2>
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
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct">
            <form action="#" class="row gx-3 gy1">
                
                    <div class="col-md-5">
                        <label for="productDescription" class="form-label">Descrição produto</label>
                        <input type="text" class="form-control" id="productDescription" name="descricao_produto">
                    </div>
                    <div class="col-md-5">
                        <label for="manufacturer" class="form-label">Fabricante</label>
                        <input type="manufacturer" class="form-control" id="manufacturer" name="manufacturer">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="manufacturerNumbe" class="form-label">Código fabricante</label>
                        <input type="manufacturerNumbe" class="form-control" id="manufacturerNumbe" name="manufacturerNumber">
                    </div>
<button class="btn btn-outline-primary" type="button" id="button-addon2">Pesquisar</button>
                     <div class="row col-12 mt-2">
                    <div class="col-md-6 align-items-center gy-4">
                        <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
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
<button class="btn btn-outline-primary" type="button" id="button-addon2">Pesquisar</button>
            <br>
            
            <div class="row col-12 mt-2">
                <div class="col-md-6 align-items-center gy-4">
                    <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
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

    </script>
</body>
</html>