<main>
   <div class="text-center mt-5">
      <h1>Log In</h1>
   </div>
   <div class="d-flex justify-content-center mt-5 w-100">
      <form method="post" class="w-50 mt-2">
         <div class="form-group">
            <label for="auth-login">Login</label>
            <input type="text" class="form-control" id="auth-login" name="login" value="<?=$login?>" placeholder="Your login"> 
         </div>
         <div class="form-group mt-3">
            <label for="auth-password">Password</label>
            <input type="password" class="form-control" id="auth-password" name="password" placeholder="Your passsword"> 
         </div>
         <div class="form-check mt-2">
            <input class="form-check-input" type="checkbox" id="login-remember" name="remember">
            <label class="form-check-label" for="login-remember">
               Remember auth to 1 month
            </label>
         </div>
         <hr>
         <div class="d-flex align-items-center">
            <button class="btn btn-primary">Log In</button>
            <a class="ms-4" href="<?=BASE_URL?>auth/register">Register</a>
         </div>
         <?php if($authErr): ?>
            <hr>
            <div class="alert alert-danger">
               Incorrect auth data
            </div>
         <?php endif; ?>
      </form>
   </div>
</main>