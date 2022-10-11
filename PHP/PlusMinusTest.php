<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PlusMinus.php");

class PlusMinusTest extends TestCase {

    public function testPlusMinus() {
        $obj = new PlusMinus();
        //Test 1
        $want = ["0.500000", "0.333333", "0.166667"];
        $got = $obj->plusMinus( [-4, 3, -9, 0, 4, 1] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["0.375000", "0.375000", "0.250000"];
        $got = $obj->plusMinus( [1, 2, 3, -1, -2, -3, 0, 0] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }

}
