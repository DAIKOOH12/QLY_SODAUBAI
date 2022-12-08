<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

$page_title = $lang_module['title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;

$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_dm_BoMon');
$i = 0;
$array = [];
while ($d = $data->fetch()){
    $array[$d['mabomon']] = $d;

}

// var_dump($array);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

if (!empty($array)){
    foreach ($array as $d){
        $i++;
        $xtpl->assign('STT', $i);
        $xtpl->assign('BOMON', $d);
        $xtpl->parse('main.loop');
    }
}

if ($nv_Request -> isset_request('them', 'post')) {
    $row['mabomon'] = $nv_Request->get_string('mabomon', 'post', '');
    $row['tenbomon'] = $nv_Request->get_string('tenbomon', 'post', '');
    $row['diachi'] = $nv_Request->get_string('diachi', 'post', '');
    $row['ghichu'] = $nv_Request->get_string('ghichu', 'post', '');
// var_dump($row);
    $error = [];
    if (empty($row['mabomon'])) {
        $error []= $lang_module['empty_id'];
    }
    if (empty($row['tenbomon'])) {
        $error[] = $lang_module['empty_name'];
    }
    if (empty($row['diachi'])) {
        $error[] = $lang_module['empty_lct'];
    }
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_dm_BoMon (
        maBoMon, tenBoMon, diaChi, ghiChu
    ) VALUES (' . $row['mabomon'] . ',' . $row['tenbomon'] .',' . $row['diachi'] . ',' . $row['ghichu'] . ')';
    $sth = $db->prepare($_sql);
    $sth->execute();
    header("Location: http://localhost/dung/nukeviet/index.php?language=vi&nv=bomon&op=main");
} elseif (empty($mabomon)) {
    $row['mabomon'] = '';
    $row['tenbomon'] = '';
    $row['diachi'] = 0;
    $row['ghichu'] = '';
}

$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';