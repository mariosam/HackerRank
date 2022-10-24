<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ZigZagSequence.php");

class ZigZagSequenceTest extends TestCase {

    public function testZigZagSequence() {
        $obj = new ZigZagSequence();
        //Test 1
        $want = [1, 4, 5, 3, 2];
        $got = $obj->findZigZagSequence( [2, 3, 5, 1, 4] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [1, 2, 3, 7, 6, 5, 4];
        $got = $obj->findZigZagSequence( [1, 2, 3, 4, 5, 6, 7] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }

}
