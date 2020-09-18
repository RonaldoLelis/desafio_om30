<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="login">
        <div class="fundo">
            <img class="foto" src="assets/images/mediOM-background.png" alt="">
        </div>
        <div class="login-form">
            <form action="<?php base_url() ?>login/login_in" method="post">
                <div class="avatar">
                    <img src="assets/images/mediOM-logo.png" alt="Avatar">
                </div>
                <h2 class="text-center"></h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuário" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                </div>
                <div class="bottom-action clearfix">
                    <p class="text-center small">Não tem uma Conta?<a href="logincadastro"> Cadastre-se aqui!</a></p>
                    <a href="#" class="float-right"></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>