<?php
	if($user === null) {
      header('Location: ' . BASE_URL . 'auth/login');
      exit();
   }

	$id = (int)URL_PARAMS['id'];
   $pageTitle = 'All categories';
   
	if($id) {
      categoryDelete($id);
      $cats = categoryAll();
		$pageContent = template('cats/v_all', [
         'cats' => $cats
      ]);
	} else {
		header('HTTP/1.1 404 Not Found');
		$pageContent = template('errors/v_404');
	}