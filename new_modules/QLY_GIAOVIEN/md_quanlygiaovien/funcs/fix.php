<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_MOD_QLGV')) {
    exit('Stop!!!');
}
$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_GiaoVien where magiaovien= '.$_GET['id']);
$array = [];
while ($d = $data->fetch()){
    $array[$d['magiaovien']] = $d;
}
var_dump($array);
$xtpl = new XTemplate('fixinfo.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title=$lang_module['title'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
