<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Exclusão de Cadastro</title>
  </head>
  <body>
      <div class="container">
          <div class="rol">
             <?php       
            
             if($_POST){
                 include 'action/conexao.php'; 

                 $id = $_POST['id'];
                 $nome = $_POST['nome'];
                
             
                  $sql = "DELETE FROM cinema WHERE id_pessoa = $id";
                 if($conn->query($sql)){
                 echo "<p> $nome, registro apagado com sucesso!</p>";
                 
                 }
                 else {
                 echo "Erro " . $sql . '' .$conn->connect_error; 
                 }
             
                 $conn -> close();
             }
             ?>
          <a href="pesquisar.php"><button type="button" class="btn btn-primary">Voltar</button></a>
</div>
</div>
</body>
</html>