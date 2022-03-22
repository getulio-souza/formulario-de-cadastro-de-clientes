<?php
//importando o arquivo config.php para cá
require_once('config.php')
?>

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

      //configuarndo o db object a partir das variáveis definidas 
      $sql = "INSERT INTO users(nome, sobrenome, nascimento, CPF, telefone, email, endereco, numero) VALUES (?,?,?,?,?,?,?,?)";
      $stmtinsert = $db->prepare($sql); 
      $result = $stmtinsert->execute([$nome, $sobrenome, $nascimento, $CPF, $telefone, $email, $endereco, $numero]);
      
      if($result){
          echo 'Dados salvos com sucesso.';
      }
      else{
          echo 'Houve um erro ao salvar os dados.';
      }
  }
?>