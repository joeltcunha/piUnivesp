<?php

include "functions/funcao_inserir.php";

;
@$servico = $_REQUEST['serviceDescription'];

if (isset($nome))
{
    inserir(array("servico"), array(
        $servico
    ), "servicos");
    echo "<script>alert('Cadastro de serviço realizado com sucesso!!!');</script>";

}



?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>Cadastro de Serviços</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
<br>
<div class="ps-3">
    <h2> <span class="";>Cadastro de serviços</span></h2>
</div>

<br>

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetService">
    <form action="#" class="gx-3 gy-1 form-control">
        <div class="row">
            <div class="col-md-12">
                <label for="serviceDescription" class="form-label">Descrição serviço</label>
                <input type="text" class="form-control" id="serviceDescription" name="serviceDescription">
            </div>
        </div>

        <?php
        include "button-group-insert.php";
        ?>
    </form>

</fieldset>

<?php
include ("footer.php")

?>


</body>
</html>
