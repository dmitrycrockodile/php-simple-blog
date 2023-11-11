<?php 

$intGT0 = '[0-9-]+\d*';

$routes = [
   [
      'test' => '/^$/',
      'controller' => 'articles/all'
   ],
   [
      'test' => '/^add\/?$/',
      'controller' => 'articles/add'
   ],
   [
      'test' => '/^cats\/?$/',
      'controller' => 'cats/all'
   ],
   [
      'test' => "/^cats\/cat\/($intGT0)\/?$/",
      'controller' => 'cats/cat',
      'params' => ['id' => 1]
   ],
   [
      'test' => "/^cats\/delete\/($intGT0)\/?$/",
      'controller' => 'cats/delete',
      'params' => ['id' => 1]
   ],
   [
      'test' => "/^cats\/add\/?$/",
      'controller' => 'cats/add'
   ],
   [
      'test' => "/^edit\/($intGT0)\/?$/",
      'controller' => 'articles/edit',
      'params' => ['id' => 1]
   ],
   [
      'test' => "/^delete\/($intGT0)\/?$/",
      'controller' => 'articles/delete',
      'params' => ['id' => 1]
   ],
   [
      'test' => "/^articles\/($intGT0)\/?$/",
      'controller' => 'articles/article',
      'params' => ['id' => 1]
   ],
   [
      'test' => '/^logs\/?$/',
      'controller' => 'logs/all'
   ],
   [
      'test' => "/^logs\/($intGT0)\/?$/",
      'controller' => 'logs/log',
      'params' => ['name' => 1]
   ],
   [
      'test' => '/^auth\/register\/?$/',
      'controller' => 'auth/register'
   ],
   [
      'test' => '/^auth\/login\/?$/',
      'controller' => 'auth/login'
   ],
   [
      'test' => '/^auth\/logout\/?$/',
      'controller' => 'auth/logout'
   ],
];