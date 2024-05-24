<?php

?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>Cadastro de Clientes</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaFisicaRadio" onclick="showpessoaFisicaRadio()">
        <label class="form-check-label" for="pessoaFisicaRadio">Pessoa física</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaJuridicaRadio" aria-checked="true" checked onclick="pessoaJuridicaRadio()">
        <label class="form-check-label" for="pessoaJuridicaRadio">Pessoa jurídica</label>
      </div>

      <br>
       <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaJuridica">
           <form action="#" method="post" class="form-control">
               <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="razaoSocial" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razaoSocial" name="razao_social">
                    </div>
                    <div class="col-md-4">
                        <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
                    </div>

               </div>

               <div class="row mt-2">
                   <div class="col-md-4">
                       <label for="cnpj" class="form-label">CNPJ</label>
                       <div class="input-group">
                           <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                           <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                       </div>
                   </div>
                    <div class="col-md-3">
                        <label for="inscEstadual" class="form-label">Inscrição Estadual</label>
                        <input type="text" class="form-control" id="inscEstadual" name="insc_estadual">
                    </div>
                    <div class="col-md-3">
                        <label for="inscMunicipal" class="form-label">Inscrição Municipal</label>
                        <input type="text" class="form-control" id="inscMunicipal" name="insc_municipal">
                    </div>
               </div>
               <div class="row mt-2">
                    <div class="col-md-3">
                        <label for="cep" class="form-label">CEP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cep" aria-label="Somente números" aria-describedby="button-addon1">
                            <button class="btn btn-outline-primary" type="button" id="button-addon1">Pesquisar</button>
                        </div>
                    </div>
               </div>
               <div class="row col-12 mt-2">
                    <div class="col-md-6">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="col-md-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero_end">
                    </div>
                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento">
                    </div>
               </div>
               <div class="row col-12 mt-2">
                    <div class="col-md-4">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro">
                    </div>
                    <div class="col-md-4">
                        <label for="cidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>
               </div>
                <div class="row col-12 mt-2">
                    <div class="col-md-8">
                        <label for="ramoAtividade" class="form-label">Ramo de Atividade Principal</label>
                        <input type="text" class="form-control" id="ramoAtividade" name="ramo_atividade">
                    </div>
                    <div class="col-md-4">
                        <label for="local" class="form-label">Local/Unidade</label>
                        <input type="text" class="form-control" id="local" name="local_unidade">
                    </div>
                </div>

                    <?php
                    include "button-group-insert.php"
                    ?>

            </form>
        
    </fieldset>

    <br>

    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaFisica" style="display:none;">
        <form action="#" method="post" class="form-control">
            <div class="row mt-2">
                <div class="col-md-4">
                    <label for="nomeFisica" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeFisica" name="nome">
                </div>
                <div class="col-md-3">
                    <label for="cnpj" class="form-label">CPF</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon0">
                        <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-3">
                    <label for="cep" class="form-label">CEP</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cep" aria-label="Somente números" aria-describedby="button-addon1">
                        <button class="btn btn-outline-primary" type="button" id="button-addon1">Pesquisar</button>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="col-md-2">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero_end">
                </div>
                <div class="col-md-4">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="col-md-4">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <div class="col-md-4">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                </div>
            </div>
            <?php
            include "button-group-insert.php";
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
