<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

$sql_drop_module = [];

$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_NamHoc;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_MonHoc;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_BoMon;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_Khoi;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_LoaiTruong;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_So;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_PhongGD;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_Truong;';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_NamHoc (
    maNamHoc int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenNamHoc varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    TGBD date DEFAULT NULL,
    TGKT date DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_MonHoc (
  maMon int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tenMon varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ghiChu varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_BoMon (
    maBoMon int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenBoMon varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    diaChi varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_Khoi (
    maKhoi int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenKhoi varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  ";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_LoaiTruong (
    maLoai int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenLoai varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_So (
    maSo int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenSo varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    diaChi varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_PhongGD (
    maPhong int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenPhong varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    maSo int(11) DEFAULT NULL REFERENCES nv4_vi_danhmuc_dm_So (maSo),
    diaChi varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";



$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_Truong (
    maTruong int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenTruong varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    maPhong int(11) DEFAULT NULL REFERENCES nv4_vi_danhmuc_dm_PhongGD (maPhong),
    maLoai int(11) DEFAULT NULL REFERENCES nv4_vi_danhmuc_dm_LoaiTruong (maLoai),
    diaChi varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

