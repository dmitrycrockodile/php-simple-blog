<?php

header('HTTP/1.1 404 Not Found');

$pageTitle = 'Ошибка 404';
$pageContent = template('errors/v_404');