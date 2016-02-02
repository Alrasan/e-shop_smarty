
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <title>Login</title>
    </head>

    <body>
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel panel-heading">
                    <h3 class="panel-title">
                        Login
                    </h3>
                </div>
                <div class="panel-body">
                    <form action="login.php" method="post">
                        <div class="alert-warning">{$error}</div>
                        <div class="alert-success">{$success}</div>
                        <input type="text" class="form-control" name="usuario" placeholder="Username" autofocus="true" autocomplete="off">
                        <br/>
                        <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                        <br/>
                        <button class="btn btn-info btn-lg center-block col-lg-12" name="send">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>