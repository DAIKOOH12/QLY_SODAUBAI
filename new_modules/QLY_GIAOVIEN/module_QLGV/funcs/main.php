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

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_GiaoVien');
$i = 0;
$array = [];
while ($d = $data->fetch()){
    $array[$d['magiaovien']] = $d;
}

$xtpl = new XTemplate('quanlygiaovien.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

if (!empty($array)){
    foreach ($array as $d){
        $i++;
        $xtpl->assign('STT', $i);
        $xtpl->assign('GIAOVIEN', $d);
        $xtpl->parse('main.loop');
    }
}
if ($nv_Request -> isset_request('them', 'post')) {
    $row['magiaovien'] = $nv_Request->get_string('magiaovien', 'post', '');
    $row['tengiaovien'] = $nv_Request->get_string('tengiaovien', 'post', '');
    $row['bomon'] = $nv_Request->get_string('bomon', 'post', '');
    $row['gioitinh'] = $nv_Request->get_string('gioitinh', 'post', '');
    $row['diachi'] = $nv_Request->get_string('diachi', 'post', '');
    $row['email'] = $nv_Request->get_string('email', 'post', '');
    $row['sdt'] = $nv_Request->get_string('sdt', 'post', '');

    // var_dump($row);
    $error = [];
    if (empty($row['magiaovien'])) {
        $error []= $lang_module['empty_id'];
    }
    if (empty($row['tengiaovien'])) {
        $error[] = $lang_module['empty_name'];
    }
    if (empty($row['bomon'])) {
        $error[] = $lang_module['empty_bm'];
    }
    if (empty($row['gioitinh'])) {
        $error[] = $lang_module['empty_gt'];
    }
    if (empty($row['diachi'])) {
        $error[] = $lang_module['empty_dc'];
    }
    if (empty($row['email'])) {
        $error[] = $lang_module['email'];
    }
    if (empty($row['sdt'])) {
        $error[] = $lang_module['sdt'];
    }
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_dm_GiaoVien (
        magiaovien, tengiaovien, bomon, gioitinh,diachi,email,sdt
    ) VALUES (' . $row['magiaovien'] . ',' . $row['tengiaovien'] .',' . $row['bomon'] . ',' . $row['gioitinh'] . ',' . $row['diachi'] .',' . $row['email'] .',' . $row['sdt'] .')';
    // die($_sql);
    $sth = $db->prepare($_sql);
    $sth->execute();
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=quanlygiaovien");
} elseif (empty($mabomon)) {
    $row['mabomon'] = '';
    $row['tenbomon'] = '';
    $row['diachi'] = 0;
    $row['ghichu'] = '';
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

$page_title=$lang_module['title'];

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
