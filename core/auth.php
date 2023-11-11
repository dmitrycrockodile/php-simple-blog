<?php

//Gets user by token 
function authGetUser() : ?array {
   $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

   if($token !== null) {
      $session = sessionsOne($token);

      if($session !== null) {
         $user = usersGetById($session['id_user']);
      }
   }

   return $user;
}