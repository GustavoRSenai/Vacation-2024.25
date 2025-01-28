<?php
    session_start();
    include('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM usuários WHERE nome='$nome' AND senha='$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $_SESSION['nome'] = $nome;
            header('location: index.php');
        } else {
            $error = "Usuário ou senha inválidos";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body >
    <main class="main_login">
        <div class="login">
            <h2>Login</h2>
            <form method="post" action="">
                <label for="nome"><p>Name:</p></label>
                <input type="text" name="nome" required>
                <label for="senha"><p>Password:</p></label>
                <input type="password" name="senha" required>
                <button type="submit" style="margin-bottom: 30px;">Entrar</button>
                <?php if (isset($error)) echo "<p class='messageerror'>$error</p>"; ?>
            </form>
        </div>
    </main>
</body>
    <div class="blur1">   
    </div>
</html>