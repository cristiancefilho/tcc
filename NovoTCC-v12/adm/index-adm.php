
<?php
    include('../pages/validar_sessao_adm.php');
?>

<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pag_Inicial</title>
  
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    
    <!-- //Nosso CSS -->
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="stylesheet" href="../CSS/styles.css"/>


  </head>
  <body>
      
  <header>
      <div id="nav-top" class="content">
        <nav>
          <div><img src="../images/LOGO.png" alt="" class="brand"></div>
          <ul>
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./index-catalog.php">Catalogo</a></li>
            <li><a href="./index.php?#about">Sobre</a></li>
            <li>
              <button id="Perfil" data-bs-toggle="modal" data-bs-target="#exampleModal" ><img src="data:image/jpg;base64,<?=base64_encode($_SESSION['foto'])?>" alt="..." style="width:50px;height:50px;border-radius:100%;"></button>
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
    <section class="about" id="about">
      <div class="content">
        <div class="title-wrapper-about">
          <a name="about">
            <h3>Sobre</h3>
          </a>
        </div>
        <div class="about-content">
          <div class="left">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
              <div class="carousel-inner " >
                  <div class="carousel-item active">
                      <img src="../images/capa_escola.jpg" class="d-block w-100 " alt="..."id="img">
                  </div>
                  <div class="carousel-item">
                      <img src="../images/leitura1.jpg" class="d-block w-100" alt=""id="img">
                  </div>
                  <div class="carousel-item ">
                      <img src="../images/Foto-da-Biblioteca.jpeg" class="d-block w-100 " alt="..."id="img" >
                  </div>
              </div>
          </div>
          </div>
          <div class="right">
            <h3>CIEP 053</h3>
            <p >
              Em 1984, o então governador Leonel Brizola junto ao vice-governador Darci Ribeiro, idealizador do projeto dos Cieps, deram início a construção dos prédios que atenderiam a 1000 alunos em horário integral da classe de alfabetização à quarta série do ensino fundamental. 
              Em 1997, o Ciep Brizolão 053 Dr. Nelson dos S.Gonçalves começou a atender a segunda fase do ensino fundamental ao ensino médio. Também contemplava o projeto autonomia, que era um projeto voltado para alunos com distorção de idade e série.
              Hoje a escola se dedica apenas ao atendimento do ensino médio integral e regular. 
            </p>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="content">
        <div class="title-wrapper-features">
          <h3>Recomendados</h3>
        </div>
        <div class="feature-card-block">
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="#" alt="" />
            <div class="feature-text-content">
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      include("footer.php");
    ?>

    <!-- Modal -->

    <div class="modal" tabindex="-1" id="exampleModal">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <div class="card">
                    <a href="../pages/index-cadastro.php">Cadastrar</a>
                    <a href="../pages/index_aluno.php">Lista de Usuarios</a>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <!-- Nosso JS-->
    <script src="../script/carrossel"></script>
  </body>
</html>