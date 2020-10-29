<?php
namespace App\DesignPattern\Singleton;

/**
 * Singleton classes
 */
class Singleton {

    private static $instance = null;
    private int $count = 0;

    private function __construct() {
        $this->count++;
     }

    private function __clone() { }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function incrementCount($cnt) {
        $this->count += $cnt;
    }

    public function getCount() {
        return $this->count;
    }
  }