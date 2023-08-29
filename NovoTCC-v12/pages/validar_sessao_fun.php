<?php
    include("validar_sessao.php");

    if($_SESSION['TIPO']!='FUN'){
        echo "ERRO";
    }

?>
