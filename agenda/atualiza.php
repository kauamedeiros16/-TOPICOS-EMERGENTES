<html>
    <h1>Editar contato</h1> 
<link rel="stylesheet" href="style.css">

</html>

<?php
include('conexao.php');

$id = $_GET['id'];

$sql= "SELECT *FROM contatos WHERE id= $id";

$resultado = mysqli_query($conexao,$sql);

if (mysqli_num_rows($resultado)== 1){
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "contato não encontrado.";
    exit;
}

if(isset($_POST['atualizar'])){
    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST ['endereco'];
    $novo_fone = $_POST ['telefone'];

    $sql2 = "UPDATE contatos SET nome = '$novo_nome', endereco = '$novo_endereco', telefone = '$novo_fone' WHERE id = $id";

if(mysqli_query($conexao,$sql2)) {
    echo "<h2>contato foi atualizado com sucesso!</h2>";
    echo "<a href = 'index.php'>VOLTAR</a>";
    exit;
}

else {
echo "<h2> erro ao atualizar contato." . mysqli_error($conexao);
echo "<a href= 'index.php'>VOLTAR</a>";


}
}

?>
<form method = "POST" >
    nome: <input type="text" name="nome" value="<?php echo $contato ['nome'];?>"><br><br>
   endereco: <input type="text" name="endereco" value="<?php echo $contato ['endereco'];?>"><br><br>
   telefone: <input type="text" name="telefone" value="<?php echo $contato ['telefone'];?>"><br><br>

   <input type="submit" name="atualizar" value="atualizar">
</form>