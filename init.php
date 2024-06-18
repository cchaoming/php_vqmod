<?php
// 关闭英文语法拼写检查[vscode扩展]
/* cSpell:disable */

/**
 * composer项目引用vqmod扩展初始化文件
 * see https://github.com/vqmod/vqmod/wiki  
 */

require_once(__DIR__ . '/vqmod.php');

if (DIRECTORY_SEPARATOR === '/') {
    // fix webman for window to file process/Monitor.php
    // see https://www.php.net/manual/zh/pcntl.constants.php
    !defined('SIGUSR1') && define('SIGUSR1', 30);
    !defined('SIGINT') && define('SIGINT', 2);
}

\VQMod::$vqCachePath = 'vqmod/vqmod_runtime/_vqmod_cache/';
\VQMod::$logFolder = 'vqmod/vqmod_runtime/_vqmod_logs/';
\VQMod::$modCache = 'vqmod/vqmod_runtime/_vqmod.mods';
\VQMod::$checkedCache = 'vqmod/vqmod_runtime/_vqmod.checked';

\VQMod::bootup(dirname(__DIR__));