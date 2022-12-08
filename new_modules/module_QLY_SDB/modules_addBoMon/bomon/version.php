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
    'name' => 'Demo của Dung',
    'modfuncs' => 'main,add_bo_mon,a',
    'submenu' => 'add_bo_mon,a',
    'is_sysmod' => 1,
    'virtual' => 0,
    'version' => '4.5.02',
    'date' => 'Monday, June 20, 2022 4:00:00 PM GMT+07:00',
    'author' => 'Dung <pdung13102003@gmail.com.vn>',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ]
];
