<?php

session_start();


if (isset($_GET['id'])) {
        include "conexao.php";
        $id = $_GET['id'];

        $sql="SELECT * FROM TB_USUARIO WHERE ID=$id";
    $resultado = mysqli_query($conn,$sql);    

    $rows = mysqli_fetch_array($resultado,MYSQLI_ASSOC);

    if (mysqli_num_rows($resultado) > 0) {

        $codigo = $rows['ID'];
        $email = $rows['EMAIL'];
        $tipo = $rows['TIPO'];
        $foto = $rows['FOTO'];
        $senha=$rows["SENHA"];

    } else {

      $codigo = '';
      $email = '';
      $tipo = '';
      $foto = '';
      $senha='';
    }

    $sql2="SELECT * FROM TB_ALUNO WHERE ID_USUARIO=$id";
    $result = mysqli_query($conn,$sql2);    

    $rows2 = mysqli_fetch_array($result,MYSQLI_ASSOC);

    if (mysqli_num_rows($result) > 0) {

      $nome=$rows2["NOME"];
      $endereco=$rows2["ENDERECO"];
      $DataIni=$rows2["DATA_INSCRICAO"];
      $matricula=$rows2["MATRICULA"];
      $DataCon=$rows2["DATA_CONCLUSAO"];
      $telefone1=$rows2["TELEFONE1"];
      $telefone2=$rows2["TELEFONE2"];

    } else {

      $nome='';
      $endereco='';
      $DataIni='';
      $matricula='';
      $DataCon='';
      $telefone1='';
      $telefone2='';
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imformacoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style-login.css">
</head>
<body>
<div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 700px; border:0;">
        <div class="card-body">
            <form class="box">
                <div class="row">
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email" class="">ID do Usuario</label>
                            <input type="email" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Foto</label>
                            <img src="data:image/jpg;base64,<?=base64_encode($_SESSION['foto'])?>" alt="..." style="width:50px;height:50px;border-radius:100%;">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Nome Completo</label>
                            <input type="email" value="<?php echo $nome ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">E-mail</label>
                            <input type="email" value="<?php echo $email ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Endereço</label>
                            <input type="email" value="<?php echo $endereco ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Telefone</label>
                            <input type="email" value="<?php echo $telefone1 ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Telefone Reserva</label>
                            <input type="email" value="<?php echo $telefone2 ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Matrícula</label>
                            <input type="email" value="<?php echo $matricula ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Data de iniciação</label>
                            <input type="email" value="<?php echo $DataIni ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="full-box">
                            <label for="email">Data de Conclusão</label>
                            <input type="email" value="<?php echo $DataCon ?>" readonly>
                        </div>
                    </div>
                </div>
                <a href="index_aluno.php" class="btn btn-outline-success">Voltar</a>
            </form>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>



           