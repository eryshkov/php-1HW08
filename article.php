<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

if (!isset($_GET['id'])) {
    exit();
}

$articleNumber = $_GET['id'];

$news = new News();
$article = $news->getOneArticle($articleNumber);

$view = new View();
$view->assign('article', $article);
$view->display(__DIR__ . '/templates/newsArticle.php');




