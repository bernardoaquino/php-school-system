<?php
header("Content-type:text/html; charset=utf8");
//Importar a classe Alunos
require_once "Classes(config)/Usuario.php";
//Instanciar a classe usuario
$Usuarios = new Usuario();
//Criar lista de alunos
if (isset($_POST["Entrar"])) {
    //Chamar a função inserir
    $Usuarios->login();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="tudo">
        <div class="login">
        <!--Logo da Empresa-->
            <div align="center">
                <img src="img/logo.png">
            </div>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="email@gmail.com.br" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" minlenght="6" maxlength="15" required>
                </div>
                <div align="center">
                    <button class="btn btn-success" type="submit" name="Entrar">Entrar</button>
                    <a href="cadusuario.php" class="btn btn-outline-primary">Registrar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html