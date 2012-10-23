<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./');
$smarty->setCompileDir('libs/compile/');
$smarty->setCacheDir('libs/cache');
$smarty->caching = 1;
$smarty->cache_lifetime = 86400;

$birthday = new DateTime(date("Y") . "-08-14");
$birthday = $birthday->getTimestamp();
$christmas = new DateTime(date("Y") . "-12-25");
$christmas = $christmas->getTimestamp();
$seconds_in_a_day = 86400;


$smarty->assign("days_until_birthday", ($birthday - time()) / $seconds_in_a_day);
$smarty->assign("days_until_christmas", ($christmas - time()) / $seconds_in_a_day);
$smarty->display('index.tpl');