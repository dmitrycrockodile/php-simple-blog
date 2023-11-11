<?php
   //Get categories
   function categoryAll() : array {
      //sql request
      $sql = "SELECT * FROM cats";
      $query = dbQuery($sql);

      $categories = $query->fetchAll();

      return $categories;
   }

   //Get one category
   function categoryOne(int $id) : string {
      //sql request
      $sql = "SELECT title FROM cats WHERE id_cat = $id";
      $query = dbQuery($sql);

      $cat = $query->fetch();

      return $cat['title'] ?? '';
   }

   //Delete category
   function categoryDelete(int $id) : bool {
      //sql request
      $sql = "DELETE FROM cats WHERE id_cat = $id";
      dbQuery($sql);

      return true;
   }

   //Add category
   function categoryAdd(array $fields) : bool {
      //sql request
      $sql = "INSERT INTO cats (title) VALUES (:title)";
      dbQuery($sql, $fields);

      return true;
   }

   //Validate category
   function categoryValidate(array &$fields) : array {
      $errors = [];
      $titleLen = mb_strlen($fields['title'], 'UTF-8');

      if ($titleLen < 2) {
         $errors[] = 'Title must contain minimum 2 characters!';
      }

      $fields['title'] = htmlspecialchars($fields['title']);

      return $errors;
   }