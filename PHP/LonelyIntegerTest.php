<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LonelyInteger.php");

class LonelyIntegerTest extends TestCase {

    public function testLonelyInteger() {
        $obj = new LonelyInteger();
        //Test 1
        $want = 4;
        $got = $obj->lonelyinteger( [1, 2, 3, 4, 3, 2, 1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->lonelyinteger( [0, 0, 1, 2, 1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->lonelyinteger( [1, 1, 2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 2;
        $got = $obj->lonelyinteger( [1, 2, 3, 4, 3, 4, 1] );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }

}
