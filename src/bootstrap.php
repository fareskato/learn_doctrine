<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/config.php';

$entitiesPath = array(__DIR__.'/Blog/Entity');
/**
 * ADD null, null, false is to important or U will have no class metadata when U run doctrine commands
 */
$config = Setup::createAnnotationMetadataConfiguration($entitiesPath, $dev, null, null, false);
$em = EntityManager::create($dbParams, $config);