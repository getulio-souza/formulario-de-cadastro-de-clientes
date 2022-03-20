<?php
// if(isset($_POST["email"]) && !empty($_POST["email"]){


    //definindo as variáveis
    $nome = addslashes($_POST["nome"]);
    $sobrenome = addslashes($_POST["sobrenome"]);
    $nascimento = addslashes($_POST["nascimento"]);
    $cpf = addslashes($_POST["cpf"]);
    $telefone = addslashes($_POST["telefone"]);
    $email = addslashes($_POST["email"]);
    $endereço = addslashes($_POST["endereço"]);
    $numero = addslashes($_POST["numero"]);
    $comentario = addslashes($_POST["comentario"]);
    

//programando quem vai receber o e-mail
$para = "getuliosouza@live.com";
$assunto = "cadastro de clientes";
$corpo = "nome: ".$nome. "\r\n".
        "sobrenome: ".$sobrenome. "\r\n".
        "email: ".$email. "\r\n".
        "comentario: ".$comentario. "\r\n".
        "nascimento: ".$nascimento. "\r\n".
        "cpf: ".$cpf. "\r\n".
        "telefone: ".$telefone. "\r\n".
        "endereço: ".$endereço. "\r\n".
        "numero: ".$numero. "\r\n".

        $header = "From:getuliosouza8@gmail.com". "\r\n"."reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();
        //checando se o e-mail foi enviado
        if(mail($para,$assunto,$corpo,$header)){
            echo("Email enviado com sucesso!");
        }
        else{
            echo("E-mail não pode ser enviado");
        }
    // }
        

?>