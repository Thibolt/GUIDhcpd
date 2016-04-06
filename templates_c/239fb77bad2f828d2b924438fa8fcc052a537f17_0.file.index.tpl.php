<?php
/* Smarty version 3.1.29, created on 2016-04-04 19:17:26
  from "/var/www/html/GUIDhcpd/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702a1a64aae42_41028448',
  'file_dependency' => 
  array (
    '239fb77bad2f828d2b924438fa8fcc052a537f17' => 
    array (
      0 => '/var/www/html/GUIDhcpd/templates/index.tpl',
      1 => 1459790229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5702a1a64aae42_41028448 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Begin page content -->
<div class="container">

    <?php if ($_smarty_tpl->tpl_vars['serviceStatus']->value != '* apache2 is running') {?>
    <div class="panel panel-danger">
    <?php } else { ?>
        <div class="panel panel-success">
    <?php }?>
        <div class="panel-heading">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['serviceStatus']->value;?>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Scope list
        </div>
        <div class="panel-body">

        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
