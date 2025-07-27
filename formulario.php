<?php
include "cabecalho.php";
?>
// Formulário para entrada de dados, com campos para nome e email, nãosei formatar no bootstrap e css.
<div class="form-container">
    <h2>Digite seus dados</h2>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
</div>
//tentei fazer um button que ao clicar envia os dados, não funcionou muito bem, mas não sei como fazer isso com bootstrap e css.
<div class="form-container">
    <button onclick="submitForm()">Enviar</button>
</div>  
<script>
function submitForm() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;

    if (nome && email) {
        alert("Formulário enviado com sucesso!");
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}
</script>
<?php include "rodape.php"; ?>