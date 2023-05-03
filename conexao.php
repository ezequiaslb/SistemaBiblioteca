<?php

// Define as informações de conexão com o banco de dados
$servername = "localhost";
$username = "ezequias";
$password = "[SYLlmSDrngBRroi";
$database = "biblioteca";

// Cria uma nova conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Conexão bem sucedida
    echo "";

?>
