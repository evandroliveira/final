<?php
    include "menu1.php";
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
<section>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="assets/imagens/logo.png" id="icon" alt="User Icon" />
                <h1>Entrar</h1>
            </div>

            <!-- Login Form -->
            <form method="POST">
                <input type="text" id="login" class="fadeIn second" name="cpf" placeholder="CPF">
                <a href="meuspontos.php"><img src="assets/imagens/play.png"></a>
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="https://www.gazin.com.br/">Va para o Site</a>
            </div>

        </div>
    </div>
</section>


    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>