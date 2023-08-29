<?php

session_start();


if (isset($_GET['id'])) {
        include "conexao.php";
        $id = $_GET['id'];

        $sql = "DELETE FROM tb_usuario WHERE ID = $id";

        mysqli_query($conn,$sql);

        $sql2 = "DELETE FROM tb_aluno WHERE ID_USUARIO = $id";
        mysqli_query($conn,$sql2);
        header("location:index_aluno.php");
}








