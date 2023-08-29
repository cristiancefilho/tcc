<?php
    include("validar_sessao.php");

    if($_SESSION['tipo']!='ALU'){
        echo "ERRO";
    }

?>
