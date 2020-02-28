<?php
require "../controller/controller.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode((file_get_contents("php://input")));

$controller = new Controller($_SERVER["REQUEST_METHOD"], $_GET["request"], $data);
$controller->processRequest();