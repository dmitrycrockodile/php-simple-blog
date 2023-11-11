<h1>Create new category</h1>
<div class="content d-flex justify-content-center w-100">
   <form class="appForm mt-4" style="width: 500px;" method="post">
      <div class="form-group">
         <label for="msgFormTitle">Title: </label>
         <input type="text" name="title" class="form-control" id="msgFormTitle" value="<?=$fields['title']?>"><br>
      </div>
      <button class="btn btn-success">Send</button>
   
      <div class="alert error-list">
         <?php foreach($validationErrors as $error): ?>
            <p class="text-danger"><?=$error?></p>
         <?php endforeach; ?>
      </div>
   </form>
</div>