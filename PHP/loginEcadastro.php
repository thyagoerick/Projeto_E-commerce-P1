<?php include '../PHP/includes/navbar.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>  
  <title>ELANEON • Login e Cadastro</title>
</head>
<body>
<section class="login" id="login">

          <div id="form">
            <form>
              <div class="form-group">
                <label>Email: </label>
                <input type="email" class="form-control" id="inputEmailLog" aria-describedby="emailHelp" placeholder="Digite o seu email" required>
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém. &#128521;</small>
              </div>
              <div class="form-group">
                <label for="inputSenhaLog">Senha: </label>
                <input type="password" class="form-control" id="inputSenhaLog" placeholder="Digite a sua senha" required>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkLog">
                <label>
                  Lembrar de mim
                </label>
              </div>
              <button class="btn btn-success" type="button" onclick="validar();">Entrar</button>
            </form>
            <p style="padding-top: 20px;">
              <a href="../HTML/esqueciSenha.html" class="linkCadastro">
                <small><u>Esqueci a senha</u></small>
              </a>
            </p>
          </div>
     
          <div id="linkImg">
            <h4 class="colorTxtG">
              <strong>Não possui cadastro?</strong>
            </h4>
           
              <a href="#cadastro" class="linkCadastro" id="clique" title="Clique 1x para mostrar a seção de cadastro."> 
                <img id="imgLogin" src="../IMGs/page_images/cadastro.png"/>
                <p>
                  Clique aqui para fazer.
               </p> 
              </a>
              <a name="cadastro"></a>
          </div>
</section>

<section id="cadastro" class="colorTxtR">
  <div class="container">
    <a class="colorTxtR linkCad" href="#cadastro" id="clique" title="Clique 2x para ocultar a seção de cadastro."><h3 class="myFont">NOVO CADASTRO:</h3></a>
    <form method="POST" action="../PHP/loginEcadastro.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNomeCad">Nome:</label>
          <input type="text" class="form-control" id="inputNomeCad" name="nomeCad" placeholder="Digite o seu nome" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmailCad">Email:</label>
          <input type="email" class="form-control" id="inputEmailCad" name="emailCad" placeholder="Digite o seu email" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputTellCad">Telefone:</label>
          <input type="text" class="form-control" id="inputTellCad" name="tellCad" placeholder="Digite seu número">
        </div>
        <div class="form-group col-md-6">
          <label for="inputCPFCad">CPF:</label>
          <input type="text" class="form-control" id="inputCPFCad" name="cpfCad" placeholder="Digite o seu CPF" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputSenhaCad">Senha:</label>
          <input type="password" class="form-control" id="inputSenhaCad" name="senhaCad" placeholder="Digite sua senha" title="A senha tem que conter: letras minúsculas e maiúsculas, caracteres especiais e números">
        </div>
        <div class="form-group col-md-6">
          <label for="inputConfSenCad">Confirmar senha:</label>
          <input type="password" class="form-control" id="inputConfSenCad" name="confSenhaCad" placeholder="Digite sua senha novamente">
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEndCad">Endereço:</label>
          <input type="text" class="form-control" id="inputEndCad" name="endCad" placeholder="Digite seu endereço" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputCompleCad">Complemento</label>
          <input type="text" class="form-control" id="inputCompleCad" name="compleCad" placeholder="Nº da Casa, Apartamento etc." required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCidadeCad">Cidade:</label>
          <input type="text" class="form-control" id="inputCidadeCad" name="cidadeCad" placeholder="Informe o nome da sua ciadade">
        </div>

<!--
        <div class="form-group col-md-2">
          <label for="inputEstadoCad">Estado:</label>
          <select id="inputEstadoCad" name="estadoCad" class="form-control" required >
            <option selected>Escolher...</option>
            <option>AC</option>
            <option>AL</option>
            <option>AP</option>
            <option>AM</option>
            <option>BA</option>
            <option>CE</option>
            <option>DF</option>
            <option>ES</option>
            <option>GO</option>
            <option>MA</option>
            <option>MT</option>
            <option>MS</option>
            <option>MG</option>
            <option>PA</option>
            <option>PB</option>
            <option>PR</option>
            <option>PE</option>
            <option>PI</option>
            <option>RJ</option>
            <option>RN</option>
            <option>RS</option>
            <option>RO</option>
            <option>RR</option>
            <option>SC</option>
            <option>SP</option>
            <option>SE</option>
            <option>TO</option>
          </select>
        </div>
-->

        <div class="form-group col-md-6">
          <label for="inputCEPCad">CEP:</label>
          <input type="text" class="form-control" id="inputCEPCad" name="cepCad" placeholder="Informe seu CEP">
        </div>
      </div>
      <button type="submit" class="btn btn-danger" name="btnCad" onclick="testar();">Cadastrar</button>
    </form>
    
    <!-- Chamando função PHP-->
    <?php 
      if(isset($_POST["btnCad"])) cadastrar();
    ?>
  </div>
</section>
<?php 
    function cadastrar(){
        $nomeCad = $_POST["nomeCad"];
        $emailCad = $_POST["emailCad"];
        $tellCad = $_POST["tellCad"];
        $cpfCad = $_POST["cpfCad"];
        $senhaCad = $_POST["senhaCad"];
        
        $endCad = $_POST["endCad"];
        $compleCad = $_POST["compleCad"];
        $cepCad = $_POST["cepCad"];
        $cidadeCad = $_POST["cidadeCad"];

        $con = new mysqli("localhost", "root", "", "elaneon");

        $sqlCli = "insert into cliente(nome, email, telefone,	senha, cpf) 
          values('$nomeCad', '$emailCad', '$tellCad', md5('$senhaCad'), '$cpfCad')";
        
        $sqlEnd =  "insert into endereco(logradouro, complemento, cidade, cep)
          values('$endCad','$compleCad','$cidadeCad', '$cepCad')";
        
        if (mysqli_query($con, $sqlCli) && mysqli_query($con, $sqlEnd)){
            echo "
            <script> 
                alert('Cadastro realizado com Sucesso!!!!');
           </script>";
        }else{
            echo "
            <script>
                alert('OCORREU ALGUM ERRO');
            </script>
            ";
        }
        mysqli_close($con);
    }
?>

<?php include '../PHP/includes/footer.php'; ?>

</body>

<script lang="javascript">
/*
$(document).ready() = sempre que este documento carregar vai executar a função passada como parâmetro para o .ready()
*/
$(document).ready(function() {
    $('#cadastro').hide();
});

$('#clique').click(function(){
  $('#cadastro').show();
});

$('.linkCad').dblclick(function(){
  $('#cadastro').hide();
});
</script>

</html>