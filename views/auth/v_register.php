<main>
   <div class="text-center mt-3">
      <h1>Registration Form</h1>
   </div>

   <div class="d-flex justify-content-center mt-5 w-100">
      <form method="post" class="w-50 mt-2">
         <div class="form-group">
            <label for="auth-login">Login</label>
            <input type="text" class="form-control" id="auth-login" name="login" value="<?=$fields['login']?>" placeholder="Your login"> 
         </div>
         <div class="form-group mt-3">
            <label for="auth-email">Email</label>
            <input type="email" class="form-control" id="auth-email" name="email" value="<?=$fields['email']?>" placeholder="Your email"> 
         </div>
         <div class="form-group mt-3">
            <label for="auth-name">Name</label>
            <input type="text" class="form-control" id="auth-name" name="name" value="<?=$fields['name']?>" placeholder="Your name"> 
         </div>
         <div class="form-group mt-3">
            <label for="auth-password">Password</label>
            <input type="password" class="form-control" id="auth-password" name="password" placeholder="Your passsword"> 
         </div>
         <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="auth-status" name="status">
            <label class="form-check-label" for="auth-status">
               Register as admin
            </label>
         </div>
         <hr>
         <button class="btn btn-primary">Register</button>
         <?php if($validationErrors): ?>
            <hr>
            <ul class="alert alert-danger">
               <?php foreach($validationErrors as $err): ?>
               <li style="list-style-type: none;"><?=$err?></li>
               <?php endforeach; ?>
            </ul>
         <?php endif; ?>
      </form>
   </div>
</main>