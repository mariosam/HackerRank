<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MiniMaxSum {

    /*
    * Complete the 'plusMinus' function below.
    *
    * The function accepts INTEGER_ARRAY arr as parameter.
    */
    function miniMaxSum($arr) {
        //coloca os dados em ordem crescente
        sort($arr);
    
        //soma os menores e maiores
        $min = $arr[0] + $arr[1] + $arr[2] + $arr[3];
        $max = $arr[1] + $arr[2] + $arr[3] + $arr[4];
    
        //exibe resultado no console
        echo($min.' '.$max);
    
        //essa linha de return eh apenas para a classe de testes
        return sprintf("%d %d", $min, $max);
    }

    /*
    $arr_temp = rtrim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    miniMaxSum($arr);
    */
}
