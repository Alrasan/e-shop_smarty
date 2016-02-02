<?php
/* Smarty version 3.1.29, created on 2016-01-12 12:25:11
  from "/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/computers.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5694e297e5a578_56169565',
  'file_dependency' => 
  array (
    'bedbc255964ae4c455ec71cfa6d6a63c33865e28' => 
    array (
      0 => '/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/computers.tpl',
      1 => 1452597908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5694e297e5a578_56169565 ($_smarty_tpl) {
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
                            Hello <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

                        </div>
                        <button type="submit" name="logout" class="btn btn-default">Log Out</button>
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="panel panel-info col-md-10 productos relativo">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Características del Ordenador <?php echo $_smarty_tpl->tpl_vars['pc']->value['cod'];?>

                </h3>
                <a href="../controler/product.php"> <button type="submit" name="go_back" class="btn btn-default righter">Volver</button>
                </a>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['pc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['value']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_1_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$__foreach_dato_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dato']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['dato']->value) {
$_smarty_tpl->tpl_vars['dato']->_loop = true;
$__foreach_dato_1_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>
                                    <tr>
                                        <td class=''>
                                            <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 
                                        </td>
                                        <td class='right'>
                                            <?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
 
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_local_item;
}
if ($__foreach_dato_1_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_1_saved_item;
}
if ($__foreach_dato_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_dato_1_saved_key;
}
?>
                            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-info col-md-10 productos">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Descripción <?php echo $_smarty_tpl->tpl_vars['pc']->value['cod'];?>

                </h3>
            </div>
            <div class="panel-body">

                <div class="col-md-12">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
