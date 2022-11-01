<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MiniMaxSum.php");

class MiniMaxSumTest extends TestCase {

    public function testMiniMaxSum() {
        $obj = new MiniMaxSum();
        //Test 1
        $want = "10 14";
        $got = $obj->miniMaxSum( [1, 2, 3, 4, 5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "16 24";
        $got = $obj->miniMaxSum( [1, 3, 5, 7, 9] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "299 9271";
        $got = $obj->miniMaxSum( [7, 69, 2, 221, 8974] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = "1673711044 2486347135";
        $got = $obj->miniMaxSum( [140638725, 436257910, 953274816, 734065819, 362748590] );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }

}
