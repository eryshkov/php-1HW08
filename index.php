<?php
require __DIR__ . '/classes/View.php';
require __DIR__ . '/classes/News.php';

$news = new News();
$articles = $news->getAllArticles();

$view = new View();
$view->assign('articles', $articles);
$view->display(__DIR__ . '/templates/newsBasic.php');