<?php
namespace App\DesignPattern\Singleton;

/**
 * Singleton classes
 */
class Singleton {

    private static Singleton $instance;
    private int $count;

    private function __construct() {
        $this->count = 0;
     }

    private function __clone() { }

    public static function getInstance(): Singleton {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function incrementCount(int $cnt) {
        $this->count += $cnt;
    }

    public function getCount(): int {
        return $this->count;
    }
  }