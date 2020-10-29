<?php
require_once "../vendor/autoload.php";

use App\DesignPattern\Singleton\Singleton;
use App\DesignPattern\Singleton\Database;
use App\DesignPattern\Singleton\Logger;

$obj1 = Singleton::getInstance();
$obj1->incrementCount(5);
echo "Obj1 Count: " . $obj1->getCount();

$obj2 = Singleton::getInstance();
$obj2->incrementCount(2);
echo "<br>Obj2 Count: " . $obj2->getCount();


Logger::log("Log message");

$conn = Database::connect();
