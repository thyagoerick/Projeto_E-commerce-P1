<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="../CSS/style.css" />
    <!-- RegEx e Valida JS-->
    <script lang="javascript" src="../JS/valida.js"></script>
    <script lang="javascript" src="../JS/regEx.js"></script>

    <title>Esqueci a Senha</title>
  </head>
  <body class="body-password">
    <form action="">
    <div class="container p-5 my-3 col-md-6 f-password">
      <h2>Esqueceu a senha?</h2>
      <div class="row">
        <div class="form-group col-md-12">
          <h4>Informe seu endereço de E-mail para recuperar</h4>
          <div>
            <br />
            <h4 for="email" class="">E-mail:</h4>
            <input
              type="email"
              class="form-control"
              id="inputEmailCad"
              placeholder="Digite o seu email"
              size="60"
              required
              title="Informe um email correto."
            />
          </div>
          <div>
            <br />
            <button
              type="submit"
              class="btn f-button"

            >
              Testar E-mail
            </button>
          </div>
          <br />
          <div style="text-align: center">
            <img class="col-md-12 center"
            src="../IMGs/page_images/Email-capture-bro.svg"
            alt="E-mail Enviado"
            style="max-height: 300px"
          />
            <button
              type="submit"
              class="btn f-button col-md-4 center"
              data-toggle="modal"
              data-target="#enviarModal"

            >
              Enviar
            </button>


          </div>

      </div>
    </div>
  </form>
    <!-- Modal -->
    <div
      class="modal fade"
      id="enviarModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="enviarModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enviarModalLabel">Aviso</h5>
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
            A nova senha foi enviada para seu endereço de E-mail.
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <script>
      function validar(){
     //Valida E-mail
     if(!regEmail.test(inputEmailLog.value)){
        alert("Informe o email cadastrado!");
		inputEmailLog.focus();
		inputEmailLog.value="";
		return false;
     }
    }
    </script>



  </body>
</html>
