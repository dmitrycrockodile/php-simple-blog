<?php	
	addLog();

	$id = (int)URL_PARAMS['id'];
	$article = articleSelect($id) ?? null;
	$isAuthor = $article['id_user'] === $user['id_user'] || $user['status'] === 'admin';
	
	$article['cat'] = categoryOne($article['id_cat']);
	$hasArticle = ($article !== null);
	$pageTitle = "Article about: {$article['title']}";

	if ($hasArticle) {
		$pageContent = template('articles/v_article', [
			'article' => $article,
			'id' => $id,
			'isAuthor' => $isAuthor
		]);
	} else {
		header('HTTP/1.1 404 Not Found');
		$pageContent = template('errors/v_404');
	}