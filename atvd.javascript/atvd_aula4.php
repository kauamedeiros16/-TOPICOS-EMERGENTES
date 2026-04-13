<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Exercício Regex</title>
</head>
<body>

  <h3>Validação</h3>

  CPF: <input id="cpf"><br><br>
  Senha: <input id="senha" type="password"><br><br>
  Email: <input id="email"><br><br>

  <button onclick="validar()">Validar</button>

  <script>
    function validar() {

      let cpf = document.getElementById("cpf").value;
      let senha = document.getElementById("senha").value;
      let email = document.getElementById("email").value;

     
      let cpfValido = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/.test(cpf);

    
      let senhaValida = /^(?=.*[A-Z]).{8,}$/.test(senha);

   
      let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      let emailValido = regexEmail.test(email);

      alert(
        "CPF: " + (cpfValido ? "OK" : "Erro") + "\n" +
        "Senha: " + (senhaValida ? "OK" : "Erro") + "\n" +
        "Email: " + (emailValido ? "OK" : "Erro")
      );
    }
  </script>

</body>
</html>