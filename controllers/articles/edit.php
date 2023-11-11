<?php
   if($user === null) {
      header('Location: ' . BASE_URL . 'auth/login');
      exit();
   }

   $id = (int)URL_PARAMS['id'];
   $article = articleSelect($id);

   $cats = categoryAll();
   $fields = [
      'title' => $article['title'], 
      'content' => $article['content'], 
      'id_cat' => $article['id_cat']
   ];

   if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $fields['title'] = trim($_POST['title']);
      $fields['content'] = trim($_POST['content']);
      $fields['id_cat'] = (int)$_POST['id_cat'];

      $validationErrors = articleValidate($fields);
      
      if (empty($validationErrors)) {
         articleEdit($fields, $id);
         
         header("Location: ../articles/$id");
         exit();
      }
   } 

   $pageTitle = 'Edit article';
   $pageContent = template('articles/v_edit', [
      'fields' => $fields,
      'cats' => $cats,
      'validationErrors' => $validationErrors
   ]);