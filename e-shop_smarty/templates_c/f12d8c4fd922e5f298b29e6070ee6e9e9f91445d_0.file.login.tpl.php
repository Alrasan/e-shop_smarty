<?php
/* Smarty version 3.1.29, created on 2015-12-22 10:23:43
  from "/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5679169f75c6f9_76983292',
  'file_dependency' => 
  array (
    'f12d8c4fd922e5f298b29e6070ee6e9e9f91445d' => 
    array (
      0 => '/home/francisco/web/francisco.infenlaces.com/public_html/dwes/e-shop_smarty/templates/login.tpl',
      1 => 1450776218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5679169f75c6f9_76983292 ($_smarty_tpl) {
?>

<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap theme -->
        <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
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
                        <div class="alert-warning"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                        <div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
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
</html><?php }
}
