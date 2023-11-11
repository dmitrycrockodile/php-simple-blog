<?php

const HOST = 'http://localhost';
const BASE_URL = '/course/hw/';

const DB_HOST = 'localhost';
const DB_NAME = 'my_blog';
const DB_USER = 'root';
const DB_PASS = 'root';

include_once('model/articles.php');
include_once('model/categories.php');
include_once('model/logs.php');
include_once('model/users.php');
include_once('model/sessions.php');

include_once('core/db.php');
include_once('core/system.php');
include_once('core/str.php');
include_once('core/auth.php');

include_once('routes.php');