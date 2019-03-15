<?php
    include "menu1.php";
session_start();
require 'config.php';
$_SESSION['lg'] = '';
if(isset($_POST['cpf']) && !empty($_POST['cpf'])) {
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$sql = "SELECT * FROM usuarios WHERE cpf = :cpf AND senha = MD5(:senha)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":cpf", $cpf);
	$sql->bindValue(":senha", $senha);
	$sql->execute();
	if($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$id = $sql['id'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$_SESSION['lg'] = $id;
		$sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":ip", $ip);
		$sql->bindValue(":id", $id);
		$sql->execute();
		header("Location: home.php");
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
                <input type="text" id="cpf" class="fadeIn second" name="cpf" placeholder="CPF">
                <input type="text" id="senha" class="fadeIn second" name="senha" placeholder="Senha"><br>
                <input type="submit" value="Entrar" class="btn btn-success btn-mg">
            </form><br><br>

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