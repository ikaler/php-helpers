<?php
namespace App\DesignPattern\Singleton;

/**
 * This singleton supports multiple singletons in the app. 
 * It defines the base features of singleton and subclasses
 * can implement the main logic
 */
class BaseSingleton
{
    /**
     * Instance of the each subclass is store in array
     * @var $instance array
     */
    private static $instance = [];
    
    /**
     * Actual singleton class constructor should be private
     * but since we are going to use this as a base class
     * so that why we are making it protected
     */
    protected function __construct() {}

    /**
     * Cloning and serialization not permitted
     */
    protected function __clone() { }

    /**
     * This method will be used to get instance of the class
     * 
     * @return $instance
     */
    public static function getInstance() {
        $subClass = static::class;
        if (!isset(self::$instance[$subClass])) {
            self::$instance[$subClass] = new static();
        }

        return self::$instance[$subClass];
    }

}
