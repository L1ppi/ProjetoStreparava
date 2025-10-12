<form action="processaCadastroUsuario.php" method="post">
    <label for="regU">Tipo de Usuário:</label>
    <select name="regU" id="regU" required>
        <option value="1">Administrador</option>
        <option value="2">Funcionário</option>
    </select>
    <br><br>

    <label for="nomeU">Nome do Usuário:</label>
    <input type="text" name="nomeU" id="nomeU" required>
    <br><br>

    <label for="senhaU">Senha:</label>
    <input type="text" name="senhaU" id="senhaU" required>
    <br><br>

    <label for="perfil">ID do Perfil:</label>
    <input type="number" name="perfil" id="perfil" required>
    <br><br>

    <button type="submit">Cadastrar Usuário</button>
</form>