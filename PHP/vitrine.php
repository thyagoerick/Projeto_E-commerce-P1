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
  <title>ELANEON</title>
  <!--Fonte da Cliente-->
  <link rel="stylesheet" href="../CSS/fonts.css">
  <!--Nosso CSS-->
  <link rel="stylesheet" href="../CSS/style.css">
  <!--Ícone-->
  <link rel="icon" type="image/png" href="../IMGs/icone-site.png">
</head>
<body>
<!--------------------------------NAVBAR-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-img">
        <a class="navbar-brand" href="../HTML/vitrine.html"><h4 class="colorTxtNav">Brechó <myFont>ELANEON</myFont></h4></a>

        <button class="navbar-toggler text-white btnHamburguer" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <form action="../HTML/busca.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" id="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <a  href="../HTML/busca.html">
                      <button class="btn btn-outline-light" type="submit" id="button-addon2" onclick="buscar();">OK</button>
                      </a>
                    </div>
                  </div>                
                </div>
            </form>
            <a href="../HTML/loginEcadastro.html" class="colorTxtNav linkSVG">
                <svg xmlns="http://www.w3.org/2000/svg" height="30px" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg><small>Entrar/Cadastrar</small>
            </a>
        </div>
    </nav>
    <div> 
    <ul class="nav justify-content-center menu ">
        <li class="nav-item">
          <a class="nav-link colorTxtNav linkNav" href="#">Sobre nós 
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
              <a class="dropdown-item" href="#pane-1" data-toggle="list">Primavera</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#pane-2" data-toggle="list">Verão</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#pane-3" data-toggle="list">Inverno</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#pane-4" data-toggle="list">Para dormir</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link colorTxtNav linkNav" href="../HTML/cesta.html">
                Cesta 
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16" style="padding-bottom: 4px">
                    <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                </svg> /
            </a>
        </li>
    </ul>
    </div> 
<!--------------------------------FIM NAVBAR-------------------------------->

<body>
    <div class="jumbotron jumbotron-fluid jumbotron-bg d-flex align-items-end">
      <div class="container text-center">
        <div class="bg-lighter p-3">
          <h1 class="text-warning" style="font-family: Georgia, serif">
            Veja nossos produtos
          </h1>
          <p
            class="lead font-weight-light text-light"
            style="font-size: 14px"
          >
            Visite o melhor que você pode encontrar
          </p>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div
              class="list-group list-group-flush sticky-top"
              style="top: 5px; font-family: Didot, serif"
            >
              <a
                class="
                  list-group-item list-group-item-action
                  text-secondary
                  active
                "
                href="#pane-1"
                data-toggle="list"
              >
                Primavera</a
              >
              <a
                class="list-group-item list-group-item-action text-secondary"
                href="#pane-2"
                data-toggle="list"
              >
                <!-- <i class="fa fa-star-o"></i>-->Verão
              </a>
              <a
                class="list-group-item list-group-item-action text-secondary"
                href="#pane-3"
                data-toggle="list"
              >
                <!-- <i class="fa fa-star-o"></i>-->Inverno</a
              >
              <a
                class="list-group-item list-group-item-action text-secondary"
                href="#pane-4"
                data-toggle="list"
                >Para dormir </a
              >
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="pane-1">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (4).jpeg"
                        alt="Card image cap"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title ">Produto 1</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Inverno (1).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Inverno (2).jpeg"
                        alt="Card image cap"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Inverno (3).jpeg"
                        alt="Card image cap"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Produto 4</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\P_Dormir (1).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Produto 5</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\P_Dormir (2).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Produto 6</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="pane-2">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\P_Dormir (3).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Original</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (1).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Available</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (2).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Alteration</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (3).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Purpose</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (4).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Readable</h5>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing
                          elit. Donec finibus efficitur leo, eu efficitur
                          ligula finibus eget. Vivamus sit amet felis nec
                          lacus bibendum porta.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (5).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Essentially</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                            >Detalhes</a
                          ><a class="btn btn-outline-secondary" href="cesta.html"
                            >Comprar</a
                          >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="pane-3">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Primavera (6).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Original</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (1).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Available</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (2).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Alteration</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (3).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Purpose</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (4).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Readable</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (5).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Essentially</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="pane-4">
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (6).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Original</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (1).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Available</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (2).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Alteration</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (3).jpeg"
                        style="height: 250px"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Purpose</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (4).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Readable</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                            >Detalhes</a
                          ><a class="btn btn-outline-secondary" href="cesta.html"
                            >Comprar</a
                          >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="card text-center h-80 border-0 box-shadow">
                      <img
                        class="card-img-top box-img"
                        src="..\IMGs\PECAS\Verao (5).jpeg"
                        style="height: 250px"
                      />
                      <div class="card-body">
                        <h5 class="card-title">Essentially</h5>
                        <p class="card-text">
                          This is a wider card with supporting text below as a
                          natural lead-in to additional content. This content
                          is a little bit longer.
                        </p>
                        <div class="card-footer bg-white px-0">
                          <div class="btn-group btn-group-sm">
                            <a class="btn btn-outline-secondary" href="detalhe.html"
                              >Detalhes</a
                            ><a class="btn btn-outline-secondary" href="cesta.html"
                              >Comprar</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
     

    <footer id="footer">
      <div id="empresa" class="container">
        <a href="../HTML/vitrine.html">
          <img id="imgEmpresa" src="../IMGs/CONSULTA_SITE/LOGO-F.jpeg">
        </a>
        <p style="padding-top: 2%;"class="colorTxtW">
          © 2021 <myFont>ELANEON</myFont> - Adriano e Thyago
        </p>
      </div>

      <div id="devs" class="container colorTxtW">
        <svg class="svg" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg>
        <p>
        <a class="linkNav" href="https://github.com/Sancho777">
          Adriano Dev
        </a>
        &
        <a class="linkNav" href="https://github.com/thyagoerick">
          Thyago Dev
        </a>
      </p>
      </div>

    </footer>
</body>
</html>