<div class="content">
	<div class="article">
		<a href="<?=BASE_URL?>cats/cat/<?=$article['id_cat']?>"><?=$article['cat']?></a>
		<h1><?=$article['title']?></h1>
		<div><?=$article['content']?></div>
		<?php if($isAuthor): ?>
			<hr>
			<a href="<?=BASE_URL?>delete/<?=$id?>">Delete</a>
			<a href="<?=BASE_URL?>edit/<?=$id?>">Edit article</a>
		<?php endif; ?>
	</div>
</div>
<hr>
<a href="<?=BASE_URL?>">Move to main page</a>