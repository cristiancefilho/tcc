<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogo</title>
  
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

  <?php
    include("header.php");
  ?>

    <section class="catalog" id="catalog">
      <div class="content">
        <div class="title-wrapper-catalog">
          <h3>Catalogo</h3>
        </div>
        <div class="filter-card">
          <input
            type="text"
            class="search-input"
            placeholder="Pesquise aqui o livro Desejado"
          />
          <button class="search-button">Pesquisar</button>
        </div>
        <div class="card-wrapper">
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Um Pequeno Principe</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>E o Vento Levou</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>É Assim que Começa</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Uma Segunda Chance</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Paciente Silenciosa</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Corte de Névoa e Fúria</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>História Secreta</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Jogos Vorazes</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/car-card.png" alt="" />
            <div class="card-content">
              <h3>Castelo de Vidro</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repellendus.
              </p>
              <button type="button">Entrar</button>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php
      include("footer.php");
    ?>




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
  </body>
</html>