<?php

/**
 * DEARNASOUL Team
 * @version 4.x
 * @author DEARNASOUL
 * @license GPL-3.0
 * @see https://github.com/DAIKOOH12/QLY_SODAUBAI The DEARNASOUL's project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Quan Ly Giao Vien',
    'modfuncs' => 'main,fix',
    'is_sysmod' => 0,
    'virtual' => 1,
    'version' => '1.0.01',
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00',
    'author' => 'Truong',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ]
];
