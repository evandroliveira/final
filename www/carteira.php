<?php
    require "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Meus pontos</title>
</head>
<body>
<div class="container" style="margin-top: 20px;">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ultima compra</th>
            <th scope="col">Expira em</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>João</td>
            <td>13/03/2019</td>
            <td>13/12/2019</td>
        </tr>
        <tr>
            <td>Pedro</td>
            <td>05/03/2018</td>
            <td>05/01/2020</td>
        </tr>

        </tbody>
    </table>
</div>

<div class="container">
    <div style="width: 500px;">
        <canvas id="grafico"></canvas>
    </div>

</div>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>