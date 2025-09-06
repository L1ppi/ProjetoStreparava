<!-- Estrutura php -->
<?php
    session_start();
    
    if(isset($_POST['user']) && isset($_POST['psw'])){
        $usuario=$_POST['user'];
        $senha=$_POST['psw'];
        // teste
        echo $usuario;
        echo $senha;
        if($usuario == 'L1ppi' && $senha == '123'){
            $_SESSION['user']=$usuario;
            echo '<script>window.location="./principal.php"</script>';
            $_SESSION['psw']=$senha;
            exit();
        }
        if($usuario == 'nicanolas' && $senha == '666'){
            $_SESSION['user']=$usuario;
            echo '<script>window.location="./nicanolas.php"</script>';
            $_SESSION['psw']=$senha;
            exit();
        }
        else{
            echo '<script>alert("Usuario e/ou senha incorreto")</script>';
        }
    }
?>
<!-- Estrutura html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 2-Editar a estrutura padrão: titúlo,css,icone -->
    <link rel="icon" href="./img/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Login</title>
</head>
<body>
    <!-- 3-Criar a DIV e o FORM - body{} -->
    
        
        <div class="header">
            <img src="./img/LOGASSA.png" alt="logo streparava" width="150px">
        </div>
        <!-- Criar formulário -->
        <!-- 3.1 -3.2 inputs e button -->
        

            <div class="login-container">
                <div class="bordaLogin">
            <div class="login" id="caixaLogin">
                <h2>LOGIN</h2>

                <form id="loginForm" action="" method="POST">
                    <input type="text" name="user" placeholder="USUÁRIO" required>
                    <input type="password" name="psw" placeholder="*****" required>
                    <button onclick="" class="submit-btn">Entrar</button>
                </form>
                </div>
            </div>

</body>

<script>
    const loginBlock = document.getElementById('caixaLogin');
    const loginForm = document.getElementById('loginForm');

    loginBlock.addEventListener('click', () => {
        // só adiciona as classes se ainda não estiver aberto
        if (!loginBlock.classList.contains('expanded')) {
            loginBlock.classList.add('expanded');
            loginForm.classList.add('active');
        }
    });
</script>
</html>

