<?php

$articles = articlesAll();

$pageTitle = "All posts";
$pageContent = template('articles/v_all', [
   'articles' => $articles
]);