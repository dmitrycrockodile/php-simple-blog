<?php

//Gets user by login 
function usersGetByLogin(string $login) : ?array {
   //sql request
   $sql = "SELECT login, id_user, password FROM users WHERE login = :login";
   $query = dbQuery($sql, ['login' => $login]);
   $user = $query->fetch();

   return  $user;
}

//Gets user by id
function usersGetById(int $id) : ?array {
   //sql request
   $sql = "SELECT id_user, login, email, name, status FROM users WHERE id_user=:id";
   $query = dbQuery($sql, ['id' => $id]);
   $user = $query->fetch();

   return $user === false ? null : $user;
}

//Registers user to the database
function usersRegister(array $fields) : bool {
   //sql request
   $sql = "INSERT INTO users(login, email, name, password, status) VALUES (:login, :email, :name, :password, :status)";
   dbQuery($sql, $fields);
   
   return true;
}

//Checks register form validation
function usersValidateRegForm(array &$fields) : array {
   $errors = [];
   $loginLen = mb_strlen($fields['login'], 'UTF-8');
   $emailLen = mb_strlen($fields['email'], 'UTF-8');
   $nameLen = mb_strlen($fields['name'], 'UTF-8');
   $passLen = mb_strlen($fields['password'], 'UTF-8');

   if ($loginLen === 0 || $emailLen === 0 || $nameLen === 0 || $passLen === 0) {
      $errros[] = 'Please fill all input fields!';
   }

   if ($loginLen < 5) {
      $errors[] = 'Login must contain minimum 5 characters!';
   }

   if ($emailLen < 3) {
      $errors[] = 'Email must contain minimum 3 characters!';
   }

   if ($nameLen < 4) {
      $errors[] = 'Name must contain minimum 4 characters!';
   }

   if ($passLen < 3) {
      $errors[] = 'Password must contain minimum 3 characters!';
   }

   $fields['login'] = htmlspecialchars($fields['login']);
   $fields['email'] = htmlspecialchars($fields['email']);
   $fields['name'] = htmlspecialchars($fields['name']);

   return $errors;
}