<?php

include "functions/funcao_inserir.php";

@$nome = $_REQUEST['productName'];
@$descricao = $_REQUEST['productDescription'];
@$fabricante = $_REQUEST['manufacturer'];
@$codigoProduto = $_REQUEST['manufacturerNumber'];
@$garantia = $_REQUEST['warrantPeriod'];
@$valorDeCusto = $_REQUEST['productCost'];
@$valorDeVenda = $_REQUEST['productValue'];


if (isset($nome))
{
    inserir(array("nome", 'Descricao', 'codigoProduto','fabricante', 'garantia', 'Preco', 'Custo'), array(
        $nome, $descricao, $fabricante, $codigoProduto, $garantia, $valorDeCusto, $valorDeVenda
    ), 'produtos');
    echo "<script>alert('Cadastro de produto realizado com sucesso!!!');</script>";

}



?>
<!DOCTYPE html>
<?php

include("head.php")
?>
<title>Cadastro de produtos</title>
<body>


<?php
include("header.php");
include("navbar.php");
?>
<br>
<div class="ps-3">
    <h2> <span class="";>Cadastro de produtos</span></h2>
</div>
<br>
<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetProduct" >
    <form action="#" class="gx-3 form-control">
        <div class="row mt-2">
            <div class="col-md-3">
                <label for="productName" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" id="productName" name="productName">
            </div>
            <div class="col-md-4">
                <label for="productDescription" class="form-label">Descrição produto</label>
                <input type="text" class="form-control" id="productDescription" name="productDescription">
            </div>
            <div class="col-md-3">
                <label for="manufacturer" class="form-label">Fabricante</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer">
            </div>
            <div class="col-md-2">
                <label for="manufacturerNumber" class="form-label">Código fabricante</label>
                <input type="text" class="form-control" id="manufacturerNumber" name="manufacturerNumber">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-2">
                <label for="warrantPeriod" class="form-label">Prazo de garantia</label>
                <input type="text" class="form-control" id="warrantPeriod" name="warrantPeriod">
            </div>
            <div class="col-md-3">
                <label for="productCost" class="form-label">Valor de custo</label>
                <input type="text" class="form-control" id="productCost" name="productCost">
            </div>
            <div class="col-md-3">
                <label for="productValue" class="form-label">Valor de venda</label>
                <input type="tel" class="form-control" id="productValue" name="productValue">
            </div>
            <?php
            include "button-group-insert.php";
            ?>

    </form>

</fieldset>

<?php
include("footer.php")

?>

</body>
</html>
