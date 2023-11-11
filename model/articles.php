<?php 
   //Get all article
   function articlesAll() : array {
      //sql request
      $sql = "SELECT * FROM articles ORDER BY date DESC";   
      $query = dbQuery($sql);

      //getting all data from query
      $articles = $query->fetchAll();

      return $articles;
   }

   //Add article
   function articlesAdd(array $fields) : bool {
      //sql request
      $sql = "INSERT INTO articles (title, content, id_cat, id_user) VALUES (:title, :content, :id_cat, :id_user)";
      dbQuery($sql, $fields);

      return true;
   }

   //Delete article
   function articleDelete(int $id) : bool {
      //sql request
      $sql = "DELETE FROM articles WHERE id_article = $id";
      dbQuery($sql);

      return true;
   }

   //Select article 
   function articleSelect(int $id) : array {
      //sql request
      $sql = "SELECT id_article, title, content, id_cat, id_user FROM articles WHERE id_article = $id";
      $query = dbQuery($sql);

      //getting all data from query
      $article = $query->fetch();

      return $article;
   }

   //Select articles by category ID
   function articleSelectByCategory(int $id_cat) : array {
      //sql request
      $sql = "SELECT id_article, title, content, date, id_cat FROM articles WHERE id_cat = $id_cat";
      $query = dbQuery($sql);

      //getting all data from query
      $articles = $query->fetchAll();

      return $articles;
   }

   //Edit article
   function articleEdit(array $fields, int $id) : bool {
      //sql request
      $sql = "UPDATE articles SET `title`=:title, `content`=:content, `id_cat`=:id_cat WHERE id_article = {$id}";
      dbQuery($sql, $fields);

      return true;
   }

   //Articles validation
   function articleValidate(array &$fields) : array {
      $errors = [];
      $titleLen = mb_strlen($fields['title'], 'UTF-8');
      $textLen = mb_strlen($fields['content'], 'UTF-8');

      if ($titleLen < 2) {
         $errors[] = 'Title must contain minimum 2 characters!';
      }

      if ($textLen < 10 || $textLen > 140) {
         $errors[] = 'Content must contain minimum 10 characters and maximum 140!';
      }

      $fields['title'] = htmlspecialchars($fields['title']);
      $fields['content'] = htmlspecialchars($fields['content']);

      return $errors;
   }