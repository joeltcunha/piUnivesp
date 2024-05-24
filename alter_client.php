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
    <form action="#" class="form-control">
      <!-- Campos para pessoa jurídica -->
      <div class="row col-12 mt-2">
        <div class="col-md-4">
          <label for="razaoSocial" class="form-label">Razão Social</label>
          <input type="text" class="form-control" id="razaoSocial" name="razao_social">
        </div>
        <div class="col-md-4">
          <label for="nomeFantasia" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="nomeFantasia" name="nome_fantasia">
        </div>
          <div class="col-md-4">
              <label for="cnpj" class="form-label">CNPJ (somente números)</label>
              <div class="input-group">
                  <input type="text" class="form-control" id="cnpj" placeholder="Somente números" name="cnpj" aria-label="Somente números" aria-describedby="button-addon0">
                  <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
              </div>
          </div>
      <div class="row col-12 mt-2">

        </div>
      </div>
      <!-- Outros campos para pessoa jurídica -->
      <!-- ... -->
      <?php
        include "button-group.php"
      ?>
    </form>
  </fieldset>

  <br>

  <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end" id="fieldsetPessoaFisica" style="display:none;">
    <form action="#" class="form-control">
      <!-- Campos para consulta e alteração de pessoa física -->
      <div class="row col-12 mt-2">
        <div class="col-md-7">
          <label for="cpf" class="form-label">CPF (somente números)</label>
          <div class="input-group">
            <input type="text" class="form-control" id="cpf" placeholder="Digite o número do seu CPF" name="cpf" aria-label="CPF">
            <button class="btn btn-outline-primary" type="button" id="button-addon1" onclick="pesquisarCliente('cpf')">Pesquisar</button>
          </div>
        </div>
      </div>
      <!-- Outros campos para pessoa física -->
      <!-- ... -->
      <?php
        include "button-group.php"
        ?>
    </form>
  </fieldset>


  <script>
    function toggleForm(showId, hideId) {
      document.getElementById(showId).style.display = "block";
      document.getElementById(hideId).style.display = "none";
    }

    function pesquisarCliente(tipo) {
      // Lógica para pesquisar cliente pelo CNPJ ou CPF
      // Aqui você pode adicionar a lógica para chamar os arquivos correspondentes para pesquisa
      // Exemplo de chamada de arquivo:
      if (tipo === 'cnpj') {
        // Chamar arquivo para pesquisa de cliente jurídico
        console.log('Pesquisar cliente jurídico...');
      } else if (tipo === 'cpf') {
        // Chamar arquivo para pesquisa de cliente físico
        console.log('Pesquisar cliente físico...');
      }
    }

    function limparCampos() {
        document.getElementById('cpf').value = '';
        document.getElementById('cnpj').value = '';
        document.getElementById("razaoSocial").value = '';
document.getElementById("nomeFantasia").value = '';
    }
  </script>
</body>
</html>

