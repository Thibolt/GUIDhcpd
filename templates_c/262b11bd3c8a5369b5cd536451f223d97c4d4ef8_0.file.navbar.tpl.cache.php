<?php
/* Smarty version 3.1.29, created on 2016-04-03 19:37:21
  from "/var/www/html/GUIDhcpd/dhcpd/templates/navbar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570154d17b45c9_01942180',
  'file_dependency' => 
  array (
    '262b11bd3c8a5369b5cd536451f223d97c4d4ef8' => 
    array (
      0 => '/var/www/html/GUIDhcpd/dhcpd/templates/navbar.tpl',
      1 => 1459192204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570154d17b45c9_01942180 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '479697100570154d17a9576_59025612';
?>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GUIDhcpd</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service status<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Start service</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> Stop service</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Restart service</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage scopes<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> List all scope</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Scope</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove Scope</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav><?php }
}
