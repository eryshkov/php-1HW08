<?php

class DB
{
    protected $dbh;

    public function __construct(string $configPath)
    {
        $config = require $configPath;

        $dbHost = 'host=' . $config['dbHost'];
        $dbName = 'dbname=' . $config['dbName'];
        $dbUserName = $config['dbUserName'];
        $dbPassword = $config['dbPassword'];

        $dsn1 = implode(':', [$config['dbType'], $dbHost, $config['dbPort']]);
        $dsn = implode(';', [$dsn1, $dbName]);

        $this->dbh = new PDO($dsn, $dbUserName, $dbPassword);
    }

    public function execute(string $sql):bool
    {
        $sth = $this->dbh->prepare($sql);

        return $sth->execute();
    }
}