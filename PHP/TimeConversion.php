<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TimeConversion {

    /*
     * Complete the 'timeConversion' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */
    function timeConversion($s) {
        return date("H:i:s", strtotime($s));
    }

    /*
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $s = rtrim(fgets(STDIN), "\r\n");
    $result = timeConversion($s);
    fwrite($fptr, $result . "\n");
    fclose($fptr);
    */
}
