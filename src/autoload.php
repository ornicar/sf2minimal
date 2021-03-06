<?php

require_once __DIR__.'/vendor/Symfony/src/Symfony/Framework/UniversalClassLoader.php';

$loader = new Symfony\Framework\UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                   => __DIR__.'/vendor/Symfony/src',
    'Application'               => __DIR__,
    'Bundle'                    => __DIR__,
    'Doctrine\DBAL\Migrations'  => __DIR__.'/vendor/DoctrineMigrations/lib',
    'Doctrine\Common'           => __DIR__.'/vendor/Doctrine/lib/vendor/doctrine-common/lib',
    'Doctrine\\ODM\\MongoDB'    => __DIR__.'/vendor/doctrine-mongodb/lib',
    'Doctrine\DBAL'             => __DIR__.'/vendor/Doctrine/lib/vendor/doctrine-dbal/lib',
    'Doctrine'                  => __DIR__.'/vendor/Doctrine/lib',
    'Zend'                      => __DIR__.'/vendor/Zend/library',
));
$loader->register();
