<?php

$usuarios = [
    "admin" => ["senha" => "1234", "cargo" => "Administrador"],
    "kaua" => ["senha" => "abcd", "cargo" => "Usuário Comum"],
    "professor" => ["senha" => "senha123", "cargo" => "Professor"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    echo "<h2>Resultado do Login</h2>";

    if (isset($usuarios[$usuario]) && $usuarios[$usuario]["senha"] == $senha) {

        $cargo = $usuarios[$usuario]["cargo"];
        echo "Bem-vindo, $usuario!<br>";
        echo "Seu cargo é: $cargo";

    } else {
        echo "Erro: Nome de usuário ou senha incorretos.";
    }

} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">

    <label>Nome de Usuário:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>

</form>

</body>
</html>
<?php
}
?>