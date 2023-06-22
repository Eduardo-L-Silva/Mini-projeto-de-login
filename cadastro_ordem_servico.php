<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      p {
        text-align: justify;
      }
    </style>
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
      <h5 class="blue-text lighten-5">Gerar ordem de Serviço</h5>
      <div class="row">
        <div class="col s12">
          <table>
            <thead>
              <th>ID</th>
              <th>Nome</th>
              <th>CPF</th>
            </thead>
            <tbody>
              <?php
              include './conexao.php';

              $id_pesquisa = isset($_GET['id']) ? $_GET['id'] : null;

              if ($id_pesquisa) {
                $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
                $resultado = mysqli_query($conn, $sql);
                
                if ($resultado && mysqli_num_rows($resultado) > 0) {
                  while ($dados = mysqli_fetch_array($resultado)) {
                    echo '
                    <tr>
                      <td>' . $dados['id'] . '</td>
                      <td>' . $dados['nome'] . '</td>
                      <td>' . $dados['cpf'] . '</td>
                    </tr>
                    ';
                  }
                } else {
                  echo "<tr><td colspan='3'>Cliente não encontrado</td></tr>";
                }
              } else {
                echo "<tr><td colspan='3'>ID não fornecido na URL</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <h5 class="blue-text lighten-5">Dados do Veículo:</h5>
      <form action="cadastro_ordem_servico.php?id=<?php echo $id_pesquisa; ?>" method="post">
        <div class="row">
          <div class="col s4">
            <label>Placa</label>
            <input type="text" name="placa">
          </div>
          <div class="col s6">
            <label>Nome do veículo</label>
            <input type="text" name="nome_veiculo">
          </div>
          <div class="col s4">
            <label>Marca</label>
            <input type="text" name="marca">
          </div>
        </div>

        <h4 class="red-text"><i class="material-icons">assignment_ind</i><label class="red-text">Dados da Ordem de Serviço</label></h4>

        <div class="row">
          <div class="col s6">
            <label>Descrição 01:</label>
            <input type="text" name="descricao01">
          </div>
          <div class="col s4">
            <label>Valor 01:</label>
            <input type="text" name="valor01">
          </div>
        </div>
        <div class="row">
          <div class="col s6">
            <label>Descrição 02:</label>
            <input type="text" name="descricao02">
          </div>
          <div class="col s4">
            <label>Valor 02:</label>
            <input type="text" name="valor02">
          </div>
        </div>
        <div class="row">
          <div class="col s6">
            <label>Descrição 03:</label>
            <input type="text" name="descricao03">
          </div>
          <div class="col s4">
            <label>Valor 03:</label>
            <input type="text" name="valor03">
          </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">
          Cadastrar
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include './conexao.php';

      $id_pesquisa = isset($_GET['id']) ? $_GET['id'] : null;

      if ($id_pesquisa) {
        $sql = "SELECT * FROM cliente WHERE id='$id_pesquisa'";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
          $dados = mysqli_fetch_array($resultado);

          $nome_cliente = $dados['nome'];
          $cpf_cliente = $dados['cpf'];

          $placa = isset($_POST['placa']) ? $_POST['placa'] : '';
          $nome_veiculo = isset($_POST['nome_veiculo']) ? $_POST['nome_veiculo'] : '';
          $marca = isset($_POST['marca']) ? $_POST['marca'] : '';

          $descricao1 = isset($_POST['descricao01']) ? $_POST['descricao01'] : '';
          $valor1 = isset($_POST['valor01']) ? $_POST['valor01'] : '';
          $descricao2 = isset($_POST['descricao02']) ? $_POST['descricao02'] : '';
          $valor2 = isset($_POST['valor02']) ? $_POST['valor02'] : '';
          $descricao3 = isset($_POST['descricao03']) ? $_POST['descricao03'] : '';
          $valor3 = isset($_POST['valor03']) ? $_POST['valor03'] : '';

          $stmt = $conn->prepare("INSERT INTO ordem_servico (nome_cliente, cpf_cliente, placa, nome_veiculo, marca, descricao1, valor1, descricao2, valor2, descricao3, valor3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("sssssssssss", $nome_cliente, $cpf_cliente, $placa, $nome_veiculo, $marca, $descricao1, $valor1, $descricao2, $valor2, $descricao3, $valor3);

          if ($stmt->execute()) {
            echo "Cadastro efetuado<br>";
          } else {
            echo "Erro ao cadastrar";
          }

          $stmt->close();
        } else {
          echo "Cliente não encontrado";
        }
      } else {
        echo "ID não fornecido na URL";
      }

      $conn->close();
    }
    ?>

<?php
    include './includes/footer.php';
    ?>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
