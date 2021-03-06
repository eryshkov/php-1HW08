<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <title>Article</title>
</head>
<body>
<p></p>
<div class="container">
    <?php if (isset($article)) {
        ?>
        <div class="row">
            <div class="col">
                <h1><?php echo $article->getTitle(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <blockquote class="blockquote">
                    <p class="mb-0"><?php echo $article->getFullText(); ?></p>
                    <footer class="blockquote-footer">Author
                        is&nbsp<strong><?php echo $article->getAuthor(); ?></strong></footer>
                </blockquote>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="row">
            <div class="col-auto">
                <div class="alert alert-danger" role="alert">
                    Новость не найдена
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/">Вернуться на главную</a>
            </div>
        </div>
        <?php
    } ?>
</div>
</body>
</html>