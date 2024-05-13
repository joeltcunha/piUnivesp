<?php

?>
<!DOCTYPE html>
<html lang="br" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:black;">
    <h1> <span class="badge text-bg-secondary">PJ SISTEMA DE SEGURANÇA</span></h1>
    <h2> <span class="badge text-bg-secondary">Consulta de clientes</span></h2>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaFisicaRadio" onclick="toggleForm('fieldsetPessoaFisica', 'fieldsetPessoaJuridica')">
        <label class="form-check-label" for="pessoaFisicaRadio">
            Pessoa física
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="clientRadio" id="pessoaJuridicaRadio" checked onclick="toggleForm('fieldsetPessoaJuridica', 'fieldsetPessoaFisica')">
        <label class="form-check-label" for="pessoaJuridicaRadio">
            Pessoa jurídica
        </label>
    </div>

    <br>
    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaJuridica">
        <form action="#" onsubmit="return validarCNPJ()">
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
                        <input type="text" class="form-control" id="cnpjJuridica" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0" required>
                        <button class="btn btn-outline-primary" type="button" id="button-addon0" onclick="consultarClienteJuridico()">Pesquisar</button>
                    </div>
                    <div class="invalid-feedback">CNPJ inválido. Favor digitar novamente.</div>
                </div>
            </div>
            <!-- Restante dos campos para Pessoa Jurídica -->
            <!-- Botão de Cancelar e Limpar -->
            <div class="mt-2 col-12 row">
                <div class="col-md-6 align-items-center gy-4">
                    <button value="cancel" class="btn btn-danger w-100 p-3" onclick="voltarPagina()">Cancelar</button>
                </div>
                <div class="col-md-6 align-items-center gy-4">
                    <button type="reset" class="btn btn-secondary w-100 p-3">Limpar</button>
                </div>
            </div>

        </form>
    </fieldset>

    <br>

    <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaFisica" style="display:none;">
        <form action="#" onsubmit="return validarCPF()">
            <div class="col-md-6">
                <label for="nomeFisica" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeFisica" name="nome">
            </div>

            <div class="row col-12 mt-2">
                <div class="col-md-7">
                    <label for="cpf" class="form-label">CPF</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cpfFisica" placeholder="Somente números" name="cpf" aria-label="Somente números" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-primary" type="button" id="button-addon2" onclick="consultarClienteFisico()">Pesquisar</button>
                    </div>
                    <div class="invalid-feedback">CPF inválido. Favor digitar novamente.</div>
                </div>
            </div>
            <!-- Restante dos campos para Pessoa Física -->
            <!-- Botão de Cancelar e Limpar -->
            <div class="mt-2 col-12 row">
                <div class="col-md-6 align-items-center gy-4">
                    <button value="cancel" class="btn btn-danger w-100 p-3" onclick="voltarPagina()">Cancelar</button>
                </div>
                <div class="col-md-6 align-items-center gy-4">
                    <button type="reset" class="btn btn-secondary w-100 p-3">Limpar</button>
                </div>
            </div>
        </form>
    </fieldset>

    <script>
        function consultarClienteJuridico() {
            const cnpj = document.getElementById("cnpjJuridica").value.replace(/\D/g, '');

            if (!validarCNPJ(cnpj)) {
                document.getElementById("cnpjJuridica").classList.add('is-invalid');
            } else {
                document.getElementById("cnpjJuridica").classList.remove('is-invalid');
                alert("Consultando cliente jurídico com CNPJ: " + cnpj);
            }
        }

        function consultarClienteFisico() {
            const cpf = document.getElementById("cpfFisica").value.replace(/\D/g, '');

            if (!validarCPF(cpf)) {
                document.getElementById("cpfFisica").classList.add('is-invalid');
            } else {
                document.getElementById("cpfFisica").classList.remove('is-invalid');
                alert("Consultando cliente físico com CPF: " + cpf);
            }
        }

        function voltarPagina() {
            window.location.href = "pagina_inicial.html";
        }

        function toggleForm(showId, hideId) {
            document.getElementById(showId).style.display = "block";
            document.getElementById(hideId).style.display = "none";
        }

        function validarCNPJ() {
            const cnpj = document.getElementById("cnpjJuridica").value.replace(/\D/g, '');

            if (!validarCNPJ(cnpj)) {
                document.getElementById("cnpjJuridica").classList.add('is-invalid');
                return false;
            } else {
                document.getElementById("cnpjJuridica").classList.remove('is-invalid');
                alert("CNPJ válido: " + cnpj);
                return true;
            }
        }

        function validarCPF() {
            const cpf = document.getElementById("cpfFisica").value.replace(/\D/g, '');

            if (!validarCPF(cpf)) {
                document.getElementById("cpfFisica").classList.add('is-invalid');
                return false;
            } else {
                document.getElementById("cpfFisica").classList.remove('is-invalid');
                alert("CPF válido: " + cpf);
                return true;
            }
        }

        function validarCNPJ(cnpj) {
            if (!cnpj) return false;
            cnpj = cnpj.replace(/\D/g, '');
            if (cnpj.length !== 14) return false;
            if (/^(\d)\1+$/.test(cnpj)) return false;
            let length = cnpj.length - 2;
            let numbers = cnpj.substring(0, length);
            const digits = cnpj.substring(length);
            let sum = 0;
            let pos = length - 7;
            for (let i = length; i >= 1; i--) {
                sum += numbers.charAt(length - i) * pos--;
                if (pos < 2) pos = 9;
            }
            let result = sum % 11 < 2 ? 0 : 11 - sum % 11;
            if (result !== parseInt(digits.charAt(0))) return false;
            length = length + 1;
            numbers = cnpj.substring(0, length);
            sum = 0;
            pos = length - 7;
            for (let i = length; i >= 1; i--) {
                sum += numbers.charAt(length - i) * pos--;
                if (pos < 2) pos = 9;
            }
            result = sum % 11 < 2 ? 0 : 11 - sum % 11;
            if (result !== parseInt(digits.charAt(1))) return false;
            return true;
        }

        function validarCPF(cpf) {
            if (!cpf) return false;
            cpf = cpf.replace(/\D/g, '');
            if (cpf.length !== 11) return false;
            if (/^(\d)\1+$/.test(cpf)) return false;
            let sum = 0;
            let rest;
            for (let i = 1; i <= 9; i++) sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
            rest = (sum * 10) % 11;
            if ((rest === 10) || (rest === 11)) rest = 0;
            if (rest !== parseInt(cpf.substring(9, 10))) return false;
            sum = 0;
            for (let i = 1; i <= 10; i++) sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
            rest = (sum * 10) % 11;
            if ((rest === 10) || (rest === 11)) rest = 0;
            if (rest !== parseInt(cpf.substring(10, 11))) return false;
            return true;
        }
    </script>

</body>
</html>


