<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DiagonalDifference.php");

class DiagonalDifferenceTest extends TestCase {

    public function testDiagonalDifference() {
        $obj = new DiagonalDifference();
        //Test 1
        $want = 15;
        $got = $obj->diagonalDifference( [[11, 2, 4], [4, 5, 6], [10, 8, -12]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->diagonalDifference( [[1, 2, 3], [4, 5, 6], [9, 8, 9]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }

}
