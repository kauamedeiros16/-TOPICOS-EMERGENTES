<html><link rel="stylesheet" href="style.css"></html>
 <h1>Editar contato</h1>

<?php 

include ('conexao.php');

if(isset($_GET['id'])){

$id = $_GET ['id'];

echo "<script>confirm('deseja realmente excluir esse contato?')</script>";

$sql = "DELETE FROM contatos WHERE id = $id";

if(mysqli_query($conexao,$sql)){
    echo "<h2> contato excluido com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
    exit;
}
     else {
    echo "<h2> Erro ao excluir contato.</h2>" . mysqli_error($conexao);
    echo "<a href='index.php'>VOLTAR</a>";
        exit;
     }

    }
?>