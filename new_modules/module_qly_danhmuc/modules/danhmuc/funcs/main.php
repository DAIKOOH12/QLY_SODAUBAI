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

if($nv_Request->isset_request('btn_monhoc_them', 'post')) {
    $ten = $nv_Request->get_string('input_monhoc_ten', 'post');
    $ghiChu = $ghiChu = $nv_Request->get_editor('input_monhoc_ghichu', '');

    $data = array(
        'tenMon' => $ten,
        'ghiChu' => $ghiChu
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_MonHoc (tenMon, ghiChu)
    VALUES (:tenMon, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}


if($nv_Request->isset_request('btn_khoi_them', 'post')) {
    $ten = $nv_Request->get_string('input_khoi_ten', 'post');
    $ghiChu = $ghiChu = $nv_Request->get_editor('input_khoi_ghichu', '');

    $data = array(
        'tenKhoi' => $ten,
        'ghiChu' => $ghiChu
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_Khoi (tenKhoi, ghiChu)
    VALUES (:tenKhoi, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}


if($nv_Request->isset_request('btn_bomon_them', 'post')) {
    $ten = $nv_Request->get_string('input_bomon_ten', 'post');
    $diaChi = $nv_Request->get_string('input_bomon_diachi', 'post');
    $ghiChu = $nv_Request->get_editor('input_bomon_ghichu', '');

    // sau khi them
    $data = array(
        'tenBoMon' => $ten,
        'diaChi' => $thoigianbd,
        'ghiChu' => $ghiChu
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_BoMon (tenBoMon, diaChi, ghiChu)
    VALUES (:tenBoMon, :diaChi, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}


if($nv_Request->isset_request('btn_so_them', 'post')) {
    $ten = $nv_Request->get_string('input_so_ten', 'post');
    $diaChi = $nv_Request->get_string('input_so_diachi', 'post');
    $ghiChu = $nv_Request->get_editor('input_so_ghichu', '');

    // sau khi them
    $data = array(
        'tenSo' => $ten,
        'diaChi' => $diaChi,
        'ghiChu' => $ghiChu,
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_So (tenSo, diaChi, ghiChu)
    VALUES (:tenSo, :diaChi, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}


$data = $db->query('SELECT * FROM ' . NV_PREFIXLANG . '_danhmuc_dm_So');
$nh = [];
while ($d = $data->fetch()){
    $nh[$d['maso']] = $d;
}

if (!empty($nh)){
    foreach ($nh as $n){
        $xtpl->assign('SO', $n);
        $xtpl->parse('main.so');
    }
}


if($nv_Request->isset_request('btn_phong_them', 'post')) {
    $ten = $nv_Request->get_string('input_phong_ten', 'post');
    $maso = $nv_Request->get_string('input_phong_maso', 'post');
    $diachi = $nv_Request->get_string('input_phong_diachi', 'post');
    $ghiChu = $nv_Request->get_editor('input_phong_ghichu', '');

    // sau khi them
    $data = array(
        'tenPhong' => $ten,
        'maSo' => $maso,
        'diaChi' => $diachi,
        'ghiChu' => $ghiChu
    );

    $query = "INSERT INTO nv4_vi_danhmuc_dm_PhongGD (tenPhong, maSo, diaChi, ghiChu)
    VALUES (:tenPhong, :maSo, :diaChi, :ghiChu)";

    $statement = $db->prepare($query);
    $result = $statement->execute($data);
    
    header("Location: http://localhost/nukeviet/index.php?language=vi&nv=danhmuc");
}


$xtpl->parse('main');
$contents = $xtpl->text('main');


include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';

