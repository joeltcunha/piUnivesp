<?php

?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>Alteração de ordem de serviço</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>
<h1> <span class="badge text-bg-secondary">Alteração de ordem de serviço</span></h1>
<br>
   <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
       <form action="#" class="form-control">
           <div class="row col-12 mt-2">
               <div class="col-md-4">
                   <label for="nomeColaborador" class="form-label">Número da ordem de serviço</label>
                   <div class="input-group">
                       <input type="text" class="form-control" id="nomeColaborador" placeholder="Nome do colaborador" name="nomeColaborador" aria-label="" aria-describedby="button-addon0">
                       <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                   </div>
               </div>

                <?php
                    include ("button-group-insert.php")
                ?>
           </div>
        </form>
    </fieldset>

  <script>
   
    function limparCampos() {
        document.getElementById("orderNumber").value = '';
    }
        
  </script>
<?php
    include "footer.php"
?>
</body>
</html>

