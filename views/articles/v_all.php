<div class="articles d-flex flex-wrap align-items-start">
	<?php foreach($articles as $article): ?>
		<div class="article card bg-primary-subtle mt-5 me-4" style="width: 18rem;">
			<div class="card-body">
				<h4 class="card-title"><?=$article['title']?></h4>
				<p class="card-text"><?=(substr($article['content'], 0, 100) . '...')?></p>
				<a href="<?=BASE_URL?>articles/<?=$article['id_article']?>" class="btn btn-primary">Read more</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>