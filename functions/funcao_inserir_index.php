<?php
include ("include/conexao.php");
include ("include/fecha_conexao.php");

    function atualizar ($coluna, $valor, $tabela, $where){
        if ((is_array($coluna)) and (is_array($valor))) {
            if (count($coluna) == count($valor)){
                $valor_coluna = NULL;
                for ($i = 0; $i < count($coluna); $i ++)
                {
                    $valor_coluna .= "{$coluna[$i]} = '{$valor[$i]}', ";
                }
                 $valor_coluna= substr($valor_coluna, 0, -1);

                $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";


            }else {
                return false;
            }
        }else {
            $atualizar = "UPDATE {$tabela} SET  {$coluna} = '{$valor}' {$where}";
        }
        if ($conexao = conectar()) {
            if (mysqli_query($conexao, $atualizar)) {
                fechaConexao($conexao);
                return true;
            }else {
                echo "Query inválida";
                return false;
            }
        }else {
            return false;
        }
    }
