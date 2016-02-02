<?php
/* Smarty version 3.1.29, created on 2016-01-12 09:57:02
  from "/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5694bfde5e39c7_89192351',
  'file_dependency' => 
  array (
    'bc36e898ab0c009590a58c56090f0e9a87a9a5d2' => 
    array (
      0 => '/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/products.tpl',
      1 => 1452589020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5694bfde5e39c7_89192351 ($_smarty_tpl) {
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
        <link href="../css/style.css" rel="stylesheet">
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
                            Hello <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

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

                        <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                            <tbody><tr><form method='post'>
                                <td class="desc"><input type='hidden' name='nombre_corto' value='<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

                                    <?php if ($_smarty_tpl->tpl_vars['value']->value[1] != '') {?>
                                        <span class="descr"><a href="computers.php?pc=<?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
">Más info</a></span>
                                    <?php }?>
                                </td>
                                <td class='right'><input type='hidden' name='PVP' value='<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
'>
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
 €</td><td>
                                    <button name='add'>
                                        <span class='glyphicon glyphicon-plus-sign'></span>
                                    </button></form></td>
                            </tr></tbody>
                        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_0_saved_key;
}
?>
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

                            <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['index']) ? $_smarty_tpl->tpl_vars['index'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
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
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['index'] = $__foreach_value_1_saved_key;
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

                    <form method="post" action="product.php">
                        <button class="btn btn-info col-lg-6" name="clear">Vaciar Cesta</button>
                        <button class="btn btn-info col-lg-6" name="buy">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
