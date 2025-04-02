<?php

namespace App\Generative\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct() {}
    private function __clone() {}
    public function __wakeup() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): void
    {
        echo 'DoSomething from Singleton';
    }
}