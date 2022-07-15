<?php
#one way
require __DIR__. '../vendor/autoload.php';

// $id = new \Ramsey\Uuid\UuidFactory();

// echo $id->uuid4();

#two way : doc

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

printf(
    // "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion(),
);