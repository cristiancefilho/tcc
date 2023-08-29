<?php
include('conexao.php');
//salvando os dados
$gmail=$_POST["email"];
$nome=$_POST["name"];
$senha=$_POST["senha"];
$foto=$_POST["foto"];
$endereco=$_POST["endereco"];
$DataIni=$_POST["DataIni"];
$matricula=$_POST["MTC"];
$DataCon=$_POST["DataCon"];
$telefone1=$_POST["Telefone1"];
$telefone2=$_POST["Telefone2"];


// Iniciar a transação
mysqli_begin_transaction($conn);

try {
    // Inserir dados na primeira tabela
    $query1 = "INSERT INTO tb_usuario
    (email,senha,foto,tipo)
    VALUES('$gmail','$senha','$foto','ALU')";
    mysqli_query($conn, $query1);

    // Obter o ID gerado
    $id = mysqli_insert_id($conn);

    // Inserir dados na segunda tabela
    $query2 = "INSERT INTO tb_aluno
    (matricula,nome,data_inscricao,data_conclusao,endereco,telefone1,telefone2,id_usuario) VALUES ('$matricula','$nome','$DataIni','$DataCon','$endereco','$telefone1','$telefone2',$id)";
    mysqli_query($conn, $query2);

    // Confirmar a transação
    mysqli_commit($conn);

    echo 'Usuário cadastrado com sucesso!';
} catch (Exception $e) {
    // Reverter as alterações em caso de erro
    mysqli_rollback($conn);

    echo 'Erro durante o cadastro do usuário: ' . $e->getMessage();
}




    header("location:index-cadastro.php");
