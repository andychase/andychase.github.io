<?php
require 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./');
$smarty->setCompileDir('libs/compile/');
$smarty->setCacheDir('libs/cache');
$smarty->caching = 2;
$smarty->cache_lifetime = 86400;

if (!$smarty->isCached('index.tpl')) {
    // Birthday & Christmas seconds
    $birthday = new DateTime(date("Y") . "-08-14");
    $birthday = $birthday->getTimestamp();
    $christmas = new DateTime(date("Y") . "-12-25");
    $christmas = $christmas->getTimestamp();
    $seconds_in_a_day = 86400;
    $smarty->assign("days_until_birthday", floor(($birthday - time()) / $seconds_in_a_day));
    $smarty->assign("days_until_christmas", floor(($christmas - time()) / $seconds_in_a_day));
    // Steam & Reddit
    require('libs/simple_html_dom.php');
    $html = file_get_html("http://www.reddit.com/user/asperous");
    $result = $html->find(".karma");
    $smarty->assign("reddit", $result[0]->innertext."|".$result[1]->innertext);
    $html = file_get_html("http://steamcommunity.com/id/asperous/games");
    $json = $html->find("script", -2)->innertext;
    $json = substr($json, strpos($json, "[{"), strpos($json, "}];")-14);
    $steam_data = json_decode($json, "true");
    $smarty->assign("dota", $steam_data[0]['hours_forever']);
    // Featured Files
    $output = array();
    $files =  scandir("./featured");
    rsort($files);
    foreach ($files as $file) {
        if($file == "." or $file == "..") continue;
        $data = explode("_", $file);
        if (count($data) == 2) {
            $clean = $data[1];
            $description = "";
        }
        else {
            $clean = $data[2];
            $description = $data[1];
        }
        $clean = str_replace( "~", "/", $clean);
        $clean = str_replace( ".png", "", $clean);
        $output[$file] = array($clean, $description);
    }
    $smarty->assign("files", $output);
}
$smarty->display('index.tpl');