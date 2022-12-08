<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */
if (!defined('NV_IS_MOD_QLKHOIMON')) {
    exit('Stop!!!');
}

$page_title = $lang_module['title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_KhoiMon inner join nv4_vi_dm_MonHoc
on nv4_vi_dm_KhoiMon.maMon = nv4_vi_dm_MonHoc.maMon
inner join nv4_vi_dm_Khoi
on nv4_vi_dm_KhoiMon.maKhoi = nv4_vi_dm_Khoi.maKhoi');
$i = 0;
$array = [];
while ($d = $data->fetch()){
    $array[$d['makhoimon']] = $d;

}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_MonHoc');
$mon = [];
while ($d = $data->fetch()){
    $mon[$d['mamon']] = $d;
}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_Khoi');
$khoi = [];
while ($d = $data->fetch()){
    $khoi[$d['makhoi']] = $d;
}

// var_dump($array);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

if (!empty($array)){
    foreach ($array as $d){
        $i++;
        $xtpl->assign('STT', $i);
        $xtpl->assign('KHOIMON', $d);
        $xtpl->parse('main.loop');
    }
}

if (!empty($mon)){
    foreach ($mon as $m){
        $xtpl->assign('MON', $m);
        $xtpl->parse('main.mon');
    }
}


if (!empty($khoi)){
    foreach ($khoi as $k){
        $xtpl->assign('KHOI', $k);
        $xtpl->parse('main.khoi');
    }
}

if ($nv_Request -> isset_request('them', 'post')) {
    $row['makhoimon'] = $nv_Request->get_int('makhoimon', 'post', '');
    $row['monhoc'] = $nv_Request->get_int('monhoc', 'post', '');
    $row['khoi'] = $nv_Request->get_int('khoi', 'post', '');
    $row['sotiet'] = $nv_Request->get_int('sotiet', 'post', '');
    $row['ghichu'] = $nv_Request->get_string('ghichu', 'post', '');

// var_dump($row);
    $error = [];
    if (empty($row['makhoimon'])) {
        $error []= $lang_module['empty_id'];
    }
    if (empty($row['khoi'])) {
        $error[] = $lang_module['empty_khoi'];
    }
    if (empty($row['monhoc'])) {
        $error[] = $lang_module['empty_monhoc'];
    }
    if (empty($row['sotiet'])) {
        $error[] = $lang_module['empty_sotiet'];
    }
    if (empty($row['ghichu'])){
        $row['ghichu'] = 'NULL';
    }
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_dm_KhoiMon (
        maKhoiMon, maMon, maKhoi, soTiet, ghiChu
    ) VALUES (' . $row['makhoimon'] . ',' . $row['monhoc'] .',' . $row['khoi'] . ',' . $row['sotiet'] . ',' . $row['ghichu'] . ')';
    $sth = $db->prepare($_sql);
    $sth->execute();
    header("Location: http://localhost/dung/nukeviet/index.php?language=vi&nv=qlkhoimon");
} elseif (empty($makhoimon)) {
    $row['makhoimon'] = 0;
    $row['khoi'] = 0;
    $row['monhoc'] = 0;
    $row['sotiet'] = 0;
    $row['ghichu'] = '';
}

$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';