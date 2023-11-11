<?php 
   //check if controller name contains inly acceptable characters 
   function pathNameCheck(string $cname) : bool {
      if (preg_match('/^[A-Za-z0-9_-]+$/', $cname)) {
         return true;
      }

      return false;
   }

   //returns template in string mode 
   function template(string $path, array $vars = []) : string {
      $systemTemplateRendererIntoFullPath = "views/{$path}.php";
      extract($vars);

      ob_start();
      include($systemTemplateRendererIntoFullPath);
      return ob_get_clean();
   }

   //parses URL into 
   function parseUrl(string $url, array $routes = []) : array {
      $res = [
         'controller' => 'errors/e404',
         'params' => []
      ];

      foreach($routes as $route) {
         $matches = [];

         if (preg_match($route['test'], $url, $matches)) {
            $res['controller'] = $route['controller'];

            if(isset($route['params'])) {
               foreach($route['params'] as $key => $val) {
                  $res['params'][$key] = $matches[$val];
               }
            }

            break;
         }
      }

      return $res;
   }

   //Checks if quantity of "/" more than 1
   function hasDoubleSlashes(string $url) : bool {
      $pattern = '/\/{2,}/';

      return !!preg_match($pattern, $url);
   }