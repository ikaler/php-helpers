<?php
namespace App\DesignPattern\Singleton;

class Logger extends BaseSingleton {

    private $handle;

    protected function __construct()
    {
        $this->handle = fopen("php://stdout", 'w');
    }

    public function writeLog(string $message): void
    {
        $dateTime = date('Y-m-d H:i:s');
        fwrite($this->handle, "[$dateTime]: $message\n");
    }

    public static function log($message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}