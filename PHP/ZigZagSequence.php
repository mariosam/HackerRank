<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ZigZagSequence {

    /*
     * Complete the 'findZigZagSequence' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */
    function findZigZagSequence($arr) {
        //inicializa var de retorno
        $res = array();

        //identifica a metade do array, -1 pq o array inicia em 0.
        $k = ((count($arr)+1)/2)-1;

        //identifica o menor valor do array, q inicia o retorno.
        $menor = min($arr);

        //monta resultado.
        array_search($menor, $arr) > $k 
            ? $res = array_merge( array_slice($arr, array_search($menor, $arr), $k), array_reverse(array_slice($arr, 0, $k+1)) ) 
            : $res = array_merge( array_slice($arr, 0, $k), array_reverse(array_slice($arr, $k, $k+1)) );

        return $res;
    }

    /*
    $_fp = fopen(getenv("OUTPUT_PATH"), "w");
    $t = intval(trim(fgets(STDIN)));
    $n = intval(trim(fgets(STDIN)));
    $arr_temp = rtrim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = findZigZagSequence($arr);
    fwrite($_fp, implode(" ", $result) . "\n");
    fclose($_fp);
    */
}
