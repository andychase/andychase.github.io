<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {json} plugin
 *
 * Type:     function<br>
 * Name:     featuredfiles<br>
 * Purpose:  find files, list of images and links
 * Author:   Andy Chase
 */
function smarty_function_featuredfiles($params, &$smarty)
{
    $output = array();
    $files =  scandir($params['dir']);
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
    $smarty->assign($params['var'], $output);
}

?>