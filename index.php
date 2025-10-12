<!-- Estrutura php -->
<?php require_once('./conexao.php');
// Criar uma sessão para compartilhar as variaveis de memoria @session_start(); 
?>
<!-- Estrutura html -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 2-Editar a estrutura padrão: titúlo,css,icone -->
    <link rel="icon" href="./img/FAVICON.png" type="image/x-icon">
    <link rel="stylesheet" href=".\css\estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <!-- 3-Criar a DIV e o FORM - body{} -->


    <div class="header">
        <a href="./index.php"><img src="./img/Streparava.png" alt="logo streparava"></a>
    </div>

    <!-- Criar formulário -->
    <!-- 3.1 -3.2 inputs e button -->
    <section class="container">
        <div class="login-container">
            <div class="form-container">
                <img src="./img/S.png" alt="Streparava" class="imagem" />
                <h1 class="texto">LOGIN</h1>
                <form id="loginForm" action="" method="POST">
                    <input type="text" name="userP" placeholder="USUÁRIO" required>
                    <input type="password" name="pswP" placeholder="*****" required>
                    <button onclick="" class="submit-btn">Entrar</button>
                </form>
                <div class="register-forget opacity">
                </div>
            </div>
            <div class="circulo"></div>
        </div>


        <div id="modalErro" class="modal">
            <div class="modal-content">
                <h3>ERRO DE LOGIN</h3>
                <p>Usuário ou senha incorreto.</p>
                <button id="fecharErro">OK</button>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modalErro = document.getElementById('modalErro');
            const fecharErro = document.getElementById('fecharErro');

            // Se a URL tiver ?erro=1, exibe o modal
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('erro') === '1') {
                modalErro.style.display = 'flex';
            }

            fecharErro.addEventListener('click', () => {
                modalErro.style.display = 'none';
                // Remove o parâmetro ?erro=1 da URL sem recarregar
                window.history.replaceState({}, document.title, window.location.pathname);
            });

            // Fecha clicando fora do modal
            window.addEventListener('click', (e) => {
                if (e.target === modalErro) {
                    modalErro.style.display = 'none';
                    window.history.replaceState({}, document.title, window.location.pathname);
                }
            });
        });
    </script>
</body>

</html>