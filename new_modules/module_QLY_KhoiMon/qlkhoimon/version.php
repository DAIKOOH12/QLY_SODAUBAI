<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$module_version = [
    'name' => 'Quản lý khối môn',
    'modfuncs' => 'main',
    'submenu' => '',
    'is_sysmod' => 1,
    'virtual' => 0,
    'version' => '4.5.02',
    'date' => 'Thurseday, December 08, 2022 8:08:00 AM GMT+07:00',
    'author' => 'Dung <pdung13102003@gmail.com.vn>',
    'note' => '',
    'uploads_dir' => [
        $module_upload
    ]
];
