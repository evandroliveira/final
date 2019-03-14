<?php
    require "menu.php";
    //$pontos_receber = array(5,10,20,40,20);
    $meus_pontos = array(5,10,20,40,20);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script>
        var myChart = new Chart(ctx, {...});
    </script>
    <title>Meus pontos</title>
</head>
<body>
<div class="container" style="margin-top: 20px;">

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Pontos a receber</th>
        <th scope="col">Meus pontos</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>João</td>
        <td style="color: blue;">300</td>
        <td style="color: #1e7e34;">800</td>
    </tr>


    </tbody>

</table>
    <div class="container">
        <a href="https://www.gazin.com.br" class="btn btn-success btn-lg" style="float: right;">Resgatar</a>
    </div>

</div>
<br><br>
<div class="container grafico">
        <canvas id="grafico"></canvas>
</div>
<div class="container">
    <a href="indeque.php" class="btn btn-primary btn-lg" style="margin-top: 10px; width: 100%;">Indique</a>
</div>

</div>

<script type="text/javascript" src="assets/js/Chart.min.js"></script>
<script type="text/javascript">
    window.onload = function(){
        var contexto = document.getElementById("grafico").getContext("2d");
        var grafico = new Chart(contexto, {
            type:'line',
            data: {
                labels: ['Março', 'Abril', 'Maio', 'Junho', 'Julho' ],
                datasets: [{
                    label:'Pontos ganhos',
                    backgroundColor:'green',
                    borderColor:'green',
                    data:[<?php echo implode(',', $meus_pontos); ?>],
                    fill:false
                }],

            }
        });
    }
</script>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>