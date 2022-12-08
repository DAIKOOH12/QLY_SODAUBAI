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
// $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_NamHoc;';
// $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_NamHoc;';
// $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_NamHoc;';
// $sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_dm_NamHoc;';

$sql_create_module = $sql_drop_module;

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_NamHoc (
    maNamHoc int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenNamHoc varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    TGBD date DEFAULT NULL,
    TGKT date DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE" . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_MonHoc (
  maMon int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  tenMon varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE" . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_BoMon (
    maBoMon int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenBoMon varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    diaChi varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";


$sql_create_module[] = "CREATE TABLE" . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_dm_Khoi (
    maKhoi int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tenKhoi varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    ghiChu varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
  ";


// $sql_create_module[] = "";


// $sql_create_module[] = "";


// $sql_create_module[] = "";


// $sql_create_module[] = "";

