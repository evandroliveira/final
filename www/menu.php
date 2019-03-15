<?php
/**
 * Created by PhpStorm.
 * User: evandro.oliveira
 * Date: 14/03/2019
 * Time: 08:06
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <title>Clube de pontos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3399ff">
    <a class="navbar-brand" href="https://www.gazin.com.br/"><img src="assets/imagens/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="meuspontos.php">Meus pontos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carteira.php">Carteira</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opções
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item" href="cadastro.php">Cadastro</a>
                    <a class="dropdown-item" href="#">Juntar pontos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Como juntar pontos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Sair</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-default my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
