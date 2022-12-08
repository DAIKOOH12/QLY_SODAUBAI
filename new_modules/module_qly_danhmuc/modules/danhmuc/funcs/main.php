<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_MOD_CAT')) {
    exit('Stop!!!');
}

// $page_title = $lang_module['title'];
$page_url = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name;

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

// die('1');

if($nv_Request->isset_request('btn_namhoc_them', 'post')) {
    $ten = $nv_Request->get_string('input_namhoc_ten', 'post');
    $tgbd = $nv_Request->get_string('input_namhoc_thoigianbd', 'post');
    $tgkt = $nv_Request->get_string('input_namhoc_thoigiankt', 'post');
    $ghiChu = $nv_Request->get_editor('input_namhoc_ghichu', '');

    // sau khi them
    $data = array(
        'tenNamHoc' => $ten,
        'TGBD' => $thoigianbd,
        'TGKT' => $thoigiankt,
        'ghiChu' => $ghiChu
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_NamHoc (tenNamHoc, TGBD, TGKT, ghiChu)
    VALUES (:tenNamHoc, :TGBD, :TGKT, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}

$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
