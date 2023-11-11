<?php 
   session_start();
   include_once('init.php');

   $user = authGetUser();
   $isAdmin = $user['status'] === 'admin';
   
   $pageCanonical = HOST . BASE_URL;
   $uri = $_SERVER['REQUEST_URI'];
   $badUrl = BASE_URL . 'index.php';

   if(strpos($uri, $badUrl) === 0) {
      $cname = 'errors/e404';
   } else {
      // Получение URL из querysystemurl
      $url = $_GET['querysystemurl'] ?? '';
      $routerRes = parseUrl($url, $routes);
      $cname = $routerRes['controller'];
      define('URL_PARAMS', $routerRes['params']);

      if(hasDoubleSlashes($uri)) {
         $redirectUrl = HOST . $preg_replace('/\/{2,}/', '/', $uri);

         header("HTTP/1.1 301 Moved Permanently");
         header("Location: $redirectUrl");
         exit();
      }

      $urlLen = strlen($url);
      
      if ($urlLen > 0 && $url[$urlLen - 1] == '/') {
         $url = substr($url, 0, $urlLen - 1);
      }

      $pageCanonical .= $url;
   }
   
   $path = "controllers/$cname.php";
   $pageTitle = 'Error 404';
   $pageContent = '';

   if (!file_exists($path)) {
      header('HTTP/1.1 404 Not Found');
      $pageContent = template('errors/v_404');
   }
   
   include_once($path);

   $html = template('base/v_main', [
      'title' => $pageTitle,
      'content' => $pageContent,
      'canonical' => $pageCanonical,
      'isLogged' => !!$user,
      'isAdmin' => $isAdmin,
   ]);

   echo $html;