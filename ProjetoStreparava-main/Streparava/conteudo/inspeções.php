<?php
@session_start();
if (!isset($_SESSION['user'])) {
    echo '<script>window.location="./index.php"</script>';
    exit();
}
?>

<div class="pagina-inspecao">
    <div class="header-inspecao">
        <h2><i class="bi bi-qr-code-scan"></i> Leitura QR Code</h2>
        <p class="subtexto">Aponte a câmera para o código ou insira o valor abaixo.</p>
    </div>

    <div class="leitor-qrcode">
        <div id="reader" class="area-leitor">
            <span class="texto-leitor">Aguardando leitura...</span>
        </div>

        <input type="text" id="qrcode-value" placeholder="Código lido aparecerá aqui" readonly>
        <button class="btn-confirmar">Confirmar Leitura</button>
    </div>
</div>

<!-- BOOTSTRAP ICONS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #ff0000;
        --primary-dark: #b30000;
        --background: #ffffff;
        --secondary: #f7f7f7;
        --text-dark: #222;
    }

    .pagina-inspecao {
        background: var(--background);
        border-radius: 18px;
        padding: 32px 28px;
        margin: 30px auto;
        max-width: 500px;
        text-align: center;
        font-family: "League Spartan", sans-serif;
        color: var(--text-dark);
    }

    .header-inspecao h2 {
        color: var(--primary-color);
        font-weight: 800;
        font-size: 1.8em;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .header-inspecao .subtexto {
        font-size: 0.95em;
        color: #666;
        margin-bottom: 22px;
    }

    .leitor-qrcode .area-leitor {
        border: 2.5px dashed #666;
        border-radius: 12px;
        background: var(--secondary);
        min-height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #888;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: border 0.2s, color 0.2s;
    }

    .leitor-qrcode .area-leitor:hover {
        border-color: var(--primary-dark);
        color: var(--primary-dark);
    }

    .leitor-qrcode input[type="text"] {
        margin-top: 20px;
        padding: 14px;
        width: 100%;
        max-width: 360px;
        border-radius: 8px;
        border: 1.8px solid #ccc;
        background: #fafafa;
        font-size: 1.1em;
        color: var—text-dark;
        box-shadow: 0 2px 6px #0001;
        outline: none;
        text-align: center;
        transition: border 0.25s, box-shadow 0.25s;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .leitor-qrcode input[type="text"]:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 6px #ff000033;
    }

    .btn-confirmar {
        margin-top: 20px;
        background: var(--primary-color);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 26px;
        font-size: 1.1em;
        cursor: pointer;
        transition: background 0.25s, transform 0.25s;
        font-weight: 600;
        box-shadow: 0 3px 8px #0002;
    }

    .btn-confirmar:hover {
        background: var(--primary-dark);
        transform: scale(1.05);
    }

    @media (max-width: 600px) {
        .pagina-inspecao {
            margin: 10px;
            padding: 24px;
        }

    }
</style>
