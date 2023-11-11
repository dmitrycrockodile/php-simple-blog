<?php

$id = (int)URL_PARAMS['id'];
$cat = categoryOne($id);
$articles = articleSelectByCategory($id);

if ($id && $cat) {
   $pageTitle = "All {$cat}'s";
   $pageContent = template('cats/v_cat', [
      'cat' => $cat,
      'articles' => $articles
   ]);
} else {
   header('HTTP/1.1 404 Not Found');
   $pageContent = template('errors/v_404');
}