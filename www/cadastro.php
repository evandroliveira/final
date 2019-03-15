<?php
include "menu.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
    <title>Cadastrar</title>
</head>
<body>
<p></p>
<div class="container-fluid">
    <h3>Cadastro</h3>
    <div class="col-md-11 col-xl-12">
        <form id="contact-form" name="formularioCadastro" action="home.php" method="POST">

            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 form-group">
                    <div class="md-form">
                        <label for="name" class="">E-mail:</label>
                        <input type="text" id="name" name="email" class="form-control">

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 form-group">
                    <div class="md-form">
                        <label for="email" class="">CPF:</label>
                        <input type="text" id="email" name="cpf" class="form-control">
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6 form-group">
                    <div class="md-form">
                        <label for="nome" class="">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <div class="md-form">
                        <label for="sobrenome" class="">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 form-group">
                    <div class="md-form">
                        <label for="senha" class="">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control">
                    </div>
                </div>

            </div>
            <!--Grid row-->





        </form>

        <div class="center-on-small-only">
            <a class="btn btn-success" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>

</div>
</div>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>