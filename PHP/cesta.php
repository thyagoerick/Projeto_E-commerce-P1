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
  <title>ELANEON • Cesta</title>
  <!--Fonte da Cliente-->
  <link rel="stylesheet" href="../CSS/fonts.css"/>
  <!--Nosso CSS-->
  <link rel="stylesheet" href="../CSS/style.css" />
  <!--Ícone-->
  <link rel="icon" type="image/png" href="../IMGs/icone-site.png">
</head>
<body  style="background: #336548;">
<!--------------------------------NAVBAR-------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-center bg-img ">
        <a class="navbar-brand" href="../HTML/vitrine.html"><h4 class="colorTxtNav">Brechó <myFont>ELANEON</myFont></h4></a>

        <button class="navbar-toggler text-white btnHamburguer" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-end" id="conteudoNavbarSuportado">
            <form action="../HTML/busca.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" id="Buscar" aria-label="Buscar" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-light" type="submit" id="button-addon2" onclick="buscar();">OK</button>
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
            <a class="nav-link colorTxtNav linkNav" href="#">
                Cesta <svg xmlns="http://www.w3.org/2000/svg" height="20px" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16" style="padding-bottom: 4px">
                    <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
                </svg> /
            </a>
        </li>
    </ul>
    </div>    
<!--------------------------------FIM NAVBAR-------------------------------->
    <div class="row justify-content-center mt-5">
        <div class="col-md-8" style="margin-bottom: 40px;">
        <div class="card w-100">
            <div class="card-header menu text-center font-weight-bold">
            Cesta de Compras
            </div>
            <div class="card-body">
            <table class="table table-sm p-5 text-center">
                <thead>
                <div class="h5 m-4 text-center">Informação dos Produtos</div>
                </thead>
                <tbody>
                <tr>
                    <td>Produto</td>
                    <td>Quantidade</td>
                    <td>Valor</td>
                </tr>
                <tr>
                    <td class="h5">
                    <div class="pay-fin-img my-3">
                        <img
                        class="card-img-top"
                        src="..\IMGs\PECAS\Verao (6).jpeg"
                        style="height: 80px; width: 80px"
                        alt="Card image cap"
                        />
                    </div>

                    </td>
                    <td class="align-middle">1</td>
                    <td class="align-middle">R$120,00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right font-weight-bold">Envio: R$25,00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="text-right text-danger font-weight-bold">
                    Total: R$145,00
                    </td>
                </tr>
                </tbody>
                <tfoot></tfoot>

                <table class="table table-sm text-center">
                <tbody>
                    <div class="h5 text-center p-4">Informações de Envio</div>
                    <tr>
                    <tr>
                    <td class="font-weight-bold">Nome</td>
                    <td colspan="8">Jonas José Junior</td>
                    </tr>
                    <td class="font-weight-bold">E-mail</td>
                    <td colspan="8">jonas-jose@gmail.com</td>
                    </tr>
                    <tr>
                    <td class="font-weight-bold">Cartão</td>
                    <td colspan="8">254 667 333 ***</td>
                    </tr>
                    <tr>
                    <td class="font-weight-bold">Endereço</td>
                    <td colspan="8">Rua das Flores, 142</td>
                    </tr>
                    <tr>
                    <td class="font-weight-bold">
                        <br />
                        <a href="vitrine.html">
                        <button  class="btn btn-outline-danger">Adicionar +</button>
                        </a>
                    </td>
                    <td colspan="8">
                        <br />
                        <button
                        type="submit"
                        class="btn btn-success final-line f-button col-md-4 center"
                        data-toggle="modal"
                        data-target="#finalizarModal"
                        
                      >
                        Finalizar
                      </button>
                     
                    </td>
                    </tr>

                    
                </tbody>
                <br />
                <tfoot></tfoot>
                </table>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="finalizarModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="finalizarModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="finalizarModalLabel">Aviso</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Pedido finalizado com suscesso!
          </div>
          <div class="modal-footer">
            <a href="vitrine.html">
              <button
                type="button"
                class="btn btn-secondary"              
              >
                Fechar
              </button>
            </a>
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