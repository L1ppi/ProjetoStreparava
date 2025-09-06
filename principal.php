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
    <link rel="icon" href="./img/icone.png" type="image/png">
    <link rel="stylesheet" href="./estilo/pgPrincipal.css">
    <title>Streparava</title>
</head>
<body>
    <div class="menu">
        <!-- Titulo do sistema -->
        <div>Tambor de Freio</div>
        <div class="usuario">
            <!-- Exibir o usuario logado -->

            <?php
            echo $usuario
            ?>
            <form action="sair.php" method="POST">
                <button type="submit" class="btnSair">
                </button>

            </form>
        </div>
    </div>
    <!-- Botões de navegação -->
    <div class="opcoes">
        <button id="btnFunc">Funcionário</button>
        <button id="btnProd">Produtos</button>
        <button id="btnRelat">Relatórios</button>
        <button id="btnAdm">Admin</button>
    </div>
<!-- Area de conteudo -->
    <div id="conteudo"></div>
</body>

</html>