<?php

?>
<!DOCTYPE html>
<html lang="br" data-bs-theme="dark">
<head>
    <?php
    include ("head.php")
    ?>
    <title>Alteração de cadastro dos colaboradores</title>
</head>

<body>
<?php
include ("header.php");
include ("navbar.php") ;
?>

<h1> <span class="badge text-bg-secondary">Alteração de cadastro dos colaboradores</span></h1>
<br>
   <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
       <form action="#" class="form-control">
           <div class="row col-12 mt-2">
               <div class="col-md-2">
                   <label for="matricula" class="form-label">Matrícula</label>
                   <input type="text" class="form-control" id="matricula" name="matricula">
               </div>
               <div class="col-md-4">
                   <label for="nomeColaborador" class="form-label">Nome</label>
                   <div class="input-group">
                       <input type="text" class="form-control" id="nomeColaborador" placeholder="Nome do colaborador" name="nomeColaborador" aria-label="" aria-describedby="button-addon0">
                       <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                   </div>
               </div>
               <br>
               <br>

               <?php
                include ("button-group-insert.php")

               ?>
            </div>
        </form>
</fieldset>

<?php
include "footer.php"
?>


  <script>
   
         function limparCampos() {
        document.getElementById("matricula").value = '';
        document.getElementById("employeeName").value = '';
    }

    
  </script>
</body>
</html>