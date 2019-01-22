<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baratão Tecnologia</title>

  <!--Use o Bootstrap local, caso não tenha conexão.

  <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/modern-business.css" rel="stylesheet">-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand btn btn-outline-secondary" href="index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class ="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="about.html">Sobre nós</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="services.html">Serviços</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contato</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProdutos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produtos
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownHardware">
                <a class="dropdown-item" href="hardware.html">Hardware</a>
                <a class="dropdown-item" href="armazenamento.html">Armazenamento</a>
                <a class="dropdown-item" href="monitores.html">Monitores</a>
              </div>

            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other Pages</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="faq.html">FAQ</a>
              </div>-->
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item active" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <!--<a class="dropdown-item" href="blog-post.html">Blog Post</a>-->
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="blog-home-1.html">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
            <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 1%;z-index:999;">Login</button>
            <a class="btn btn-secondary" href="formularioDeCadastro.html  " role="button" style="margin-left: 1%;z-index:999;">Cadastrar</a>       
          </div>
        </div>

      <!--Área de Login-->

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
             <form action="verifLog.php" method="post" name="NloginForm" id="Ilogin" onsubmit="return verifDados()">
               <div class="form-group">
                 <label for="Iemail">Endereço de email</label>
                  <input type="email" class="form-control" name="Nemail" id="Iemail" aria-describedby="emailHelp" placeholder="Seu email">
                  <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                 </div>
               <div class="form-group">
                 <label for="Isenha">Senha</label>
                   <input type="password" class="form-control" name="Nsenha" id="Isenha" placeholder="Senha">
               </div>

               <div class="modal-footer">
                 <button type="submit" class="btn btn-success" data-target="#Ilogin">Entrar</button>
                 <button type="close" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </form>
          </div>
         </div>
        </div>
      </div>
    </nav>

  <!--Primeiro Slide-->
    <header>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid mx-auto d-block" src="imagens/remake3.jpg" style="max-width:100%;"  alt="Primeiro Slide">
          </div>
        </div>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">
      <h1 class="my-4"></h1> <br>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Hardware</h4>
            <div class="card-body">
              <p class="card-text">Hardware é a parte física de um computador, é formado pelos componentes eletrônicos, como por exemplo, circuitos de fios e luz, placas, utensílios, correntes, e qualquer outro material em estado físico, que seja necessário para fazer com o que computador funcione...</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Armazenamento</h4>
            <div class="card-body">
              <p class="card-text">Existem várias unidades de armazenamento disponíveis. A mais comum é a unidade de disco rígido que estão incluídos na maioria dos computadores e que entre outras coisas, armazena a informação que permite iniciar o sistema e os programas, além de arquivos de texto, imagens áudio e vídeo do usuário...</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Monitores</h4>
            <div class="card-body">
              <p class="card-text">O monitor é um dispositivo de saída para o computador que mostra em sua tela os resultados de suas operações. O monitor é conhecido como a tela do computador e é um periférico que se conecta ao computador para poder visualizar as ações e processos executados... </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Leia mais</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Portfolio Heading</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project One</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Three</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->

      <!-- /.row -->

      <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-4 bg-dark ">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Baratão 2019</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->

  <!--Use o Bootstrap local, caso não tenha conexão.

  <script src="resources/jquery/jquery.min.js"></script>
  <script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
</html>
