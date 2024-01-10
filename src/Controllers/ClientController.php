<?php
namespace Jorge\ProgramacionPorCapas\Controllers;

class ClientController {
  private $router;

  // public function __construct($router){
  //   $this->router = $router;
  // }
  
  public function index() {
    // echo "Esto es index de ClientController";
    global $blade;
    $vip = true;
    $clients = ["Pepe","Marta","Lucia","Andres"];
    echo $blade->view()->make("client.index", compact("vip","clients"))->render();
  }
  public function show($params) {
    $id = $params["id"];
    echo "<p>Mostrando el cliente con el id: $id</p>";
    $url = $this->router->generate("car_client_show", ["id" => $id]);
    echo "<a href='$url'>Muestra los coches del usuario</a>";
  }
}