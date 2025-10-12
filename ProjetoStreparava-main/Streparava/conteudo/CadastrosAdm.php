<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="containerCadastro">
        <div class="opcoesCadastro">
            <button class="btnopcoesCadastro" id="btnCadUsuario">Usuário</button>
            <button class="btnopcoesCadastro" id="btnCadProduto">Produto</button>
            <button class="btnopcoesCadastro" id="btnCadCliente">Cliente</button>
            <button class="btnopcoesCadastro" id="btnCadFornecedor">Fornecedor</button>
            <button class="btnopcoesCadastro" id="btnCadServico">Serviço</button>
        </div>
        <div id="conteudoCadastro">
            <h2>Área de Cadastro</h2>
            <p>Selecione uma opção acima para visualizar o conteúdo.</p>
        </div>
    </div>

    <script>
      $(document).ready(function() {
        // Botão Cadastro de Usuário
        $('#btnCadUsuario').click(function() {
    $('#conteudoCadastro').load('/Projetos/ProjetoStreparava-main/ProjetoStreparava-main/Streparava/conteudo/conteudoCadAdm/CadUsuario.php', function(response, status, xhr) {
        if (status == "error") {
            $('#conteudoCadastro').html('<p>Erro ao carregar Cadastro de usuario </p>');
        }
    });
});
    });
    </script>

<style>
:root {
  --primary-color: #ff0000;
  --secundary-color: #ffffff;
}

body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'League Spartan', Arial, sans-serif;
  background: #e3e3e3;
}

.containerCadastro {
  display: flex;
  flex-direction: column;
  height: 100vh;
  width: 100vw;
}

.opcoesCadastro {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  background: var(--secundary-color);
  border-bottom: 2px solid var(--primary-color);
  padding: 0 10px;
  gap: 10px;
  min-height: 70px;
}

.btnopcoesCadastro {
  padding: 12px 28px;
  font-size: 1.2em;
  font-family: 'League Spartan', Arial, sans-serif;
  font-weight: bold;
  color: var(--primary-color);
  background: transparent;
  border: none;
  border-radius: 6px 6px 0 0;
  cursor: pointer;
  transition: background 0.2s, color 0.2s;
}

.btnopcoesCadastro.active,
.btnopcoesCadastro:hover {
  background: var(--primary-color);
  color: var(--secundary-color);
}

#conteudoCadastro {
  flex: 1;
  background: #fff;
  padding: 30px 40px;
  overflow-y: auto;
  border-radius: 0 0 12px 12px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}
</style>
</body>
</html>
