<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
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
