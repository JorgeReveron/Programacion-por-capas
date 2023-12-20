<?php
$router->map("GET", "/", "CarController#index", "index");
$router->map("GET", "/car", "CarController#index", "car_index");
$router->map("GET", "/car/show", "CarController#show", "car_show");
$router->map("GET", "/client", "ClientController#index", "client_index");
$router->map("GET", "/client/[i:id]", "ClientController#show", "client_show");
$router->map("GET", "/client/[i:id]/cars", "CarController#showCarClient", "car_client_show");