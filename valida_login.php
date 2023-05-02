<?php

// Conexão com o banco de dados
include('conexao.php');

// Recebe os dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verifica o usuário no banco de dados
$stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    // Verifica a senha do usuário
    if (password_verify($senha, $usuario['senha'])) {
        // Inicia a sessão e redireciona o usuário para a página principal
        session_start();
        $_SESSION['email'] = $usuario['email'];
        header('Location: principal.php');
        exit;
    } else {
        // Senha incorreta
        echo "Senha incorreta.";
    }
} else {
    // E-mail não encontrado
    echo "E-mail não encontrado.";
}

$stmt->close();

// Fecha a conexão com o banco de dados
$conn->close();

?>
