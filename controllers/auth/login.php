<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $login = trim($_POST['login']);
   $password = trim($_POST['password']);
   
   if($login != '' && $password != '') {
      $user = usersGetByLogin($login);

      if($user !== null && password_verify($password, $user['password'])) {
         $token = substr(bin2hex(random_bytes(128)), 0, 128);
         sessionsAdd($user['id_user'], $token);
         $_SESSION['token'] = $token;
         
         if($remember) {
            setcookie('token', $token, time() + 3600 * 24 * 30, BASE_URL);
         }

         header('Location: ' . BASE_URL);
         exit();
      }
   }

   $authErr = true;
} 

$pageTitle = 'Login';
$pageContent = template('auth/v_login', [
   'authErr' => $authErr,
   'login' => $login
]);