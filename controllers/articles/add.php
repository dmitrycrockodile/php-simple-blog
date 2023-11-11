<?php
   
   if($user === null) {
      header('Location: ' . BASE_URL . 'auth/login');
      exit();
   }
   
   $cats = categoryAll();
   
   if($_SERVER['REQUEST_METHOD'] === 'POST') {
      $fields['title'] = trim($_POST['title']);
      $fields['content'] = trim($_POST['content']);
      $fields['id_cat'] = (int)$_POST['id_cat'];
      $fields['id_user'] = (int)$user['id_user'];

      $validationErrors = articleValidate($fields);

      if (empty($validationErrors)) {
			articlesAdd($fields);

         //redirection to the created artcle 
         $id = dbGetLastIndex();
         header("Location: articles/$id");
         exit();
      } else {
         $fields = ['title' => '', 'content' => '', 'id_cat' => ''];
      }
   }

   $pageTitle = 'Add post';
   $pageContent = template('articles/v_add', [
      'fields' => $fields,
      'cats' => $cats,
      'validationErrors' => $validationErrors,
   ]);