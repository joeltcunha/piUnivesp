<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Excluir fornecedores</title>


<body>
    
<?php
    include ("header.php");
    include ("navbar.php");
?>

<h1> <span class="badge text-bg-secondary">Excluir fornecedores</span></h1>
<br>

<form action="#" onsubmit="return validarCNPJ()" class="form-control">                
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
                        <label for="cnpj" class="form-label">CNPJ</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cep" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
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


<script>
   
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

</body>
</html>