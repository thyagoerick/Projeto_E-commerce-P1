<?php include '../PHP/includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>ELANEON • Cesta</title>
</head>
<body  style="background: #336548;">

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

    <?php include '../PHP/includes/footer.php'; ?>
    
</body>
</html>