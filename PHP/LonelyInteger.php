<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LonelyInteger {

    /*
     * Complete the 'lonelyinteger' function below.
     *
     * The function is expected to return an INTEGER.
     * The function accepts INTEGER_ARRAY a as parameter.
     */
    function lonelyinteger($a) {
        //coloca os dados em ordem crescente
        sort($a);

        //inicializa resultado
        $res = $a[0];

        //verifica se o num atual eh diferente do anterior e do proximo
        for ( $i = 1; $i < count($a); $i++ ) {
            if ( $i == count($a)-1 || $a[$i] != $a[$i-1] && $a[$i] != $a[$i+1] ) {
                $res = $a[$i];
                break;
            }
        }

        return $res;
    }

    /*
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $n = intval(trim(fgets(STDIN)));
    $a_temp = rtrim(fgets(STDIN));
    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = lonelyinteger($a);
    fwrite($fptr, $result . "\n");
    fclose($fptr);
    */
}
