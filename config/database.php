<?php
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

return [
    'default' => $_ENV['DB_CONNECTION'],
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
            'database' => $_ENV['DB_DATABASE'],
            'username' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
    ],
];