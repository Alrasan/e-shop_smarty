<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <title>Productos</title>
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

            .descr{
                padding-left: 1em;
                /*position: absolute;
                left: -9999em;
                width: 1px;
                overflow: hidden;
                z-index: 999;*/
            }/*
            .desc:hover, .desc:focus, .desc:active{
                position: relative;
            }
            .desc:hover .descr, .desc:focus .descr .desc:active .descr{
                left: 20px;
                top: 20px;
                width: 600px;
                border: solid 1px #bce8f1;
                background: #bce8f1;
            }*/

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default alert-info">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <h2 class="navbar-brand">Productos</h2>
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
        <div class="panel panel-info col-md-7 productos">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Productos
                </h3>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th class="col-md-9">Nombre</th>
                                <th class="col-md-2">Precio</th>
                                <th class="col-md-1"></th>
                            </tr>
                        </thead>

                        {foreach $products as $key => $value}
                            <tbody><tr><form method='post'>
                                <td class="desc"><input type='hidden' name='nombre_corto' value='{$key}'>
                                    {$key}
                                    {if $value[1]!=""}
                                        <span class="descr"><a href="computers.php?pc={$value[1]}">Más info</a></span>
                                    {/if}
                                </td>
                                <td class='right'><input type='hidden' name='PVP' value='{$value[0]}'>
                                    {$value[0]} €</td><td>
                                    <button name='add'>
                                        <span class='glyphicon glyphicon-plus-sign'></span>
                                    </button></form></td>
                            </tr></tbody>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-info col-md-4 productos ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Cesta
                </h3>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th class="col-md-6">Nombre</th>
                                <th class="col-md-4">Cantidad</th>
                                <th class="col-md-2">Precio</th>
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

                    <form method="post" action="product.php">
                        <button class="btn btn-info col-lg-6" name="clear">Vaciar Cesta</button>
                        <button class="btn btn-info col-lg-6" name="buy">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>