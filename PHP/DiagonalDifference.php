<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DiagonalDifference {

    /*
     * Complete the 'diagonalDifference' function below.
     *
     * The function is expected to return an INTEGER.
     * The function accepts 2D_INTEGER_ARRAY arr as parameter.
     */
    function diagonalDifference($arr) {
        $d1 = 0;
        $d2 = 0;

        for ( $i = 0, $j = count($arr)-1; $i < count($arr); $i++, $j-- ) {
            //soma diagonal up-left to down-right
            $d1 += $arr[$i][$i];

            //soma diagonal down-lef to up-right
            $d2 += $arr[$j][$i];
        }

        return abs($d1 - $d2);
    }

    /*
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $n = intval(trim(fgets(STDIN)));
    $arr = array();

    for ($i = 0; $i < $n; $i++) {
        $arr_temp = rtrim(fgets(STDIN));

        $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = diagonalDifference($arr);
    fwrite($fptr, $result . "\n");
    fclose($fptr);
    */
}
