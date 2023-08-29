<?php
    include("validar_sessao.php");

    if($_SESSION['tipo']!='ADM'){
        echo "Erro";
    }

?>
