<?php

    $loader = require __DIR__ . '/vendor/autoload.php';

    use Lojaagua\entidades;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;

    $path = array(
        'Lojaagua/entidades'
    );

    $devMode = true;

    $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

    $connectionOptions = array(
        'dbname' => 'vendaagua',
        'user' => 'root',
        'password' => '',
        'host' => 'localhost',
        'driver' =>'pdo_mysql'
    );

    $entityManager = EntityManager::create($connectionOptions, $config);

    $u = new Usuario();
    $u->setEmail("brunocavalcantedsilva@gmail.com");

    $entityManager->persist($u);
    $entityManager->flush();
    echo "hello" .$u->getEmail();
    
?>