<?php

require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/../classes/View.php';
require_once __DIR__ . '/../classes/DB.php';


if (isset($_GET['id'])) {
    $articleNumber = $_GET['id'];

    $db = new DB(__DIR__ . '/../config.php');
    $data = $db->query('SELECT * FROM news WHERE id=:id', [':id'=>$articleNumber]);

    if (false !== $data) {
        $article = new Article($data[0]['id'], $data[0]['author'], $data[0]['title'], $data[0]['text']);
        $view = new View();
        $view->assign('article', $article);
        $view->display(__DIR__ . '/templates/newsArticle.php');
    }
}

