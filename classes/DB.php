<?php

class DB
{
    protected $pdo;

    public function __construct(string $configPath)
    {
        $config = require $configPath;

        $dbHost = 'host=' . $config['dbHost'];
        $dbName = 'dbname=' . $config['dbName'];
        $dbUserName = $config['dbUserName'];
        $dbPassword = $config['dbPassword'];

        $dsn1 = implode(':', [$config['dbType'], $dbHost, $config['dbPort']]);
        $dsn = implode(';', [$dsn1, $dbName]);

        $this->pdo = new PDO($dsn, $dbUserName, $dbPassword);
    }
}