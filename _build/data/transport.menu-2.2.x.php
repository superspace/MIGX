<?php

/**
 * menus transport file for MIGX extra
 *
 * Copyright 2013 by Bruno Perner b.perner@gmx.de
 * Created on 04-17-2014
 *
 * @package migx
 * @subpackage build
 */

if (!function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $menus */


$action = $modx->newObject('modAction');
$action->fromArray(array(
    'namespace' => 'migx',
    'controller' => 'index',
    'haslayout' => 1,
    'lang_topics' => 'example:default',
    'assets' => '',
    'help_url' => '',
    'id' => 1,
    ), '', true, true);


$menus[1] = $modx->newObject('modMenu');
$menus[1]->fromArray(array(
    'text' => 'migx',
    'parent' => 'components',
    'description' => '',
    'icon' => '',
    'menuindex' => 0,
    'params' => '&configs=packagemanager||migxconfigs||setup',
    'handler' => '',
    'permissions' => '',
    ), '', true, true);

$menus[1]->addOne($action);

return $menus;
