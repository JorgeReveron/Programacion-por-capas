<?php
require_once "../vendor/autoload.php";

// Router system
$router = new AltoRouter();
// List of routes
// $router->map("GET", "/", "CarController#index", "index");
// $router->map("GET", "/car", "CarController#index", "car_index");
// $router->map("GET", "/car/show", "CarController#show", "car_show");
// $router->map("GET", "/client", "ClientController#index", "client_index");
// $router->map("GET", "/client/[i:id]", "ClientController#show", "client_show");
// $router->map("GET", "/client/[i:id]/cars", "CarController#showCarClient", "car_client_show");
require_once "../src/routes/router.php";


// End of list
$match = $router->match();
if($match) {
 $target = $match["target"];
 if(is_string($target) && strpos($target, "#") !== false) {
     list($controller, $action) = explode("#", $target);
     $controller = "Jorge\\ProgramacionPorCapas\\Controllers\\" . $controller;
     $controller = new $controller;
     $controller->$action($match["params"]);
 } else {
     if(is_callable($match["target"])) 
call_user_func_array($match["target"], $match["params"]);
     else require $match["target"];
 }
} else {
 echo "Ruta no válida";
 die();
}
