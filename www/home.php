<?php
include "menu.php";
session_start();
require 'config.php';
if(empty($_SESSION['lg'])) {
    header("Location: login.php");
    exit;
} else {
    $id = $_SESSION['lg'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql = "SELECT * FROM usuarios WHERE id = :id AND ip = :ip";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":ip", $ip);
    $sql->execute();
    if($sql->rowCount() == 0) {
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>

    <title>Clube de Pontos</title>
</head>
<body>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/imagens/promocao.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/imagens/promocao2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/imagens/promocao3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container produtos">
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/14417.jpg">
        </div>
        <div class="detalhes">
            <p>Fogão 5 Bocas Mueller Moderatto 601187001 </p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/15188.jpg">
        </div>
        <div class="detalhes">
            <p >Lavadora Brastemp 15kg Double Wash </p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/15222.jpg">
        </div>
        <div class="detalhes">
            <p >Lavadora de Roupas 10Kg </p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/48569.jpg">
        </div>
        <div class="detalhes">
            <p>Smartphone Samsung  </p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/162421.jpg">
        </div>
        <div class="detalhes">
            <p>Ferro de Passar Roupas </p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/162579.jpg">
        </div>
        <div class="detalhes">
            <p>Liquidificador Mondial</p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/162640.jpg">
        </div>
        <div class="detalhes">
            <p >Cafeteira Mondial</p>
        </div>
    </div>
    <div class="itens">
        <div class="imagens">
            <img src="assets/imagens/30177.jpg">
        </div>
        <div class="detalhes">
            <p>TV LG Smart </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>