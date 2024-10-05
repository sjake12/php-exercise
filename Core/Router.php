<?php
namespace Core;
class Router {
  protected array $routes = [];

  public function get($uri, $controller): void
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'GET'
    ];
  }
  public function post($uri, $controller): void {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'POST'
    ];
  }
  public function put($uri, $controller): void {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'PUT'
    ];
  }
  public function delete($uri, $controller): void {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => 'DELETE'
    ];
  }

  public function route($uri, $method){
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri){
        return require base_path($route['controller']);
      }
    }

    $this->abort();
    return null;
  }

  protected function abort($code = 404): void {
    http_response_code($code);

    require base_path("./views/{$code}.php");

    die();
  }
}


//
//function routeToController($uri, $routes): void
//{
//    if (array_key_exists($uri, $routes)) {
//        require base_path($routes[$uri]);
//    } else {
//        abort();
//    }
//}
//function abort($code = 404)
//{
//    http_response_code($code);
//
//    require base_path("./views/{$code}.php");
//
//    die();
//}
//

