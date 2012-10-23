<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {scrapeweb} plugin
 *
 * Type:     function<br>
 * Name:     json<br>
 * Purpose:  fetch json
 * Author:   Andy Chase
 */
function smarty_function_json($params, &$smarty)
{
    
    $url = $params['url'];
    $data = smarty_function_json_retrieve_url_contents($url);
    $smarty->assign($params['var'], json_decode($data, true));
}

function smarty_function_json_retrieve_url_contents($url)
{
    if(function_exists(curl_init)) {
        $ch = curl_init();
        $timeout = 10;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    } else {
        return file_get_contents($url);
    }
}

?>