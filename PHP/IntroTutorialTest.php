<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NomeDaClasseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("IntroTutorial.php");

class IntroTutorialTest extends TestCase {

    public function testIntroTutorial() {
        $obj = new IntroTutorial();
        //Test 1
        $want = 1;
        $got = $obj->introTutorial( 4, [1, 4, 5, 7, 9, 12] );
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->introTutorial( 9, [1, 4, 5, 7, 9, 12] );
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->introTutorial( 1, [1, 4, 5, 7, 9, 12] );
        $this->assertEquals($want, $got);
    }

}
