<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Formulário com Máscaras</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    input { display: block; margin-bottom: 10px; padding: 5px; }
    .erro { color: red; font-size: 14px; }
  </style>
</head>
<body>

<h2>Formulário</h2>

<form onsubmit="return validarForm()">

  Nome Completo:
  <input type="text" id="nome">

  CPF:
  <input type="text" id="cpf" maxlength="14">

  Telefone:
  <input type="text" id="telefone" maxlength="15">

  Data de Nascimento:
  <input type="text" id="data" maxlength="10">

  CEP:
  <input type="text" id="cep" maxlength="9">

  Email:
  <input type="text" id="email">

  <button type="submit">Enviar</button>

  <p class="erro" id="erro"></p>

</form>

<script>

cpf.addEventListener("input", () => {
  cpf.value = cpf.value
    .replace(/\D/g, "")
    .replace(/(\d{3})(\d)/, "$1.$2")
    .replace(/(\d{3})(\d)/, "$1.$2")
    .replace(/(\d{3})(\d{1,2})$/, "$1-$2");
});

telefone.addEventListener("input", () => {
  telefone.value = telefone.value
    .replace(/\D/g, "")
    .replace(/(\d{2})(\d)/, "($1) $2")
    .replace(/(\d{5})(\d)/, "$1-$2");
});

data.addEventListener("input", () => {
  data.value = data.value
    .replace(/\D/g, "")
    .replace(/(\d{2})(\d)/, "$1/$2")
    .replace(/(\d{2})(\d)/, "$1/$2");
});

cep.addEventListener("input", () => {
  cep.value = cep.value
    .replace(/\D/g, "")
    .replace(/(\d{5})(\d)/, "$1-$2");
});

function validarForm() {

  let erro = "";
  let regexNome = /^[A-ZÀ-Ý][a-zà-ÿ]+(\s[A-ZÀ-Ý][a-zà-ÿ]+)+$/;
  let regexCPF = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
  let regexTelefone = /^\(\d{2}\)\s\d{5}-\d{4}$/;
  let regexData = /^\d{2}\/\d{2}\/\d{4}$/;
  let regexCEP = /^\d{5}-\d{3}$/;
  let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  

if (nome.value.trim() === "") {
  erro += "Nome é obrigatório<br>";
} else if (!regexNome.test(nome.value)) {
  erro += "Digite nome e sobrenome com iniciais maiúsculas<br>";
}

  if (!regexCPF.test(cpf.value)) {
    erro += "CPF inválido<br>";
  }

  if (!regexTelefone.test(telefone.value)) {
    erro += "Telefone inválido<br>";
  }

  if (!regexData.test(data.value)) {
    erro += "Data inválida<br>";
  } else {
    let partes = data.value.split("/");
    let dia = parseInt(partes[0]);
    let mes = parseInt(partes[1]) - 1;
    let ano = parseInt(partes[2]);

    let dataDigitada = new Date(ano, mes, dia);
    let hoje = new Date();
    hoje.setHours(0,0,0,0);

    if (dataDigitada > hoje) {
      erro += "Data de nascimento não pode ser no futuro<br>";
    }
  }

  if (!regexCEP.test(cep.value)) {
    erro += "CEP inválido<br>";
  }

  if (!regexEmail.test(email.value)) {
    erro += "Email inválido<br>";
  }

  if (erro !== "") {
    document.getElementById("erro").innerHTML = erro;
    return false;
  }

  alert("Formulário enviado com sucesso!");
  return true;
}

</script>

</body>
</html>