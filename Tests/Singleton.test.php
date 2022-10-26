<?php 

namespace Tests;

use Creational\Singleton\AppSettingsSingleton\AppSettings;
use PHPUnit\Framework\TestCase;

class Singleton extends TestCase
{
    public function testCanCreateGetInstance()
    {
        $s1 = AppSettings::getInstance();
        $s2 = AppSettings::getInstance();
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.";
        } else {
            echo "Singleton failed, variables contain different instances.";
        }

        $this->assertInstanceOf(AppSettings::class, $s1);

    }


}