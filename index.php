<?php
//importando o arquivo config.php para cá
require_once('config.php')
?>

<?php
  // definindo as variáveis
      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $nascimento = $_POST['nascimento'];
      $CPF = $_POST['CPF'];
      $telefone = $_POST['telefone'];
      $email = $_POST['email'];
      $endereco = $_POST['endereco'];
      $numero = $_POST['numero'];

      $conn = new mysqli('localhost', 'root', '', 'cadastrodeclientes');
      //testando o banco de dados 
      if($conn->connect_error){
          die('A conexão falhou : '.$conn->connect_error);
      }
      else{
          $stmt = $conn->prepare("insert into registration(nome, sobrenome, nascimento, CPF, telefone, email, endereco, numero) values (?,?,?,?,?,?,?,?)");
          $stmt->bind_param("ssiiissi", $nome, $sobrenome, $nascimento, $nascimneto, $CPF, $telefone, $email, $endereco, $numero);
          $stmt->execute();
          echo "registro feito com sucesso";
          $stmt->close();
          $conn->close();
      } 