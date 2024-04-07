<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    $horario = $_POST['horario'];
    
    $para = 'dudamonteirinho011@gmail.com';
    $assunto = 'Novo formulário de contato do site';
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Telefone: $telefone\n";
    $mensagem_email .= "Horário para ligar: $horario\n\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";
    
    // Você pode adicionar mais headers se necessário
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    // Enviar o email
    if (mail($para, $assunto, $mensagem_email, $headers)) {
        echo 'Email enviado com sucesso!';
    } else {
        echo 'Ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.';
    }
}
?>
