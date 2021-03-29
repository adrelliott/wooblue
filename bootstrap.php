<?php

require __DIR__ . '/vendor/autoload.php';

// Set up ENV vars (add them to .env but don't commit to Git)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
