<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */
if (!defined('NV_IS_MOD_QLLOP')) {
    exit('Stop!!!');
}

$page_title = $lang_module['title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_Lop inner join nv4_vi_GiaoVien
on nv4_vi_GiaoVien.maGV = nv4_vi_dm_Lop.maGV
inner join nv4_vi_dm_Khoi
on nv4_vi_dm_Lop.maLop = nv4_vi_dm_Khoi.maKhoi');
$i = 0;
$array = [];
while ($d = $data->fetch()){
    $array[$d['malop']] = $d;
}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_GiaoVien');
$gv = [];
while ($d = $data->fetch()){
    $gv[$d['magv']] = $d;
}

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_Khoi');
$khoi = [];
while ($d = $data->fetch()){
    $khoi[$d['makhoi']] = $d;
}

// var_dump($gv);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

if (!empty($array)){
    foreach ($array as $d){
        $i++;
        $xtpl->assign('STT', $i);
        $xtpl->assign('LOP', $d);
        $xtpl->parse('main.loop');
    }
}

if (!empty($gv)){
    foreach ($gv as $g){
        $xtpl->assign('GV', $g);
        $xtpl->parse('main.giaovien');
    }
}

if (!empty($khoi)){
    foreach ($khoi as $k){
        $xtpl->assign('KHOI', $k);
        $xtpl->parse('main.khoi');
    }
}

if ($nv_Request -> isset_request('them', 'post')) {
    $row['malop'] = $nv_Request->get_int('malop', 'post', '');
    $row['khoi'] = $nv_Request->get_int('khoi', 'post', '');
    $row['tenlop'] = $nv_Request->get_int('tenlop', 'post', '');
    $row['giaovien'] = $nv_Request->get_string('giaovien', 'post', '');
    $row['ghichu'] = $nv_Request->get_string('ghichu', 'post', '');

// var_dump($row);
    $error = [];
    if (empty($row['malop'])) {
        $error []= $lang_module['empty_id'];
    }
    if (empty($row['khoi'])) {
        $error[] = $lang_module['empty_khoi'];
    }
    if (empty($row['giaovien'])) {
        $error[] = $lang_module['empty_giaovien'];
    }
    if (empty($row['tenlop'])) {
        $error[] = $lang_module['empty_tenlop'];
    }
    if (empty($row['ghichu'])){
        $row['ghichu'] = 'NULL';
    }
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_dm_Lop (
        maLop, maKhoi, maGV, tenLop, ghiChu
    ) VALUES (' . $row['malop'] . ',' . $row['khoi'] .', "' . $row['giaovien'] . '", ' . $row['tenlop'] . ', "' . $row['ghichu'] . '")';
    // die($_sql);
    $sth = $db->prepare($_sql);
    $sth->execute();
    header("Location: http://localhost/dung/nukeviet/index.php?language=vi&nv=qllop");
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