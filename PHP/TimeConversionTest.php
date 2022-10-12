<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TimeConversion.php");

class TimeConversionTest extends TestCase {

    public function testTimeConversion() {
        $obj = new TimeConversion();
        //Test 1
        $want = "19:05:45";
        $got = $obj->timeConversion( "07:05:45PM" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }

}
