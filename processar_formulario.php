<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupere os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  // Configurações para o email
  $destinatario = "devitaloferreira@gmail.com"; // Substitua pelo seu endereço de email
  $assunto = "Novo formulário de contato de $nome";

  // Crie o cabeçalho do email
  $cabecalho = "De: $email";

  // Envie o email
  $enviado = mail($destinatario, $assunto, $mensagem, $cabecalho);

  if ($enviado) {
    echo "Mensagem enviada com sucesso! Obrigado, $nome, por entrar em contato.";
  } else {
    echo "Desculpe, ocorreu um erro ao enviar a mensagem.";
  }
}
?>
