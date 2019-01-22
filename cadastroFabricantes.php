<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro Baratão Tecnologia</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
      #txtCadastro {
        font-size: 250%;
        font-family: verdana;
        color: black;
        margin-top: 3%;
        text-align: center;
      }

      #btnSub {
        margin-top: 2%;
        margin-bottom: 3%;
      }

      body {
        background: #363636;
        background: -webkit-linear-gradient(to bottom, #CFCFCF, #363636);
        background: linear-gradient(to bottom, #CFCFCF, #363636);
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
    </style>

  </head>
  <body>
      <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="index.php"><b>Página Inicial</b></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contato</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Other Pages
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                    <a class="dropdown-item" href="faq.html">FAQ</a>
              </div>
                </li>
              </ul>
              <form class="form-inline" action="blog-home-1.html">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-secondary" type="submit">Pesquisar</button>
              </form>
            </div>

          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 2%;z-index:999;">Login</button>
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login de Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="InputEmail">Endereço de email</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                  </div>
                  <div class="form-group">
                    <label for="InputPassword">Senha</label>
                    <input type="password" class="form-control" id="InputPassword1" placeholder="Senha">
                  </div>
                </form>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success" data-target="#login">Entrar</button>
                  <button type="close" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </nav>
      </div>

        <header>
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="imagens/baratao.jpg" style="width: 90%; margin-left: 5%; margin-top: 2%; height:50%" alt="Primeiro Slide">
              </div>
            </div>
          </div>
        </header>

    <div class="conteiner">
      <div class="row">
      <form action="insertCadastroLogin.php" method="post" class="col-6 offset-3">
        <p id="txtCadastro">Cadastro pessoal</p>
        <div class="control-group form-group">
          <div class="controls">
            <label for="Inome">Nome do Fabricante</label>
            <input type="text" class="form-control" name="txtFabricante" id="Inome" required data-validation-required-message="Por favor, digite seu nome.">
          </div>
        </div>
        <button type="submit" class="btn btn-secondary" id="btnSub">Cadastrar</button>
        <button type="reset" class="btn btn-secondary" id="btnSub">Limpar</button>
      </form>
      </div>
    </div>
  </body>
</html>
