<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <title>Cesta</title>
        <style>
            .productos{
                margin-left: 1em;
            }
            .right{
                text-align: right;
            }
            .center{
                text-align: center;
            }
            .righter{
                float: right;
                margin-right: -1em;
                margin-top: -1.825em ;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default alert-info">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <h2 class="navbar-brand">Cesta</h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right" method="post" action="product.php">
                        <div class="form-group">
                            Hello {$user}
                        </div>
                        <button type="submit" name="logout" class="btn btn-default">Log Out</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel panel-info col-md-10 productos ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Cesta
                </h3>
                <a href="../controler/product.php"> <button type="submit" name="go_back" class="btn btn-default righter">Volver</button>
                </a>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th class="col-md-6">Nombre</th>
                                <th class="col-md-4 center">Cantidad</th>
                                <th class="col-md-2 right">Precio</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $cart as $index => $value}
                                <tr>
                                    <td>{$value['nombre']}</td>
                                    <td class='center'>{$value['cantidad']}</td>
                                    <td class='right'>{$value['precio']} €</td>
                                </tr>
                            {/foreach}
                            {if $precioTotal > 0}
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td class='right'>{$precioTotal}€</td>
                                </tr>
                            {/if}
                        </tbody>
                    </table>

                    <form method="post">
                        <button class="btn btn-info col-lg-offset-3 col-lg-4" name="pay">Pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>