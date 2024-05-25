<?php

?>
<!DOCTYPE html>
<?php

    include ("head.php")
?>
    <title>Consulta de colaboradores</title>


<body>
    
<?php
    include ("header.php");
    include ("navbar.php");
?>

    
    <h1> <span class="badge text-bg-secondary">Consulta de colaboradores</span></h1>
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
                    </div>                            <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                        </div>
                    </div>
                </div>


                    
<?php
            include "button-group.php";
            ?>

</form>
</fieldset>
<?php
    include ("footer.php")

?>
</body>
</html>