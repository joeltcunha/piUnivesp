<?php

include "functions/funcao_inserir.php";

@$razaoSocial = $_REQUEST['razaoSocial'];
@$nome = $_REQUEST['nomePF'];
@$cnpj = $_REQUEST['cnpj'];
@$cpf = $_REQUEST['cpf'];
@$cep = $_REQUEST['cep'];
@$logradouro = $_REQUEST['logradouro'];
@$numero_end = $_REQUEST['numero_end'];
@$complemento_end = $_REQUEST['complemento_end'];
@$bairro = $_REQUEST['bairro'];
@$cidade = $_REQUEST['cidade'];
@$uf = $_REQUEST['uf'];
@$email = $_REQUEST['email'];
@$telefone = $_REQUEST['telefone'];

if (isset($razaoSocial) and isset($cnpj))
{
    inserir(array("nome", 'cnpj', 'cep','endereco', 'numero', 'complemento', 'bairro', "cidade", 'uf','email', 'telefone'), array(
            $razaoSocial, $cnpj, $cep, $logradouro,$numero_end, $complemento_end, $bairro, $cidade, $uf, $email, $telefone
    ), "clientes");
    echo "<script>alert('Cadastro Pessoa Jurídica realizado com sucesso!!!');</script>";

}elseif (isset($nome) and isset($cpf)) {
    inserir(array("nome", 'cpf', 'cep', 'endereco', 'numero', 'complemento', 'bairro', "cidade", 'uf', 'email', 'telefone'), array(
        $nome, $cpf, $cep, $logradouro, $numero_end, $complemento_end, $bairro, $cidade, $uf, $email, $telefone
    ), "clientespf");
    echo "<script>alert('Cadastro Pessoa Física realizado com sucesso!!!');</script>";
}


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
                        <input type="text" class="form-control" id="razaoSocial" name="razaoSocial">
                    </div>
                   <div class="col-md-4">
                       <label for="cnpj" class="form-label">CNPJ</label>
                       <div class="input-group">
                           <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                           <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                       </div>
                   </div>
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
                        <input type="text" class="form-control" id="endereco" name="logradouro">
                    </div>
                    <div class="col-md-2">
                        <label for="numero" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero" name="numero_end">
                    </div>
                    <div class="col-md-4">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento_end">
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
                        <input type="text" class="form-control" id="estado" name="uf">
                    </div>
               </div>
               <div class="row col-12 mt-2">
                   <div class="col-md-4">
                       <label for="email" class="form-label">E-mail</label>
                       <input type="email" class="form-control" id="email" name="email">
                   </div>
                   <div class="col-md-4">
                       <label for="telefone" class="form-label">Telefone</label>
                       <input type="text" class="form-control" id="telefone" name="telefone">
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
                    <input type="text" class="form-control" id="endereco" name="logradouro">
                </div>
                <div class="col-md-2">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero_end">
                </div>
                <div class="col-md-4">
                    <label for="complemento" class="form-label">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento_end">
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
                    <input type="text" class="form-control" id="estado" name="uf">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-4">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <input type="submit" value="Enviar" class="form-control bg-success text-white" name="sbmt" >
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
