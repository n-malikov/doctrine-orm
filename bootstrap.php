<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// след три строчки нужны ток с том случае, если нужно свой класс подключить,
// расширяющий стандартный getRepository
require_once "vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php";
$classLoader = new \Doctrine\Common\ClassLoader('Repositories', __DIR__);
$classLoader->register();

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true; // тестовый режим
//$proxyDir = null;
//$cache = null;
//$useSimpleAnnotationReader = false;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'dbname'   => 'a_doctrine',
    'user'     => 'vinni',
    'password' => 'ayrS0nKL1W',
    //'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);