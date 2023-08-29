<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro De Livros</title>
  
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
        <div class="header-block">
          <div class="text">
            <h2> Dr. Nelson dos Santos<br>Gonçalves</h2>
            <p>
              Um livro é a prova de que os homens são capazes de fazer magia.<br>– Carl Sagan
            </p>
          </div>
          <div class="line">
            <img src="../images/imagen-sobre.jpg" alt="" id="size">
          </div>
        </div>
      </div>
    </header>



    <div id="main-container">
        <h1>Cadastro De Livros</h1>
        <form id="register-form" action="">
            <h5>Preencha os dados abaixo para realizar o cadastro dos livros</h5>
            <div class="full-box">
                <label for="titulo">Titulo do Livro</label>
                <input type="text" name="titulo_Livro" id="titulo" placeholder="Digite o Livro" data-min-length="40" data-email-validate required>
            </div>
            <div class="full-box spacing" >
                <label for="genero">Gênero Do Livro</label>
                <input type="text" name="genero_livro" id="genero" placeholder="Digite o Gênero" data-required data-min-length="30" data-max-length="16" required>
            </div>
            <div class="half-box spacing">
                <label for="publicacao">Data de Publicação</label>
                <input type="text" name="publicacao_livro" id="publicacao" placeholder="Digite a Publicação " data-password-validate data-required required>
            </div>
            <div class="half-box">
                <label for="passwordconfirmation">Confirmação de senha</label>
                <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password" required>
            </div>
            <div class="half-box spacing">
                <label for="matric">Matrícula</label>
                <input type="number" name="CRP" id="matric" placeholder="Digite a matrícula" data-required data-min-length="3" data-max-length="16" required>
            </div>
            <div class="half-box">
                <label for="dateNasc">Data de nascimento</label>
                <input type="date" name="lastname" id="dateNasc" placeholder="Digite a data de nascimento" data-required data-only-letters required>
            </div> 
            <div class="full-box">
                <input id="btn-submit" type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
    <p class="error-validation template"></p>
    
    <footer>
      <div class="last">Criação de: Thiago Soares, Daniel Gonçalves e Cristian Chagas.</div>
    </footer>

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