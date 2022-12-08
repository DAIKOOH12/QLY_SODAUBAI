<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */
if (!defined('NV_IS_MOD_BOMON')) {
    exit('Stop!!!');
}

/**
 * user_register()
 *
 * @param bool   $gfx_chk
 * @param string $checkss
 * @param array  $data_questions
 * @param array  $array_field_config
 * @param array  $custom_fields
 * @param int    $group_id
 * @return string
 */

function bomon_main_theme()
{
    global $lang_global, $lang_module, $module_info, $alias_url;
    $xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
    // $xtpl->assign('CONTENT', $data);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    return $xtpl->text('main');
}
