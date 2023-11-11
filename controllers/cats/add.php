<?php

if($user === null) {
   header('Location: ' . BASE_URL . 'auth/login');
   exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $fields['title'] = trim($_POST['title']);
   $validationErrors = categoryValidate($fields);

   if (empty($validationErrors)) {
      categoryAdd($fields);

      //redirection to the created category 
      header("Location: ../cats");
      exit();
   } else {
      $fields = ['title' => ''];
   }
}

$pageTitle = 'Add category';
$pageContent = template('cats/v_add', [
   'fields' => $fields,
   'validationErrors' => $validationErrors,
]);