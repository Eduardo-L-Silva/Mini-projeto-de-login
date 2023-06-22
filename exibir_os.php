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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <?php
    include './includes/menu.php';
    ?>

    <div class="container">
        <h5 class="blue-text lighten-4">Exibindo Ordem de Serviço</h5>

        <?php
        include './conexao.php';

        $sql = "SELECT * FROM ordem_servico";
        $resultado = mysqli_query($conn, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            echo '<div class="responsive-table">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome Cliente</th>
                            <th>CPF</th>
                            <th>Placa</th>
                            <th>Nome Veiculo</th>
                            <th>Marca</th>
                            <th>Descrição 1</th>
                            <th>Valor 1</th>
                            <th>Descrição 2</th>
                            <th>Valor 2</th>
                            <th>Descrição 3</th>
                            <th>Valor 3</th>
                            <th>Deletar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($dados = mysqli_fetch_array($resultado)) {
                    echo '<tr>
                        <td>' . $dados['id'] . '</td>
                        <td>' . $dados['nome_cliente'] . '</td>
                        <td>' . $dados['cpf_cliente'] . '</td>
                        <td>' . $dados['placa'] . '</td>
                        <td>' . $dados['nome_veiculo'] . '</td>
                        <td>' . $dados['marca'] . '</td>
                        <td>' . $dados['descricao1'] . '</td>
                        <td>' . $dados['valor1'] . '</td>
                        <td>' . $dados['descricao2'] . '</td>
                        <td>' . $dados['valor2'] . '</td>
                        <td>' . $dados['descricao3'] . '</td>
                        <td>' . $dados['valor3'] . '</td>
                        <td><a href="remover_ordem.php?id=' . $dados['id'] . '">Remover</a></td>
                    </tr>';
                }
            echo '</tbody>
            </table>
            </div>';
        } else {
            echo '<p>Nenhum cadastro de ordem de serviço encontrado.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>