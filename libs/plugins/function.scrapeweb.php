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
 * Name:     scrapeweb<br>
 * Purpose:  fetch web & get one id
 * Author:   Andy Chase
 */
require('simple_html_dom.php');
function smarty_function_scrapeweb($params, &$smarty)
{
        $html = file_get_html($params['url']);
        $result = $html->find($params['find']);
        $smarty->assign($params['var'], $result);
}

?>