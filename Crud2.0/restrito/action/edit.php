<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/cadastro_scrip.css"> <!-- LINK CSS -->
    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <div class="container">
      <div class="rol">
        <div class="col">

          <div class="img">
            <img src="../../img/Notifications/alteration.png" alt="" srcset="">
            <style>
              p{
                width: 200px;
              }
              img{
                margin-bottom: 20px;
              }
            </style>
          </div>

             <?php       
            
             if($_POST){
                 include 'conexao.php'; 

                 $id = $_POST['id'];
                 $nome = $_POST['nome'];
                 $cpf = $_POST['cpf'];
                 $email = $_POST['email'];
                 $senha = $_POST['senha'];
                 $endereco = $_POST['endereco'];
             
                  $sql = "UPDATE cinema SET nome = '$nome', cpf = '$cpf', email = '$email', senha = '$senha', endereco = '$endereco' WHERE id_pessoa = $id";
                 if($conn->query($sql)){
                 echo "<p> $nome registro alterado com sucesso!</p>";
                 
                 }
                 else {
                 echo "Erro " . $sql . '' .$conn->connect_error; 
                 }
             
                 $conn -> close();
             }
             ?>
          <a href="../pesquisar.php"><button type="button" class="btn btn-primary">Voltar</button></a>

        </div>
      </div>
    </div>
</body>
</html>