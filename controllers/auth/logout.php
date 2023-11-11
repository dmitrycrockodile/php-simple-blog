<?php

$pageTitle = 'Log out';
$pageContent = template('auth/v_logout');

if($_POST['logout']) {
   sessionsDelete($user['id_user']);

   header('Location: ' . BASE_URL);
   exit();
}