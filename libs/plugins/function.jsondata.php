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
 * Name:     json<br>
 * Purpose:  process json
 * Author:   Andy Chase
 */
function smarty_function_jsondata($params, &$smarty)
{
        $data = $params['data'];
        $data = substr($data, 0, strpos($data, "}];")+2);
        $data = json_decode($data, "true");
        $data = $data[0][$params['tag']];
        $smarty->assign($params['var'], $data);
}

?>