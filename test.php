<?php
require_once __DIR__ . '/classes/DB.php';

$db = new DB(__DIR__ . '/config.php');

$sql = 'SELECT * FROM personsa';

$result = $db->execute($sql);
var_dump($result);