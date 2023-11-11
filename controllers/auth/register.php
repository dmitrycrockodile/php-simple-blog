<?php

$fields = [
   'login' => $_POST['login'],
   'email' => $_POST['email'],
   'name' => $_POST['name'],
   'password' => '',
   'status' => ''
];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $fields['login'] = trim($_POST['login']);
   $fields['email'] = trim($_POST['email']);
   $fields['name'] = trim($_POST['name']);
   $fields['password'] = trim($_POST['password']);
   $fields['status'] = !!$_POST['status'] ? 'admin' : 'user';
   
   $validationErrors = usersValidateRegForm($fields);

   if(empty($validationErrors)) {
      $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);
      usersRegister($fields);

      header('Location: ' . BASE_URL . 'auth/login');
      exit();
   }
} 

$pageTitle = 'Registration';
$pageContent = template('auth/v_register', [
   'validationErrors' => $validationErrors,
   'fields' => $fields,
]);