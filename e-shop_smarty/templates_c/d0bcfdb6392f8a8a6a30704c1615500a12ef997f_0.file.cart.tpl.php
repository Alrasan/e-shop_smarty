<?php
/* Smarty version 3.1.29, created on 2016-01-11 10:00:50
  from "/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56936f42e227e9_73730740',
  'file_dependency' => 
  array (
    'd0bcfdb6392f8a8a6a30704c1615500a12ef997f' => 
    array (
      0 => '/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/cart.tpl',
      1 => 1452502751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56936f42e227e9_73730740 ($_smarty_tpl) {
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
                    <h2 class="navbar-brand">Cesta</h2>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right" method="post" action="product.php">
                        <div class="form-group">
                            Hello <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

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

                            <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['index']) ? $_smarty_tpl->tpl_vars['index'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nombre'];?>
</td>
                                    <td class='center'><?php echo $_smarty_tpl->tpl_vars['value']->value['cantidad'];?>
</td>
                                    <td class='right'><?php echo $_smarty_tpl->tpl_vars['value']->value['precio'];?>
 €</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['index'] = $__foreach_value_0_saved_key;
}
?>
                            <?php if ($_smarty_tpl->tpl_vars['precioTotal']->value > 0) {?>
                                <tr>
                                    <td>Total</td>
                                    <td></td>
                                    <td class='right'><?php echo $_smarty_tpl->tpl_vars['precioTotal']->value;?>
€</td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>

                    <form method="post">
                        <button class="btn btn-info col-lg-offset-3 col-lg-4" name="pay">Pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
