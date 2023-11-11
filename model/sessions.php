<?php

//Adds session to the database
function sessionsAdd(int $id, string $token) : bool {
   //sql request
   $sql = "INSERT INTO sessions (id_user, token) VALUES (:id_user, :token)";
   dbQuery($sql, ['id_user' => $id, 'token' => $token]);

   return true;
}

//Gets one session by token 
function sessionsOne(string $token) : ?array {
   //sql request
   $sql = "SELECT * FROM sessions WHERE token=:token";
   $query = dbQuery($sql, ['token' => $token]);
   $user = $query->fetch();

   return $user === false ? null : $user;
}

//Delete current session from user (log out user)
function sessionsDelete(int $id) : bool {
   //sql request
   $sql = "DELETE FROM sessions WHERE id_user = :id";
   dbQuery($sql, ['id' => $id]);

   return true;
}