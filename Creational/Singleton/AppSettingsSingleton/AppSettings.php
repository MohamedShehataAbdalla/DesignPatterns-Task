<?php

namespace Creational\Singleton\AppSettingsSingleton;

class AppSettings
{
    private static self $instance;

    private function __construct(){}

    public static function getInstance(): self
    {
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}


 function clientCode()
{
    $s1 = AppSettings::getInstance();
    $s2 = AppSettings::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();