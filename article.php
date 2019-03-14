<?php
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

if (!isset($_GET['id'])) {
    exit();
}

$news = new News();
$article = $news->getOneArticle($_GET['id']);

$view = new View();
$view->assign('article', $article);
$view->display(__DIR__ . '/templates/newsArticle.php');




