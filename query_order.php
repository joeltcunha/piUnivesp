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

    <h2> <span class="badge text-bg-secondary">Consulta de ordem de serviço</span></h2>
    <br>

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
        
            <form action="#" class="form-control">
                <section>
                <div class="row col-12 mt-2">
                    <div class="col-md-7">
                        <label for="cnpj" class="form-label">Número da Ordem de Serviço</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="orderNumber" placeholder="Somente números" name="ordernumber" aria-label="Somente números" aria-describedby="button-addon0">

                <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="razaoSocial" class="form-label">Razão Social do cliente</label>
                        <input type="text" class="form-control" id="razaoSocial" name="razao_social">
                    </div>
                    <div class="col-md-6">
                        <label for="nomeFantasia" class="form-label">Nome Fantasia do cliente</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
                    </div>
                </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-7">
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="CNPJCliente" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                        </section>
<br>
<br>
<br>
<section>
<div class="col-md-6">
                        <label for="nomeFantasia" class="form-label">Nome do cliente</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
                    </div>
                </div>

 <div class="row col-12 mt-2">
                    <div class="col-md-7">
                        <label for="cnpj" class="form-label">CPF</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cpfCliente" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon0">
<div>
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>

<section>

</section>
</div>
</div>
                        </div>
                    </div>
                </div>
                <?php
                include ("button-group.php")

                ?>
            </form>
 </fieldset>
<?php
include ("footer.php")

?>
<script>
    function limparCampos() {
        document.getElementById("orderNumber").value = '';
        document.getElementById("razaoSocial").value = '';
        document.getElementById("cpfCliente").value = '';
	document.getElementById("nomeFantasia").value = '';
    }
</script>
   
</body>
</html>
