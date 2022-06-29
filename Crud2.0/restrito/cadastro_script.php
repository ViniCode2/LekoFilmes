<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LekoFilmes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                             <?php       
                            
                             if($_POST){
                                 include 'action/conexao.php'; 
                
                                 $nome = $_POST['nome'];
                                 $cpf = $_POST['cpf'];
                                 $email = $_POST['email'];
                                 $senha = $_POST['senha'];
                                 $endereco = $_POST['endereco'];
                             
                                 $sql = "INSERT INTO cinema (nome, cpf, email, senha, endereco) VALUES ('$nome', '$cpf', '$email', '$senha', '$endereco')";
             
                                if($conn->query($sql) === TRUE){
                                    echo "<p> Novo registro inserido</p>";
                 
                                }
                                 else {
                                    echo "Erro " . $sql . '' .$conn->connect_error; 
                                }
             
                                    $conn -> close();
                                }
                             
                             ?>
                          <a href="pgindex.php"><button type="button" class="btn btn-primary">Voltar</button></a>
                
                
</div>
</div>
</div>  
  -  
</body>
</html>