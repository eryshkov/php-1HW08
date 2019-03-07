<?php
require __DIR__ . '/Article.php';
require __DIR__ . '/DB.php';

class News
{
    /**
     * @return array
     */
    public function getAllArticles(): array
    {
        $db = new DB();
        $articles = $db->query('SELECT * FROM news ORDER BY id DESC', []);

        if (false === $articles) {
            return [];
        }

        $result = [];

        foreach ($articles as $article) {
            $article = new Article($article['id'], $article['author'], $article['title'], $article['text']);
            $result[] = $article;
        }

        return $result;
    }

    /**
     * @param $id
     * @return Article|null
     */
    public function getOneArticle($id): ?Article
    {
        $db = new DB();
        $data = $db->query('SELECT * FROM news WHERE id=:id', [':id' => $id]);

        if (false === $data) {
            return null;
        }

        $article = reset($data);
        if (false === $article) {
            return null;
        }

        return new Article($article['id'], $article['author'], $article['title'], $article['text']);
    }
}