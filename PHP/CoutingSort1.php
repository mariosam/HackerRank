<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CoutingSort1 {

    /*
     * Complete the 'countingSort' function below.
     *
     * The function is expected to return an INTEGER_ARRAY.
     * The function accepts INTEGER_ARRAY arr as parameter.
     */
    function countingSort($arr) {
        //coloca os dados em ordem crescente
        sort($arr);
    
        //inicializa retorno com array zerado
        $res = [];
        for ( $i = 0; $i < 100; $i++ ) $res[$i] = 0;

        //percorre o array somando as quantidades
        for ( $i = 0; $i < count($arr); $i++ ) $res[$arr[$i]]++;

        return $res;
    }

    /*
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $n = intval(trim(fgets(STDIN)));
    $arr_temp = rtrim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = countingSort($arr);
    fwrite($fptr, implode(" ", $result) . "\n");
    fclose($fptr);
    */
}
