<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DecompondoNumeros.php");

class DecompondoNumerosTest extends TestCase {

    public function testDecompondoNumeros() {
        $obj = new DecompondoNumeros();
        //Test 1
        $want = null;
        $got = $obj->decompNumbers( 1, 21 );
        $this->assertEquals($want, $got);
        //Test 2
        $want = [3666,4566,4656,4665,5466,5556,5565,5646,5655,5664,6366,6456,6465,6546,6555,6564,6636,6645,6654,6663];
        $got = $obj->decompNumbers( 6, 21 );
        $this->assertEquals($want, $got);
    }

}
