<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Fácil</title>
    <!-- Incluir folha de estilo CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Incluir cabeçalho -->
    <?php include('../templates/header.php'); ?>

    <div class="container">
        <h2>Login</h2>
        <form action="processa_login.php" method="post">
            <label for="username">Nome de usuário:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Entrar</button>
        </form>
        <p>Esqueceu sua senha? <a href="recuperar_senha.php">Recupere aqui</a></p>
        <p>Não possui uma conta? <a href="criar_conta.php">Crie sua conta</a></p>
        <p><a href="login_admin.php">Login Administrador</a></p>
    </div>

    <!-- Incluir rodapé -->
    <?php include('../templates/footer.php'); ?>
</body>
</html>
