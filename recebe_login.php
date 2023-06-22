<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "ordem_servico";

// Conectando ao banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$user = $_POST["user"];
$password = $_POST["password"];

// Usando prepared statements para evitar vulnerabilidades de SQL injection
$stmt = $conn->prepare("SELECT * FROM adm WHERE user = ? AND password = ?");
$stmt->bind_param("ss", $user, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Login bem-sucedido
    $_SESSION["user"] = $user;
    $stmt->close();
    $conn->close();
    header("Location: index.php");
    exit();
} else {
    // Nome de usuário ou senha incorretos
    $_SESSION["login_error"] = "Nome de usuário ou senha incorretos. Tente novamente.";
    $stmt->close();
    $conn->close();
    header("Location: login.php");
    exit();
}
?>
