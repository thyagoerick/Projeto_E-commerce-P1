<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    <!-- Bootstrap Icons CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--jQuery 3.6.0-->
    <script lang="javascript" src="/JS/jquery-3.6.0.js"></script>
    <!--jQuery UI 1.13-->
    <script lang="javascript" src="/JS/jquery-ui.js"></script>
  <!--Fonte da Cliente-->
  <link rel="stylesheet" href="../CSS/fonts.css">
  <!--Nosso CSS-->
  <link rel="stylesheet" href="../CSS/style.css">
  <!--Ícone-->
  <link rel="icon" type="image/png" href="../IMGs/icone-site.png">
  <!-- RegEx e Valida JS-->
  <script lang="javascript" src="../JS/valida.js"></script>
  <script lang="javascript" src="../JS/regEx.js"></script>
</head>
<body>
<!--------------------------------NAVBAR-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-img ">
        <a class="navbar-brand" href="../PHP/vitrine.php"><h4 class="colorTxtNav">Brechó <myFont>ELANEON</myFont></h4></a>

        <button class="navbar-toggler text-white btnHamburguer" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <form action="../PHP/busca.php" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" id="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-light" type="submit" id="button-addon2" onclick="buscar();">OK</button>
                    </div>
                  </div>                
                </div>
            </form>
            <a href="../PHP/loginEcadastro.php" class="colorTxtNav linkSVG">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg><small>Entrar/Cadastrar</small>
            </a>
        </div>
    </nav>  
    <div> 
    <ul class="nav justify-content-center menu ">
      <li class="nav-item">
        <a class="nav-link colorTxtNav linkNav" href="../PHP/sobre.php">Sobre nós 
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16" style="padding-bottom: 4px">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
          </svg> /</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle colorTxtNav linkNav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Peças  
          <svg xmlns="http://www.w3.org/2000/svg" height="20px"  fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
          </svg> /</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Primavera</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Verão</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Inverno</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Para dormir</a>
        </div>
    </li>
        <li class="nav-item">
          <a class="nav-link colorTxtNav linkNav" href="../PHP/cesta.php">
              Cesta <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16" style="padding-bottom: 4px">
                  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
              </svg> /
          </a>
      </li>
    </ul>
    </div>    
<!--------------------------------FIM NAVBAR-------------------------------->
</body>
</html>