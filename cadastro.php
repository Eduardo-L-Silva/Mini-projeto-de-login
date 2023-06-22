<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php
  include './includes/menu.php';
  ?>

  <div class="container">
    <h6 class="blue-text lighten-5">
      <i class="material-icons">group_add</i> Cadastro de Clientes
    </h6>
    <form action="recebe.php" method="post">
      <div class="row">
        <div class="input-field col s12 m6">
          <input id="nome" type="text" name="nome" required>
          <label for="nome">Nome:</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="cpf" type="text" name="cpf" required>
          <label for="cpf">CPF:</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="email" type="text" name="email" required>
          <label for="email">E-mail:</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="endereco" type="text" name="endereco" required>
          <label for="endereco">Endereço:</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="bairro" type="text" name="bairro" required>
          <label for="bairro">Bairro:</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="telefone" type="text" name="telefone" required>
          <label for="telefone">Telefone:</label>
        </div>
        <div class="col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">
            Cadastrar
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
  </div>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
