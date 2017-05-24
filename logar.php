<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tela de Login</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">   
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12"></div>
                  <div id="login_user" class="col-md-4 col-xs-12">
                    <h2 class="form-signin-heading">Login:</h2>
                    <label for="inputUsuario" class="sr-only">Usuário</label>
                    <input type="text" id="login_id" name="login" class="form-control" placeholder="Usuário" autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="senha_id" name="senha" class="form-control" placeholder="Password">
                    <button id="btnlogin" class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
                  </div>
            </div>
        </div>
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
