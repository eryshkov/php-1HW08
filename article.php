<?php

require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/DB.php';


if (isset($_GET['id'])) {
    $articleNumber = $_GET['id'];

    $db = new DB();
    $data = $db->query('SELECT * FROM news WHERE id=:id', [':id' => $articleNumber]);

    if (false !== $data) {
        foreach ($data as $article) {
            $article = new Article($article['id'], $article['author'], $article['title'], $article['text']);
            $view = new View();
            $view->assign('article', $article);
            $view->display(__DIR__ . '/templates/newsArticle.php');
            break;
        }
    }
}

