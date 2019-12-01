<?php
header("Content-type:text/html; charset=utf8");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>

@media (min-width: 576px) {
  body{
    overflow:hidden;
  }
}

</style>
<body >
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="index_adm.php">Sistema Escolar - Painel Administrativo</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index_alunos.php">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_professores.php">Professores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_funcionarios.php">Funcionários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_cursos.php">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_disciplinas.php">Disciplinas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
        </li>
    </ul>
</nav>

<div class="container2">
<div class="row">
    <div class="col-sm-4 mt-4" align="center">

        <div class="conteudo1">
            <div class="w3-container w3-center bg-dark" style="margin: 0;">
                <h5 class="text-light texto">Alunos</h5>
            </div>
            <div class="w3-card-4" style="width:50%; height:20vh;">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="img/aluno.png" style="height: 20%;">
                    </div>
                    <div class="col-md-6 mt-5" style="padding-left: 20%;">
                        <h2 class="text-light">1500</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="conteudo2 mt-4">
            <div class="w3-container w3-center bg-dark" style="margin: 0;">
                <h5 class="text-light texto">Disciplinas</h5>
            </div>
            <div class="w3-card-4" style="width:50%; height:20vh;">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/disciplina.png" style="height: 55%; padding-right: 80%;">
                    </div>
                    <div class="col-md-6 mt-5" style="padding-left: 35%;">
                        <h2 class="text-light">56</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-4 mt-4" align="center">
        <div class="conteudo3">
            <div class="w3-container w3-center bg-dark" style="margin: 0;">
                <h5 class="text-light texto">Professores</h5>
            </div>
            <div class="w3-card-4" style="width:50%; height:20vh;">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="img/professor.png"" style="height: 40%;">
                    </div>
                    <div class="col-md-6 mt-5" style="padding-left: 20%;">
                        <h2 class="text-light">35</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="conteudo5 mt-4">
            <div class="w3-container w3-center bg-dark" style="margin: 0;">
                <h5 class="text-light texto">Funcionários</h5>
            </div>
            <div class="w3-card-4" style="width:50%; height:20vh;">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="img/funcionario.png"" style="height: 20%;">
                    </div>
                    <div class="col-md-6 mt-5" style="padding-left: 20%;">
                        <h2 class="text-light">13</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mt-4 mb-4" align="center">
    <div class="conteudo4 mb-4">
            <div class="w3-container w3-center bg-dark" style="margin: 0;">
                <h5 class="text-light texto">Cursos</h5>
            </div>
            <div class="w3-card-4" style="width:50%; height:20vh;">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <img src="img/curso.png"" style="height: 10%;">
                    </div>
                    <div class="col-md-6 mt-5" style="padding-left: 20%;">
                        <h2 class="text-light">3</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html