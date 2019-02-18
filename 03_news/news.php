<?php

require_once __DIR__ . '/../classes/View.php';
require_once __DIR__ . '/../classes/DB.php';
require_once __DIR__ . '/classes/Article.php';


$db = new DB(__DIR__ . '/../config.php');
$data = $db->query('SELECT * FROM news ORDER BY id DESC', []);

$articles = [];

foreach ($data as $dataChunk) {
    $article = new Article($dataChunk['id'], $dataChunk['author'], $dataChunk['title'], $dataChunk['text']);
    $articles[] = $article;
}

$view = new View();
$view->assign('articles', $articles);

$view->display(__DIR__ . '/templates/newsBasic.php');