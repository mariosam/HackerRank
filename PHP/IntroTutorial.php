<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+introTutorial( 4, [1, 4, 5, 7, 9, 12] );

class IntroTutorial {

    /*
     * Complete the 'introTutorial' function below.
     *
     * The function is expected to return an INTEGER.
     * The function accepts following parameters:
     *  1. INTEGER V
     *  2. INTEGER_ARRAY arr
     */
    function introTutorial($V, $arr) {
        $result = "";
    
        if ( in_array( $V, $arr ) ) {
            $result = array_search( $V, $arr );
        }
    
        return $result;
    }

    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $V = intval(trim(fgets(STDIN)));
    $n = intval(trim(fgets(STDIN)));
    $arr_temp = rtrim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = introTutorial($V, $arr);

    fwrite($fptr, $result . "\n");
    fclose($fptr);
}
