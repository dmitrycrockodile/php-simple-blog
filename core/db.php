<?php
   //connecting to the database
   function dbConnect() : PDO {
      static $db;

      if ($db === null) {
         $db = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, 
            DB_USER, 
            DB_PASS, 
            [
               'namespace' => 'SET NAMES UTF8',
               PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
         );
      }

      return $db;
   }

   //making query to the database
   function dbQuery(string $sql, array $params = []) : PDOStatement {
      $db = dbConnect();
      $query = $db->prepare($sql);
      $query->execute($params);
      
      dbCheckError($query);

      return $query;
   }

   //error handling
   function dbCheckError(PDOStatement $query) : bool {
      $errInfo = $query->errorInfo();
      if($errInfo[0] !== PDO::ERR_NONE) {
         echo $errInfo[2];
         exit();
      } 

      return true;
   }

   //getting last index
   function dbGetLastIndex() : int {
      $db = dbConnect();
      $id = $db->lastInsertId();

      return $id;
   }