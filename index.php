<?php

require_once './libs/Smarty.class.php';


$smarty = new Smarty();


$smarty->debugging = true;
$smarty->cache_lifetime = 120;
//$smarty->setTemplateDir('/var/www/html/GUIDhcpd/templates');
//$smarty->setCompileDir('/var/www/html/GUIDhcpd/templates_c');

$outputRaw = shell_exec('service apache2 status |grep "* apache2 is running"');
$output = rtrim(ltrim($outputRaw));
//$output = "* apache2 is not running";


$smarty->assign("serviceStatus", $output);


$smarty->display('index.tpl');

