<html>
  <head>    
    <title>contatos  - turma 31</title>
    </head>
    <body>
      <link rel="stylesheet" href="style.css">
      <h1 class="titulo"> Agenda Turma 31</h1>
        <h3> cadastro de Contato</h3>
        <form action="salvar.php" method="post">
          Nome: <input type="text" name="nome" required><br><br>
          Telefone: <input type="text" name="telefone" required><br><br>
          endereco: <input type="text" name="endereco" required><br><br>
          <input type="submit" value="cadastrar">
        </form>

        <h2>lista de contatos</h2>
  
<?php 
    include ("conexao.php");
         $sql = "SELECT * FROM contatos";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
               echo "<table border=5><tr><th>nome</th>
               <th>endereço</th> <th>telefone</th>";
              while($linha = mysqli_fetch_assoc($resultado)) {
                  
                echo "<tr><td>" . $linha ['nome']. "</td><td>" . 
                      $linha ['endereco'] . "</td><td>". $linha['telefone'] ."</td>
                      <td> <a href='atualiza.php?id=" . $linha ['id'] . "'>editar </a></td>
                       <td> <a href='excluir.php?id=" . $linha ['id'] . "'
                       onclick = 'return confirm(\"tem certeza que deseja excluir esse contato?\")'>
                       excluir </a></td></tr>"; 
                }
                  
            } else {
                echo "<h3>Nenhum contato encontrado!</h3>";
            }
     
?>
</body>
</html> 