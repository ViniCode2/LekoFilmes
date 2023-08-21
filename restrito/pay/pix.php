<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="scripts.js" defer></script>
    <title>LekoFilmes</title>
</head>
<body>
   <h1>Formas de pagamento</h1>
   
   <?php
    $pesquisa = $_POST['busca'] ??'';

include "action/conexao.php"; 
  $sql = "SELECT * FROM cinema WHERE cpf LIKE '%$pesquisa%' LIMIT 1";

  $dados = mysqli_query($conn, $sql);



        // Selecionar o nome do usuário e dar um update no campo pix...


  
?>
 
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="form-inline" action="val_pagas1.php" method="POST">
      <input class="form-control me-2" type="search" maxlength="11" placeholder="Coloque seu CPF" id="pixInput" aria-label="Pesquisa" name="busca" autofocus 
      oninput="mascaraPix('pix')"> 
      <button class="btn btn-outline-success" type="submit">Procurar</button>
    </form>
  </div>

  
</nav>

 <script src="script.js">

 </script>
</body>
</html>