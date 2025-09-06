<?php
$servidor = 'localhost';
$banco = 'etmsl';
$usuario = 'root';
$senha = '';

try {
    $pdo=new PDO ("mysql:host=$servidor;dbname=$banco; charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro de conexão ao Banco de Dados:'.$e->getMessage();
}


// Autenticar usuario


    $usuario=$_POST['user'];
    $senha=$_POST['psw'];

//     // Se for usuário especial, redireciona para nicanolas.php
// if ($usuario === 'nicanolas' && $senha === '666') {
//     echo '<script>window.location="nicanolas.php"</script>';
//     exit;
// }

    // Verificar(SELECT) se o usuario e a senha existe no DB
    $query = $pdo ->query("SELECT*FROM pessoas where userP='$usuario' and pswP='$senha'");
    // Executar a query e armazenar a resposta do DB
    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    // Analisar a resposta do DB
    if(@count($result)>0){
        // Usuario e senha corretos , direcionar para principal.php
        echo '<script>window.location="principal.php"</script>';
    }
    
    else{
        // Usuario e ou senha incorreta
        echo 'Usuario ou senha estão incorretos.';
        echo '<script>window.alert("Usuario ou senha incorreto.")</script>';
        echo '<script>window.location="index.php"</script>';
    }




?>