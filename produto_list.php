<?php

include "./crud.php";

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $produtos = produtoFindByName($_GET['txtNome']) ;
}
?>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand btn btn-outline-secondary" href="index.php"><i class="fas fa-home"></i> Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">Sobre nós</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="services.html">Serviços</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contatos</a>
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
            </li>
            <li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item active" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <!--<a class="dropdown-item" href="blog-post.html">Blog Post</a>-->
              </div>
            </li>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="faq.html">FAQ</a>
              </div>
            </li>-->
          </ul>
            <form class="form-inline" action="blog-home-1.html">
              <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Pesquisar</button>
            </form>
              <button type="button" class="btn btn-secondary my-2 my-sm-0" data-toggle="modal" data-target="#modalExemplo" style="margin-left: 1%;z-index:999;">Login</button>
               <a class="btn btn-secondary" href="#" role="button" style="margin-left: 1%;z-index:999;">Cadastrar</a>   
          </div>
       </div>
    <br><br>

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

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Blog Home One
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Produtos</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <?php
          foreach ($produtos as $linha) {
          ?>
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?= $linha['nome'] ?></h2>
              <p class="card-text"><?= $linha['descricao'] ?></p>
              <a href="#" class="btn btn-primary"><?= $linha['preco'] ?></a>
            </div>
            <div class="card-footer text-muted">
            <?= $linha['loja'] ?> - 
              <a href="#"><?= $linha['fabricante'] ?></a>
            </div>
          </div>
          <?php
            }
          ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>     
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-4 bg-dark">
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
