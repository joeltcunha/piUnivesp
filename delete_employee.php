<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Exclusão de colaboradores</title>


<body>
    
<?php
    include ("header.php");
    include ("navbar.php");
?>
<h1> <span class="badge text-bg-secondary">Exclusão de colaboradores</span></h1>
<br>

 <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
            <form action="#" class="form-control">
                <div class="row col-12 mt-2">
                    <div class="col-md-2">
                        <label for="matricula" class="form-label">Matrícula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula">
                    </div>
                    <div class="col-md-5">
                        <label for="employeeName" class="form-label">Nome Colaborador</label>
                        <input type="text" class="form-control" id="employeeName" name="nome_colaborador">
                    </div>
                </div>
<br>
<br>
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
        document.getElementById('employeeName').value = '';
        document.getElementById('matricula').value = '';
    }

</script>
<?php
    include ("footer.php")

?>
</body>
</html>