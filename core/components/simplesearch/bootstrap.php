<?php
/**
 * @var \MODX\Revolution\modX $modx
 * @var array $namespace
 */

require_once $namespace['path'] . 'vendor/autoload.php';

$modx->services->add('simplesearch', function($c) use ($modx) {
    return new SimpleSearch\SimpleSearch($modx);
});
