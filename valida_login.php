<?php
// Inclui o arquivo de conexão com o banco de dados
include('conexao.php');

// Verifica se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os dados do formulário de login
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica o usuário no banco de dados
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verifica a senha do usuário
        if (password_verify($senha, $usuario['senha'])) {
            // Inicia a sessão e redireciona o usuário para a página principal
            session_start();
            $_SESSION['email'] == $usuario['email'];
            header('Location: home.php');
            exit;
        } else {
            // Senha incorreta
            $erro = "Senha incorreta.";
            header('Location: index.php');
            exit;
        }
    } else {
        // E-mail não encontrado
        $erro = "E-mail não encontrado.";
        header('Location: index.php');
        exit;
    }

    $stmt->close();
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

