<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $paraa = "dudamonteirinho011@gmail.com";
    $assunto = "Formulário Pet's Word";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: dudamonteirinho011@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Formulário enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o formulário!");
    }

?>