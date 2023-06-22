<?php
include './conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Executar a consulta para remover a ordem de serviço com base no ID
    $sql = "DELETE FROM ordem_servico WHERE id = $id";
    $resultado = mysqli_query($conn, $sql);

    if ($resultado) {
        // Remoção bem-sucedida, redirecionar de volta para a página atual
        $previous_page = $_SERVER['HTTP_REFERER'];
        header("Location: $previous_page");
        exit();
    } else {
        echo 'Erro ao remover a ordem de serviço.';
    }
}

mysqli_close($conn);
?>
