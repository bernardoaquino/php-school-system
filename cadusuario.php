<?php
header("Content-type:text/html; charset=utf8");
//Importar a classe Alunos
require_once "Classes(config)/Usuario.php";
//Instanciar classe Alunos
$Usuarios = new Usuario();
//Criar lista Alunos
if (isset($_POST["Salvar"])) {
    //Chamar função inserir
    $Usuarios->inserir();
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
            <form action="cadusuario.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome Completo" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="email@gmail.com.br" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" minlenght="6" maxlength="15" required>
                </div>
                <div align="center">
                    <button class="btn btn-success" type="submit" name="Salvar">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html