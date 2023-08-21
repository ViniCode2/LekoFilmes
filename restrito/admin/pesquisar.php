<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/search.css"> <!-- LINK CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pesquisa</title>
  
</head>
<body>
<?php
    $pesquisa = $_POST['busca'] ??'';

include "action/conexao.php"; 
  $sql = "SELECT * FROM cinema WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);

  
?>
 
<nav class="navbar navbar-light bg-light">

  <div class="container-fluid">
    <form class="form-inline" action="pesquisar.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Pesquisa" name="busca" autofocus> 
      <button class="btn btn-outline-success" type="submit">Pesquisa</button>
    </form>
  </div>
  
</nav>
 

<div class="container">
<div class="membros">
<table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>       
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col">Endereço</th> 
            </tr>
        </thead>
        <tbody>
             <?php
                while($linha = mysqli_fetch_assoc($dados)){
                  $id_pessoa = $linha['id_pessoa'];
                  $nome = $linha['nome']; 
                  $cpf = $linha['cpf']; 
                  $email = $linha['email'];
                  $senha = $linha['senha'];
                  $endereco = $linha['endereco'];

                  echo "<tr>
                          <th scope='row'>$nome</th>
                          <td>$cpf</td>
                          <td>$email</td>
                          <td>$senha</td>
                          <td>$endereco</td>
                          <td width-150px>
                              <a href='cadastro_edit.php?id=$id_pessoa' class='btn btn-primary btn-sm'>Editar</a>
                              <td><a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' 
                              onclick=" .'"' ."pegar_dados($id_pessoa, '$nome')" .'"' .">Excluir</a></td>
                          </tr>";
                  }



			
			?>
        </tbody>
    </table>


</div>
</div>
 
<a href="index.php">Voltar</a>

<div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Área de exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="excluir.php" method="POST">
        <p>Deseja excluir</p>
      <p id="nome_pessoa">Nome pessoa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome_pessoa_1" value="">
        <input type="hidden" name="id" id="id_pessoa" value="">

        <input type="submit" class="btn btn-danger" value="Sim">
    </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function pegar_dados(id, nome) {
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('nome_pessoa_1').value = nome;
        document.getElementById('id_pessoa').value = id;
    }
 </script>
</body>
</html>
</body>
</html>