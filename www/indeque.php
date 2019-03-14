<?php
/**
 * Created by PhpStorm.
 * User: evandro.oliveira
 * Date: 14/03/2019
 * Time: 10:33
 */
    require "menu.php";
    $pontos = 150;
    $recentes = 50;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>

    <title>Clube de Pontos</title>
</head>
<body>

<div class="container">
    <div style="color: #cccccc; margin-top: 50px; width: 100%; text-align: center; ">
        <h4 style="position: relative;align-items: center;">Link de indicação</h4>

    <form method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="https://www.clubegazin.com.br" value="https://www.clubegazin.com.br" disabled>
        </div>
    </form>
    <div>
        <h3>Compartilhe</h3>
        <a href="#"><img src="assets/imagens/whatsapp.png"> </a>
        <a href="#"><img src="assets/imagens/email.png"></a>
        <a href="#"><img src="assets/imagens/messenger.png"></a>
    </div>
    </div>
<p></p>
<div class="container">
<div style="font-size: 18px; color: #0f5aa6;margin-left: 10px;">Enviados</div>
<div style="font-size: 24px; color: green; margin-left: 10px;"><?php echo $pontos ?></div>
<hr>

    <h4 style="font-weight: bold; color: #ffc107; font-family: Arial;">Convites aceitos recentemente</h4>
    <div style="font-size: 24px; color: green; margin-left: 10px;"><?php echo $recentes ?></div>
</div>
</div>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>


