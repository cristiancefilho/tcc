<?php
     session_start();

          $id=$_POST['id'];
          echo $id;

          include "conexao.php";
          
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

          $sql = "UPDATE TB_USUARIO SET EMAIL = '$gmail',FOTO = '$foto',TIPO = 'ALU',SENHA = '$senha' WHERE ID = $id ";
          $resultado = mysqli_query($conn,$sql);
          
          $sql2 = "UPDATE TB_ALUNO SET MATRICULA = '$matricula',NOME = '$nome',DATA_INSCRICAO = '$DataIni',DATA_CONCLUSAO = '$DataCon',ENDERECO = '$endereco',TELEFONE1 = '$telefone1',TELEFONE2 = '$telefone2' WHERE ID_USUARIO = $id ";
          $result = mysqli_query($conn,$sql2);
          if ($resultado && $result) {
               header("location:index_aluno.php");
          } else {
               echo "Ocorreu um erro no update" .  mysqli_error($conn);
          }