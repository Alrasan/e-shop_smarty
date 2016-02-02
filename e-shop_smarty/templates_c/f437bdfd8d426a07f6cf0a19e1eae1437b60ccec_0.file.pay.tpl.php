<?php
/* Smarty version 3.1.29, created on 2016-01-11 10:04:44
  from "/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/pay.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5693702c3745c2_62514047',
  'file_dependency' => 
  array (
    'f437bdfd8d426a07f6cf0a19e1eae1437b60ccec' => 
    array (
      0 => '/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/pay.tpl',
      1 => 1452502837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5693702c3745c2_62514047 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default alert-info">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <h2 class="navbar-brand">Comprar</h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right" method="post">
                        <div class="form-group">
                            Hello <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

                        </div>
                        <button type="submit" name="logout" class="btn btn-default">Log Out</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="panel panel-info col-md-offset-3 col-md-6 productos ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Has pagado correctamente. 
                </h3>

            </div>
            <div class="panel-body col-md-6">
                <form method="post">
                    <button class="btn btn-info col-lg-offset-3 col-lg-6" name="shop">Volver a comprar</button>
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
