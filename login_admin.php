<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador - Sistema Fácil</title>
    <!-- Incluir folha de estilo CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Incluir cabeçalho -->
    <?php include('../templates/header.php'); ?>
    
    <nav>
        <ul>
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <!-- Adicione mais itens de menu conforme necessário -->
            <li><a href="criar_conta.php">Crie sua conta</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="login_admin.php">Administrador</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Login Administrador</h2>
        <form action="processa_login_admin.php" method="post">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <!-- Incluir rodapé -->
    <?php include('../templates/footer.php'); ?>
</body>
</html>
