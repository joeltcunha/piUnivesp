<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Excluir produtos ou serviços</title>

<body>
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Excluir produtos ou serviços</span></h1>
<br>
<div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="delete_productRadio" onclick="showDeleteproductRadio()">
        <label class="form-check-label" for="productRadio" style="color:black">
          Produto
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="delete_serviceRadio" checked onclick="showDeleteServiceRadio()">
        <label class="form-check-label" for="productRadio" style="color:black">
          Serviço
        </label>
      </div>

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetDelete_Product" style="display:none;">
            <form action="#" class="form-control">
                
                    <div class="col-md-5">
                        <label for="productDescription" class="form-label">Descrição produto</label>
                        <input type="text" class="form-control" id="productDescription" name="descricao_produto">
                    </div>
                       
                <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="manufacturerNumbe" class="form-label">Código fabricante</label>
                        <input type="manufacturerNumbe" class="form-control" id="manufacturerNumber" name="manufacturerNumber">
                    </div>
                  
                    <button class="btn btn-danger w-100 p-3" type="button" id="button-addon0" onclick="confirmarExclusao('matricula')">Excluir</button>
                </div>
            </div>
        </div>
        <!-- Restante do formulário -->
        <div class="mt-2 col-12 row">
            <div class="col-md-6 align-items-center gy-4">
               <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
            </div>
            <div class="col-md-6 align-items-center gy-4">
                <button value="save" class="btn btn-success w-100 p-3" onclick="limparCampos()">Limpar</button>
            </div>
        </div>
            </form>

    </fieldset>
    <br>
    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetDelete_Service">
        <form action="#" lass="form-control">
            
                <div class="col-md-5">
                    <label for="serviceDescription" class="form-label">Descrição serviço</label>
                    <input type="text" class="form-control" id="serviceDescription" name="serviceDescription">
                </div>
        
                <button class="btn btn-danger w-100 p-3" type="button" id="button-addon0" onclick="confirmarExclusao('matricula')">Excluir</button>
                </div>
            </div>
        </div>
        <!-- Restante do formulário -->
        <div class="mt-2 col-12 row">
            <div class="col-md-6 align-items-center gy-4">
               <a href="pagina_inicial.html" class="btn btn-primary w-100 p-3 mt-2">Voltar para a página inicial</a>
            </div>
            <div class="col-md-6 align-items-center gy-4">
                <button value="save" class="btn btn-success w-100 p-3" onclick="limparCampos()">Limpar</button>
            </div>
        </div>

        </form>

</fieldset>

<script>
    function showDeleteproductRadio() {
        document.getElementById("fieldsetDelete_Product").style.display = "block";
        document.getElementById("fieldsetDelete_Service").style.display = "none";
    }

    function showDeleteserviceRadio() {
        document.getElementById("fieldsetDelete_Service").style.display = "block";
        document.getElementById("fieldsetDelete_Product").style.display = "none";
    }

   
    function confirmarExclusao(tipo) {
        if (confirm(`Tem certeza que deseja excluir o ${tipo}?`)) {
            if (tipo === 'CPF') {
                document.getElementById('cpf').value = '';
            } else if (tipo === 'CNPJ') {
                document.getElementById('cnpj').value = '';
            }
        }
    }

   function limparCampos() {
        document.getElementById("productDescription").value = '';
        document.getElementById("manufacturerNumber").value = '';
    	document.getElementById("serviceDescription").value = '';
}
</script>

<?php
    include ("footer.php")

?>

</body>
</html>


