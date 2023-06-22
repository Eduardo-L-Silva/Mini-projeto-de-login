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

    <hr>
    <div class="container">
        <div class="row">
            <form action="exibir.php" method="post">
                <div class="input-field col s12 m6">
                    <label for="nome_pesquisa">Nome de pesquisa:</label>
                    <input type="text" name="nome_pesquisa" id="nome_pesquisa">
                </div>
                <div class="input-field col s12 m6">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
        <h6 class="blue-text lighten-5">Clientes cadastrados:</h6>
        <table class="responsive-table striped">
            <thead>
            <th>ID</th>
            <th>Nome</th>
            <th></th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            <?php
            include './conexao.php';
            $nome_pesquisa = @$_POST['nome_pesquisa'];

            $sql = "SELECT * FROM cliente WHERE nome LIKE '%" . $nome_pesquisa . "%'";
            $resultado = mysqli_query($conn, $sql);
            while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                <tr>
                    <td><?php echo $dados['id']; ?></td>
                    <td><?php echo $dados['nome']; ?></td>
                    <td>
                        <a href="detalhe.php?id=<?php echo $dados['id'] ?>">
                            <i class="material-icons prefix">format_list_bulleted</i>
                        </a>
                    </td>
                    <td>
                        <a href="cadastro_ordem_servico.php?id=<?php echo $dados['id'] ?>">
                            <i class="material-icons prefix" title="ADD OS">add_circle</i>
                        </a>
                    </td>
                    <td>
                        <a href="remover_cliente.php?id=<?php echo $dados['id'] ?>">
                            <i class="material-icons prefix" title="Remover Cliente">remove_circle</i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
