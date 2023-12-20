<?php
namespace Jorge\ProgramacionPorCapas\Controllers;

class CarController {
  public function index() {
    echo "Esto es index de CarController";
  }
  public function show() {
    echo "Esto es show de CarController";
  }
  public function showCarClient($params) {
    $id = $params["id"];
    echo "Muestra todos los coches del cliente $id";
  }
}