<?php

class DB
{
    public function __construct(string $configPath)
    {
        $config = require_once $configPath;

        $dbHost = 'host=' . $config['dbHost'];
        $dbName = 'dbname=' . $config['dbName'];

        $dsn1 = implode(':', [$config['dbType'], $dbHost, $config['dbPort']]);
        $dsn2 = implode(';', [$dsn1, $dbName]);
    }
}