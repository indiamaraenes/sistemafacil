<?php
$servername = "localhost";  // O endereço do servidor, normalmente localhost
$username = "root";         // O nome de usuário do banco de dados, geralmente root no XAMPP
$password = "";             // A senha do banco de dados, geralmente vazia no XAMPP por padrão
$database = "sistema_facil";  // O nome do banco de dados que você criou

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida";

// Fechar conexão
$conn->close();

// http://localhost/sistemafacil/include/conexao.php