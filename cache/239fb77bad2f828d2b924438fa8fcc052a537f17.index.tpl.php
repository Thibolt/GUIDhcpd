<?php
/* Smarty version 3.1.29, created on 2016-04-03 19:56:08
  from "/var/www/html/GUIDhcpd/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57015938cc2e27_86498743',
  'file_dependency' => 
  array (
    '239fb77bad2f828d2b924438fa8fcc052a537f17' => 
    array (
      0 => '/var/www/html/GUIDhcpd/templates/index.tpl',
      1 => 1459701113,
      2 => 'file',
    ),
    '56d77615b16e54f30e0efe32b36c77a67d029b43' => 
    array (
      0 => '/var/www/html/GUIDhcpd/templates/header.tpl',
      1 => 1459700045,
      2 => 'file',
    ),
    '1742ce05369165d36dd1e84233d7374a00aaed78' => 
    array (
      0 => '/var/www/html/GUIDhcpd/templates/navbar.tpl',
      1 => 1459192204,
      2 => 'file',
    ),
    'db3006bb44ad88c526059471251c6377c9507857' => 
    array (
      0 => '/var/www/html/GUIDhcpd/templates/footer.tpl',
      1 => 1459700088,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_57015938cc2e27_86498743 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Thibault Carcaillon">
    <!-- Favicon -->
    <link rel="icon" href="">

    <title>GUIDhcpd</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="stylesheets/style.css" rel="stylesheet">
</head>

<body>
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
</nav>
<!-- Begin page content -->
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 
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
<!-- Bootstrap core JavaScript
================================================== -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
<?php }
}
