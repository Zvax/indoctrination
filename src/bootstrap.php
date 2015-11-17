<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require __DIR__."/../vendor/autoload.php";

$config = Setup::createAnnotationMetadataConfiguration([
    __DIR__
],true);

$conn = [
    'driver' => "psdo_sqlite",
    'path' => __DIR__."/../data/db.sqlite"
];

$entityManager = EntityManager::create($conn,$config);