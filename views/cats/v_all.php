<h1>Categories</h1>
<?php if($isAdmin): ?>
	<a href="<?=BASE_URL?>cats/add">Add Category</a>
<?php endif; ?>
<div class="articles d-flex flex-wrap align-items-start">
	<?php foreach($cats as $cat): ?>	
		<div class="article card bg-primary-subtle mt-5 me-5" style="width: 18rem;">
			<div class="card-body d-flex justify-content-around align-items-center">
				<a href="<?=BASE_URL?>cats/cat/<?=$cat['id_cat']?>" style="color: #333; text-decoration: none">
					<h4 class="card-title mb-0"><?=$cat['title']?></h4>
				</a>
				<?php if($isAdmin): ?>
					<a href="<?=BASE_URL?>cats/delete/<?=$cat['id_cat']?>" class="btn btn-primary">Delete</a>
				<?php endif; ?>
			</div>
		</div>
	<?php endforeach; ?>
</div>