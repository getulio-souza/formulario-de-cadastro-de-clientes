<?php

  // definindo as variáveis
  if(isset($_POST['create'])){
      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $nascimento = $_POST['nascimento'];
      $CPF = $_POST['CPF'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];
      $numero = $_POST['numero'];

    echo $nome - " " - $sobrenome - " " - $nascimento - " " - $CPF - " " - $telefone - " " - $email - " " - $endereco - " " - $numero;
  }

?>


https://www.youtube.com/watch?v=Af0X_pEt7AY&t=813s&ab_channel=ProgramadorBR