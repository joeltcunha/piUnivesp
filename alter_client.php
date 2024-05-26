<?php

?>

<head>
    <?php
        include ("head.php")
    ?>
    <title>Alteração de cadastro dos clientes</title>
</head>

<body>
<?php
    include ("header.php");
    include ("navbar.php") ;
?>
<br>
<h2> <span class="ps-3";>Alteração do cadastro de clientes</span></h2>
<br>
<div class="ps-3">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaFisicaRadio" onclick="showpessoaFisicaRadio()">
        <label class="form-check-label" for="pessoaFisicaRadio">Pessoa física</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaJuridicaRadio" aria-checked="true" checked onclick="pessoaJuridicaRadio()">
        <label class="form-check-label" for="pessoaJuridicaRadio">Pessoa jurídica</label>
    </div>
</div>


<br>
<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaJuridica">
    <form action="#" method="post" class="form-control">
        <div class="row mt-2">
            <div class="col-md-4">
                <label for="razaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="razaoSocial" name="razaoSocial">
            </div>
            <div class="col-md-4">
                <label for="cnpj" class="form-label">CNPJ</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                    <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                </div>
            </div>
        </div>
        <?php
        include "button-group.php"
        ?>

    </form>

</fieldset>

<br>

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaFisica" style="display:none;">
    <form action="#" method="post" class="form-control">
        <div class="row mt-2">
            <div class="col-md-4">
                <label for="nomePF" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeFisica" name="nomePF">
            </div>
            <div class="col-md-3">
                <label for="cpf" class="form-label">CPF</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cpf" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon0">
                    <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                </div>
            </div>
        </div>
            <?php
            include "button-group.php";
            ?>

    </form>
</fieldset>

<?php
include "footer.php"
?>
<script >
    function showpessoaFisicaRadio() {
        document.getElementById("fieldsetPessoaFisica").style.display = "block";
        document.getElementById("fieldsetPessoaJuridica").style.display = "none";
    }

    function showpessoaJuridicaRadio() {
        document.getElementById("fieldsetPessoaJuridica").style.display = "block";
        document.getElementById("fieldsetPessoaFisica").style.display = "none";
    }

</script>
</body>
</html>

