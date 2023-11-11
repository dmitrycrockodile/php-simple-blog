<?php

$cats = categoryAll();

$pageTitle = 'All Categories';
$pageContent = template('cats/v_all', [
   'cats' => $cats,
   'isAdmin' => $isAdmin,
]);