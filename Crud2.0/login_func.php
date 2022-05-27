<?php

include "restrito/action/conexao.php";

session_start();

if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    if(empty($login) or empty($senha)):
    $erros[] = "<p>Dados inválidos";
else:
    $sql = "SELECT email, senha FROM cinema WHERE email = '$login' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0):
        header('location: restrito');
    else:
        $erros[] = "<p>E-mail invalido";
endif;
endif;
endif;

?>

<!DOCTYPE html>
<html>
<HEAD>
    <meta charset=UTF-8>
    <title>Login Funcionários</title>
</HEAD>
<BODY>
<form   action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div> 
        <label for="login">   
    <input type="text" class="" name="email" required> 
</div>
<div>
    <label for="senha">
        <input type="password" name="senha" required>
</div>
<button type="submit" name="btn-entrar">Entrar</button> 

</form>
</BODY>
</html>