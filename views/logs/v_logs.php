<div class="content">
   <div class="list-group" style="width: fit-content">
   <?php foreach($logs as $log): ?>
      <a href="<?=BASE_URL?>logs/<?=$log?>" class="list-group-item list-group-item-action mt-2"><?=$log?></a>
   <?php endforeach?>
   </div>
</div>