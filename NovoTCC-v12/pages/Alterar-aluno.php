<?php

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

<?php
  include('validar_sessao_adm.php');
?>


<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Alunos</title>
  
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
    <!-- //Nosso CSS --> 
    <link rel="stylesheet" href="../CSS/styles-cadastro.css">
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="stylesheet" href="../CSS/styles.css"/>


  </head>
  <body>
    <header>
      <div id="nav-top" class="content">
        <nav>
          <div><img src="../images/LOGO.png" alt="" class="brand"></div>
          <ul>
            <li><a href="./index.html">Inicio</a></li>
            <li><a href="./index-catalog.html">Catalogo</a></li>
            <li><a href="#about">Sobre</a></li>
            <li>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
            </li>
          </ul>
        </nav> 
      </div>
    </header>
      <div id="main-container">
        <h1>Cadastro</h1>
        <form method="post" action="upAuno.php">
            <h5>Preencha seus dados abaixo para realizar o cadastro</h5>
            <div class="full-box">
                <label for="email">ID do Usuario</label>
                <input type="email" name="id" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate required value="<?php echo $id ?>" readonly>
            </div>
            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate required value="<?php echo $email ?>">
            </div>
            <div class="full-box spacing" >
                <label for="name">Nome Completo</label>
                <input type="text" name="name" id="name" placeholder="Digite o nome nome do aluno" data-required data-min-length="3" data-max-length="16" required value="<?php echo $nome ?>">
            </div>
            <!--  -->
            <div class="half-box spacing">
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" placeholder="Digite a matrícula" data-required data-min-length="3" data-max-length="16" required value="<?php echo $senha ?>">
            </div>
            <div class="half-box spacing">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="foto" placeholder="Digite novamente sua senha" data-equal="password" required value="<?php echo $foto ?>">
            </div>
            <div class="half-box spacing">
                <label for="passwordAluno">Endereço</label>
                <input type="text" name="endereco" id="passwordAluno" placeholder="Digite sua senha" data-password-validate data-required required value="<?php echo $endereco ?>">
            </div>
            <div class="half-box">
                <label for="passconfirmation">Telefone</label>
                <input type="number" name="Telefone1" id="passconfirmation" placeholder="Digite novamente sua senha" data-equal="password" required value="<?php echo $telefone1 ?>">
            </div>
            <div class="half-box spacing">
              <label for="passwordAluno">Telefone Reserva</label>
              <input type="number" name="Telefone2" id="passwordAluno" placeholder="Digite sua senha" data-password-validate data-required required value="<?php echo $telefone2 ?>">
            </div>
            <div class="half-box spacing">
                <label for="CRM">Matrícula</label>
                <input type="number" name="MTC" id="CRM" placeholder="Digite a matrícula" data-required data-min-length="3" data-max-length="16" required value="<?php echo $matricula ?>">
            </div>
            <div class="half-box spacing">
              <label for="passconfirmation">Data de iniciação</label>
              <input type="date" name="DataIni" id="passconfirmation" placeholder="Digite novamente sua senha" data-equal="password" required value="<?php echo $DataIni ?>">
            </div>
            <div class="half-box spacing">
              <label for="passconfirmation">Data de Conclusão</label>
              <input type="date" name="DataCon" id="passconfirmation" placeholder="Digite novamente sua senha" data-equal="password" required value="<?php echo $DataCon ?>">
            </div> 
            <div class="full-box">
                <input id="btn-submit" type="submit" value="Alterar">
            </div>
        </form>
      </div>
      <p class="error-validation template"></p>
        
    

    
    



    <!-- Modal -->

    <div class="modal" tabindex="-1" id="exampleModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <form class="box" action="php\Valid_Login.php" method="post">
                      <h1>Entrar</h1>
                      <h5>Preencha seus dados abaixo de acordo com o seu cadastro já realizado.</h5>
                      <input type="email" name="usuario" placeholder="E-mail" required>
                      <input type="password" name="pswd" placeholder="Senha" required>
                      <input type="submit" name="" value="Login">
                      <div>
                          <label for="agreement" id="agreement-label"><a href="index-cadastroj.html"class="agreement">Recuperar Senha</a></label><br> 
                      </div>
                  </form>
              </div>
          </div>
      </div>
    </div>


    <!-- Nosso JS-->
    <script src="../script/carrossel"></script>
  </body>
</html>