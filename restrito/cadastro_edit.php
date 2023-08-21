<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css"> <!-- LINK CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!-- LINK BOXICONS.COM -->
    <title>Página de Alteração</title>
</head>
<body>
    <?php
        include "action/conexao.php";

        $id = $_GET['id'] ??'';

        $sql = "SELECT * FROM cinema WHERE id_pessoa = $id";

        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>

<div class="logo">
    <a href="index.php"><img src="../img/logo-lekofilmes.png" alt="logo"></a>
</div> 

<section class="box">
    <div class="box_create">
    

        <div class="row">
        <h1>Alteração de cadastro</h1>
        <form action= "action/edit.php" method="POST">

            <div class="form-group">
                <i class='bx bxs-user login_icon' style='color:#fdf8f6' ></i>
                <input type="text" class="form-control" name="nome" required value=" <?php echo $linha['nome']; ?>"> 
            </div>

            <div class="form-group">
                <i class='bx bx-dock-right login_icon' style="color: #fdf8f6"></i>
                <input type="int" class="form-control" name="cpf" value=" <?php echo $linha['cpf']; ?>">
            </div>
            <div class="form-group">
                <i class='bx bxs-envelope login_icon' style='color:#fdf8f6'  ></i>
                <input type="email" class="form-control" name="email" value=" <?php echo $linha['email']; ?>">
            </div>
            <div class="form-group">
                <i class='bx bx-lock-alt login_icon' style='color:#fdf8f6'></i>
                <input type="password" class="form-control" name="senha" value=" <?php echo $linha['senha']; ?>">
            </div>
            <div class="form-group">
                <i class='bx bxs-home login_icon' style="color: #fdf8f6"></i>
                <input type="text" class="form-control" name="endereco" value=" <?php echo $linha['endereco']; ?>">
            </div>

            <div class="buttons">
                <div class="form-button">
                    <input type="submit" id="button" name="" value="Salvar alterações">  
                    <input type="hidden" name="id" value="<?php echo $linha['id_pessoa']; ?>">
                </div>
                <div class="form-button">
                    <input type="button" value="Voltar" id="button" onClick="history.go(-1)">
                </div>
            </div>

        </form>
        </div>
    </div>
</section>
</body>
</html>