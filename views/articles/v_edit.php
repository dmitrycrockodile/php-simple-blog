<h1>Edit article</h1>
<div class="content d-flex justify-content-center w-100">
   <form class="appForm mt-4" style="width: 500px;" method="post">
   <div class="form-group mb-3">
      <label for="msgFormCat">Category: </label>
      <select class="form-select" name="id_cat" id="msgFormCat" aria-label="Default select example">
         <?php foreach($cats as $cat): ?>
            <option 
               value="<?=$cat['id_cat']?>"
               <?=($cat['id_cat'] == $fields['id_cat'] ? 'selected' : '')?>
            ><?=$cat['title']?></option>
         <?php endforeach; ?>
      </select>
   </div>
   <div class="form-group">
      <label for="msgFormTitle">Title: </label>
      <input type="text" name="title" class="form-control" id="msgFormTitle" value="<?=$fields['title']?>"><br>
   </div>
   <div class="form-group">
      <label for="msgFormText">Content: </label>
      <textarea type="text" name="content" class="form-control" id="msgFormText"><?=$fields['content']?></textarea><br>
   </div>
   <button class="btn btn-success">Send</button>

   <div class="alert error-list">
      <?php foreach($validationErrors as $error): ?>
         <p class="text-danger"><?=$error?></p>
      <?php endforeach; ?>
   </div>
</form>
</div>