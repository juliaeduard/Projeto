<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "dudamonteirinho011@gmail.com";
<<<<<<< HEAD
    $assunto = "Coleta de dados - Inteliogia";
=======
    $assunto = "Formulário Pet's Word";
>>>>>>> 0c00302cefb59cedb674104d18ded7935468ab2b

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: dudamonteirinho011@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("Formulário enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o formulário!");
    }

?>