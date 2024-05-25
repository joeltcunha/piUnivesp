<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Exclusão de clientes</title>


<body>
    
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Excluir clientes</span></h1>
<br>
<div class="form-check">
    <input class="form-check-input" type="radio" name="clientRadio" id="pessoaFisicaRadio" onclick="showCpfInput()">
    <label class="form-check-label" for="pessoaFisicaRadio" style="color:black">
        Pessoa física
    </label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="clientRadio" id="pessoaJuridicaRadio" checked onclick="showCnpjInput()">
    <label class="form-check-label" for="pessoaJuridicaRadio" style="color:black">
        Pessoa jurídica
    </label>
</div>

<br>
<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaJuridica">
    <form id="formPessoaJuridica" onsubmit="return validarCnpj()" class="form-control">
        <div class="row col-12 mt-2">
            <div class="col-md-6">
                <label for="razaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="razaoSocial" name="razao_social">
            </div>
            <div class="col-md-6">
                <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
            </div>
        </div>
        <div class="row col-12 mt-2">
            <div class="col-md-7">
                <label for="cnpj" class="form-label">CNPJ <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cnpj" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
                    
                </div>
            </div>
        </div>
        <!-- Restante do formulário -->
        
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

<fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaFisica" style="display:none;">
    <form id="formPessoaFisica" onsubmit="return validarCpf()" class="form-control">
        <!-- Campos para pessoa física -->
        <div class="row col-12 mt-2">
            <div class="col-md-6">
                <label for="nomeFisica" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeFisica" name="nome">
            </div>
            <div class="col-md-7">
                <label for="cpf" class="form-label">CPF <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" id="cpf" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon2" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
                    
                </div>
            </div>
        </div>
        <!-- Restante do formulário -->
        
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
<script src="script.js"></script>

<script>
    function showCpfInput() {
        document.getElementById("fieldsetPessoaFisica").style.display = "block";
        document.getElementById("fieldsetPessoaJuridica").style.display = "none";
    }

    function showCnpjInput() {
        document.getElementById("fieldsetPessoaJuridica").style.display = "block";
        document.getElementById("fieldsetPessoaFisica").style.display = "none";
    }

    function validarCpf() {
        var cpf = document.getElementById('cpf').value;
        if (!validateCPF(cpf)) {
            alert("CPF inválido!");
            return false;
        }
        return true;
    }

    function validarCnpj() {
        var cnpj = document.getElementById('cnpj').value;
        if (!validateCNPJ(cnpj)) {
            alert("CNPJ inválido!");
            return false;
        }
        return true;
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
        document.getElementById('cpf').value = '';
        document.getElementById('cnpj').value = '';
    }
</script>

<?php
    include ("footer.php")

?>

</body>
</html>


