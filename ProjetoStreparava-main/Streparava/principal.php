<?php
session_start();

// Verificar se a variável 'user' possui conteúdo
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$usuario = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 2-Editar a estrutura padrão: titúlo,css,icone -->
    <link rel="icon" href="./img/FAVICON.png" type="image/png">
    <link rel="stylesheet" href="./css/pgPrincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>Página Principal</title>
</head>

<body>
    <div class="header">
    <div class="header-left">
        <a href="./principal.php"><img src="./img/Streparava.png" alt="Logo Streparava" class="logo"></a>
    </div>

    <div class="header-right">
        <span class="bemvindo">
            <span class="saudacao">Bem-vindo,</span>
            <strong><?php echo htmlspecialchars($usuario); ?></strong>
            <button class="usuario-btn">
                <img src="./img/Helik.png" alt="" width="40px" >
            </button>
        </span>
    </div>
</div>

<!-- Modal de sair -->
<div id="modalSair" class="modal">
    <div class="modal-content">
        <h3>Deseja sair?</h3>
        <form action="sair.php" method="POST">
            <button type="submit" class="btn-confirmar">Sair</button>
            <button type="button" class="btn-cancelar" id="cancelarSair">Cancelar</button>
        </form>
    </div>
</div>
    <div class="container">
        <div class="opcoes">
            <button class="btnopcoes" id="btnInsp">Inspeção</button>
            <button class="btnopcoes" id="btnCadAdm">Cadastro Adm.</button>
            <button class="btnopcoes" id="btnRelat">Relatórios</button>
        </div>

        <div id="conteudo">
            <h2>CONTEÚDO</h2>
            <p>Aqui aparece o conteúdo ao lado do menu.</p>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Função para alternar classe ativo
        $('.btnopcoes').click(function() {
            $('.btnopcoes').removeClass('ativo'); // Remove de todos
            $(this).addClass('ativo'); // Adiciona ao clicado
        });

        // Botão Inspeção
        $('#btnInsp').click(function() {
            $('#conteudo').load('conteudo/inspeções.php', function(response, status, xhr) {
                if (status == "error") {
                    $('#conteudo').html('<p>Erro ao carregar Inspeção</p>');
                }
            });
        });

        // Botão Cadastro Administrador
        $('#btnCadAdm').click(function() {
            $('#conteudo').load('conteudo/CadastrosAdm.php', function(response, status, xhr) {
                if (status == "error") {
                    $('#conteudo').html('<p>Erro ao carregar Cadastro Administrador</p>');
                }
            });
        });

        // Botão Relatórios
        $('#btnRelat').click(function() {
            $('#conteudo').load('conteudo/relatorios.php', function(response, status, xhr) {
                if (status == "error") {
                    $('#conteudo').html('<p>Erro ao carregar Relatórios</p>');
                }
            });
        });
    });
    



    const usuarioBtn = document.querySelector('.usuario-btn');
    const modalSair = document.getElementById('modalSair');
    const cancelarSair = document.getElementById('cancelarSair');

    usuarioBtn.addEventListener('click', () => {
        modalSair.style.display = 'flex';
    });

    cancelarSair.addEventListener('click', () => {
        modalSair.style.display = 'none';
    });

    // Fechar modal clicando fora da caixa
    window.addEventListener('click', (e) => {
        if (e.target === modalSair) {
            modalSair.style.display = 'none';
        }
    });

</script>

</html>