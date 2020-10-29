<?php
require_once "../vendor/autoload.php";

use App\DesignPattern\Singleton\Database;
use App\DesignPattern\Singleton\Logger;

Logger::log("Log message");

$conn = Database::connect();
