<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mf = $_POST["media"];

    echo "<h2>Resultado</h2>";

    if ($mf <= 1.7) {

        echo "Média: $mf <br>";
        echo "Aluno NÃO pode realizar o exame.";

    } elseif ($mf >= 7.0) {

        echo "Média: $mf <br>";
        echo "Aluno APROVADO!";

    } else {

        $ne = (50 - (6 * $mf)) / 4;

        echo "Média: $mf <br>";
        echo "Aluno precisa fazer exame.<br>";
        echo "Nota necessária no exame: $ne";

    }

} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercício 3 - Nota do Exame</title>
</head>
<body>

<h2>Calcular Nota do Exame</h2>

<form method="POST">
    <label>Digite a média final (MF):</label><br>
    <input type="number" step="0.1" name="media" required><br><br>
    <button type="submit">Calcular</button>
</form>

</body>
</html>
<?php
}
?>