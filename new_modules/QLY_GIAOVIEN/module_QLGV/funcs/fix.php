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

$xtpl = new XTemplate('fixinfo.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
if (!empty($array)){
    foreach ($array as $d){
        $xtpl->assign('GIAOVIEN', $d);
        $xtpl->parse('main');
    }
}
if ($nv_Request -> isset_request('update', 'post')) {
    $row['magiaovien'] = $nv_Request->get_string('magiaovien', 'post', '');
    $row['tengiaovien'] = $nv_Request->get_string('tengiaovien', 'post', '');
    $row['bomon'] = $nv_Request->get_string('bomon', 'post', '');
    $row['gioitinh'] = $nv_Request->get_string('gioitinh', 'post', '');
    $row['diachi'] = $nv_Request->get_string('diachi', 'post', '');
    $row['email'] = $nv_Request->get_string('email', 'post', '');
    $row['sdt'] = $nv_Request->get_string('sdt', 'post', '');

   $str='UPDATE '. NV_PREFIXLANG . '_dm_GiaoVien'.' SET magiaovien= "'.$row['magiaovien']
    .'",tengiaovien= "'.$row['tengiaovien'].'" ,bomon="'.$row['bomon'].'" ,gioitinh= "'.$row['gioitinh'].'" ,email= "'.$row['email']
    .' ",sdt= "'.$row['sdt'].'" where magiaovien = '.$row['magiaovien'];
    $sth = $db->prepare($str);
    $sth->execute();
    header('Location: http://localhost/nukeviet/index.php?language=vi&nv=quanlygiaovien');
}
$contents = $xtpl->text('main');

$page_title=$lang_module['title'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
