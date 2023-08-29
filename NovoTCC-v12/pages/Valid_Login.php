<?php
    //CRIAR A SESSÃO SEMPRE NO INICIO

    session_start();
    if($_POST['btn']=='Cadastrar'){
        header('location:index-cadastro.php');
    }else{

    

        include('conexao.php');

        $usu = @$_POST['usuario'];
        $sen = @$_POST['pswd'];

        //O METODO ISSET() VALIDA ASE A VARIAVEL SUPERGLOBAL $_POST
        //POSSUI A CHAVE
        if (isset($_POST['usuario']) && isset($_POST['pswd']))
        {

            $sql = "select * from tb_usuario where email='$usu' and senha='$sen';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                $row = mysqli_fetch_assoc($result);
                $_SESSION['id']= $row['ID'];
                $_SESSION['email']= $row['EMAIL'];
                $_SESSION['tipo']= $row['TIPO'];
                $_SESSION['foto']= $row['FOTO'];


                if($row['TIPO']=='ALU'){
                    header("location:../aluno/index-aluno.php");
                }elseif($row['TIPO']=='ADM') {
                    header("location:../adm/index-adm.php");
                } else {
                    header("location:../funcionario/index-funcio.php");
                }


            } else {

                echo "Usuário ou senha incorretos.";

            }

            $conn->close();
            
        }else{

        }
    }










