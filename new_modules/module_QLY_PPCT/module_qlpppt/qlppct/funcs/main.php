<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */
if (!defined('NV_IS_MOD_QLPPCT')) {
    exit('Stop!!!');
}

$page_title = $lang_module['title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_PhanPhoiCT inner join nv4_vi_dm_NamHoc
on nv4_vi_dm_NamHoc.maNamHoc = nv4_vi_PhanPhoiCT.maNamHoc
inner join nv4_vi_dm_KhoiMon
on nv4_vi_PhanPhoiCT.maKhoiMon = nv4_vi_dm_KhoiMon.maKhoiMon
inner join nv4_vi_dm_Khoi
on nv4_vi_dm_Khoi.maKhoi = nv4_vi_dm_KhoiMon.maKhoi
inner join nv4_vi_dm_MonHoc
on nv4_vi_dm_KhoiMon.maMon = nv4_vi_dm_MonHoc.maMon');
$i = 0;
$array = [];
while ($d = $data->fetch()){
    $array[$d['mappct']] = $d;
}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_NamHoc');
$nh = [];
while ($d = $data->fetch()){
    $nh[$d['manamhoc']] = $d;
}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_KhoiMon inner join nv4_vi_dm_Khoi
on nv4_vi_dm_Khoi.maKhoi = nv4_vi_dm_KhoiMon.maKhoi
inner join nv4_vi_dm_MonHoc
on nv4_vi_dm_KhoiMon.maMon = nv4_vi_dm_MonHoc.maMon');
$khoim = [];
while ($d = $data->fetch()){
    $khoim[$d['makhoimon']] = $d;
}

// var_dump($array);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

if (!empty($array)){
    foreach ($array as $d){
        $i++;
        $xtpl->assign('STT', $i);
        $xtpl->assign('PPCT', $d);
        $xtpl->parse('main.loop');
    }
}

if (!empty($nh)){
    foreach ($nh as $n){
        $xtpl->assign('NAMHOC', $n);
        $xtpl->parse('main.namhoc');
    }
}

if (!empty($khoim)){
    foreach ($khoim as $km){
        $xtpl->assign('KHOIMON', $km);
        $xtpl->parse('main.khoimon');
    }
}

if ($nv_Request -> isset_request('them', 'post')) {
    $row['namhoc'] = $nv_Request->get_int('namhoc', 'post', '');
    $row['khoimon'] = $nv_Request->get_int('khoimon', 'post', '');
    $row['baihoc'] = $nv_Request->get_string('baihoc', 'post', '');
    $row['tiet'] = $nv_Request->get_int('tiet', 'post', '');

// var_dump($row);

    $ma = 'ppct_' . time();
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_PhanPhoiCT (
        maPPCT, maNamHoc, maKhoiMon, tiet, tenBaiHoc
    ) VALUES ("' . $ma . '",' . $row['namhoc'] . ',' . $row['khoimon'] .',' . $row['tiet'] . ',"' . $row['baihoc'] . '")';
    // die($_sql);
    $sth = $db->prepare($_sql);
    $sth->execute();
    header("Location: http://localhost/dung/nukeviet/index.php?language=vi&nv=qlppct");
}

$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';