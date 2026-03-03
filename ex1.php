<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];

    echo "<h2>Resultado:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Endereco: " . $endereco . "<br>";

    if ($idade >= 18) {
        echo "Minha idade e: " . $idade . "<br>";
        echo "Sexo: " . $sexo . "<br>";
    } else {
        echo "Menor de idade<br>";
    }

    echo "<hr>";

} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 1</title>
</head>
<body>

<h2>Formulario</h2>

<form method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Endereco:</label><br>
    <input type="text" name="endereco" required><br><br>

    <label>Idade:</label><br>
    <input type="number" name="idade" required><br><br>

    <label>Sexo:</label><br>
    <input type="radio" name="sexo" value="Masculino" required> Masculino<br>
    <input type="radio" name="sexo" value="Feminino"> Feminino<br><br>

    <button type="submit">Enviar</button>

</form>

</body>
</html>
<?php
}
?>