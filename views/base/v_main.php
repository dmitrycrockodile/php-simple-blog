<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="canonical" href="<?=$canonical?>">
   <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
   <title><?=$title?></title>
</head>
<body class="bg-info-subtle d-flex flex-column h-100 justify-content-between min-vh-100">
   <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
         <a href="<?=BASE_URL?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">&#1421;</span>
            <span class="fs-4">Simple header</span>
         </a>
         <nav class="site-nav">
            <div class="container">
               <ul class="nav nav-pills">
                  <li class="nav-item"><a href="<?=BASE_URL?>" class="nav-link active">Home</a></li>
                  <li class="nav-item"><a href="<?=BASE_URL?>add" class="nav-link">Add</a></li>
                  <li class="nav-item"><a href="<?=BASE_URL?>cats" class="nav-link">Categories</a></li>
                  <?php if($isAdmin): ?>
                     <li class="nav-item"><a href="<?=BASE_URL?>logs" class="nav-link">Logs</a></li>
                  <?php endif; ?>
                  <?php if($isLogged): ?>
                     <li class="nav-item"><a href="<?=BASE_URL?>auth/logout" class="nav-link">Log Out</a></li>
                  <?php else: ?>
                     <li class="nav-item"><a href="<?=BASE_URL?>auth/register" class="nav-link">Register</a></li>
                     <li class="nav-item"><a href="<?=BASE_URL?>auth/login" class="nav-link">Log In</a></li>
                  <?php endif; ?>
               </ul>
            </div>
         </nav>
      </header>
   </div>
   <div class="site-content flex-fill">
      <div class="container">
         <?=$content?>
      </div>
   </div>
   <div class="container">
      <footer class="py-3 my-4">
         <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="<?=BASE_URL?>" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="<?=BASE_URL?>add" class="nav-link px-2 text-body-secondary">Add</a></li>
            <li class="nav-item"><a href="<?=BASE_URL?>cats" class="nav-link px-2 text-body-secondary">Categories</a></li>
            <?php if($isAdmin): ?>
               <li class="nav-item"><a href="<?=BASE_URL?>logs" class="nav-link px-2 text-body-secondary">Logs</a></li>
            <?php endif; ?>
         </ul>
         <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
      </footer>
   </div>
</body>
</html>