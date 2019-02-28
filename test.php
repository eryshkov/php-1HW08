<?php
require_once __DIR__ . '/classes/DB.php';

$db = new DB();

assert(true === $db->execute('SELECT * FROM persons WHERE id=1'));
assert(false === $db->execute('SELECT * FROM persons WHERE idd=1'));

$result = $db->query('SELECT * FROM persons WHERE id=:id', [':id'=>2]);
assert(false === $db->query('SELECT * FROM persons WHERE igd=:id', [':id'=>1]));
assert(true == $db->query('SELECT * FROM persons WHERE id=:id', [':id'=>1]));

var_dump($result);