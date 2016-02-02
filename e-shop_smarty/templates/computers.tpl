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

            .righter{
                float: right;
                margin-right: -1em;
                margin-top: -1.825em ;
            }

            .descr{
                padding-left: 1em;
                /*position: absolute;
                left: -9999em;
                width: 1px;
                overflow: hidden;
                z-index: 999;*/
            }

            .relativo{
                position: relative;
            }

            /*
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
        <div class="panel panel-info col-md-10 productos relativo">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Características del Ordenador {$pc['cod']}
                </h3>
                <a href="../controler/product.php"> <button type="submit" name="go_back" class="btn btn-default righter">Volver</button>
                </a>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <tbody>
                            {foreach $pc as $value}
                                {foreach $value as $key => $dato}
                                    <tr>
                                        <td class=''>
                                            {$key} 
                                        </td>
                                        <td class='right'>
                                            {$dato} 
                                        </td>
                                    </tr>
                                {/foreach}
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-info col-md-10 productos">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Descripción {$pc['cod']}
                </h3>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <td>{$desc}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>