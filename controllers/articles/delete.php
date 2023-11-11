<?php

	if($user === null) {
      header('Location: ' . BASE_URL . 'auth/login');
      exit();
   }

	$res = '';
	$id = (int)URL_PARAMS['id'];
	$pageTitle = 'Delete article';

	if($id) {
		articleDelete($id);
		$res = 'Your article was successfully removed';
		$pageContent = template('articles/v_delete', [
			'res' => $res
		]);
	} else {
		header('HTTP/1.1 404 Not Found');
		$pageContent = template('errors/v_404');
	}