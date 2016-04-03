<?php

require_once './libs/Smarty.class.php';


$smarty = new Smarty();

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
//$smarty->setTemplateDir('/var/www/html/GUIDhcpd/templates');
//$smarty->setCompileDir('/var/www/html/GUIDhcpd/templates_c');



$smarty->display('index.tpl');

