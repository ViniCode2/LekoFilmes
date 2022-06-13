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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pglogin.css"> <!-- LINK CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!-- LINK BOXICONS.COM -->
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "img/icons/icon-leko.png"> <!-- ICON GUIA -->
    <title>LekoLogin</title>
</head>
<body>

<!-- BLOCO DA ESQUERDA -->
<div class="container">
        <div class="left">
            <div class="logo">
                <img src="img/logo-lekofilmes.png" alt="logo">
            </div>

            <div class="title">
                <h1>Seja</h1>
                <h1>bem-vindo!</h1>
                <h1>Junte-se a nós</h1>
            </div>

        </div>

<!-- BLOCO DA DIREIRA -->
        <div class="right">

<!-- DIV FORMULÁRIO LOGIN -->
            <div class="form" id="login-bloco">
                    <form class="box" id="login-in"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <h1 class="login">Login</h1>

                    <div class="father">
                    <div class="input-login" id="margin">
                            <div class="ico">
                            <i class='bx bxs-user login_icon' style='color:#fdf8f6' ></i>
                            </div>
                            <input type="text" placeholder="Digite seu nome de usuário" class="inputlogin" name="email" required>
                    </div>
                    
                    <div class="input-login">
                            <div class="ico">
                            <i class='bx bx-lock-alt login_icon' style='color:#fdf8f6'></i>
                            </div>
                            <input type="password" placeholder="Digite sua senha" class="inputlogin"  id="input-hide"  name="senha" required>
                            <div class="ico">
                            <i class='bx bx-hide login_hide' id="input-icon"></i>
                            </div>
                            <script src="js/hide.js"></script> <!-- LINK HIDE.JS -->
                    </div>
                    </div>

                    <div class="button">
                      <button type="submit" name="btn-entrar">Entrar</button> 
                        <!-- <a href="#" class="login__button">Entrar</a> -->
                    </div>

                    <div class="span">
                        <span class="login_account">Ainda não tem uma conta?</span>
                        <span class="login_signin" id="sign-up">Clique aqui</span>
                    </div>
                </form>
            </div>

<!-- DIV FORMULÁRIO CADASTRO  -->

                <form class="box_create none" action= "restrito/cadastro_script.php" method="POST" id="login-up">
                    <h1 class="login">Cadastre-se</h1>

                <div class="input-box">
                    <div class="login-box">
                        <div class="ico">
                        <i class='bx bxs-user login_icon' style='color:#fdf8f6' ></i>
                        </div>
                        <input type="text" placeholder="Nome de Usuário" class="login-input" id="cad" name="nome" required>
                    </div>
                    <div class="login-box">
                        <div class="ico">
                        <i class='bx bxs-envelope login_icon' style='color:#fdf8f6'  ></i>
                        </div>
                        <input type="text" placeholder="Email" class="login-input" id="cad" name="email" required>
                    </div>

<!-- div cpf com mascara -->
                    <div class="login-box">
                        <div class="ico">
                        <i class='bx bx-dock-right login_icon' style="color: #fdf8f6"></i>
                        </div>
                        <input type="tel" class="login-input" id="cpf" placeholder="CPF" autocomplete="off" name="cpf" required>
                        <script src="js/formMask_VS.js"></script> <!-- LINK FORMMASK_VS.JS  -->
                        <script>
                            new FormMask(document.querySelector("#cpf"), "___.___.___-__", "_", [".", "-"])
                        </script>
                    </div>

                    <div class="login-box">
                        <div class="ico">
                        <i class='bx bx-lock-alt login_icon' style='color:#fdf8f6'></i>
                        </div>
                        <input type="password" placeholder="Digite sua senha" class="login-input" id="cad" name="senha" required>
                    </div>
                    <div class="login-box">
                        <div class="ico">
                        <i class='bx bxs-home login_icon' style="color: #fdf8f6"></i>
                        </div>
                        <input type="text" placeholder="Endereço" class="login-input" id="cad" name="endereco" required>
                    </div>
                

                    <div class="button">
                      <button type="submit" id="button" name="">Cadastrar</button> 
                    </div>

                    <div class="span">
                        <span class="login_account">Já tem cadastro?</span>
                        <span class="login_signup" id="sign-in">Clique aqui</span>
                    </div>
                </div>
                </form>
        </div>

    </div>
    

<!-- LINK MAIN.JS -->
    <script src="js/main.js"></script>
            
</body>
</html>