<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PlusMinus {

    /*
    * Complete the 'plusMinus' function below.
    *
    * The function accepts INTEGER_ARRAY arr as parameter.
    */
    function plusMinus($arr) {
        $positivos=0; $negativos=0; $zeros=0;

        //primeiro soma a quantidade de cada setor
        for ( $i = 0; $i < count($arr); $i++ ) {
            if ( $arr[$i] == 0 ) {
                $zeros++;
            } else if ( $arr[$i] > 0 ) {
                $positivos++;
            } else {
                $negativos++;
            }
        }
    
        //divide pela quantidade de itens
        $positivos = $positivos / count($arr);
        $negativos = $negativos / count($arr);
        $zeros = $zeros / count($arr);
    
        //exibe retorno no console
        echo sprintf("%.6f\n", $positivos);
        echo sprintf("%.6f\n", $negativos);
        echo sprintf("%.6f\n", $zeros);
    
        //essa linha de return eh apenas para a classe de testes
        return [sprintf("%.6f", $positivos), sprintf("%.6f", $negativos), sprintf("%.6f", $zeros)];
    }

    /*
    $n = intval(trim(fgets(STDIN)));
    $arr_temp = rtrim(fgets(STDIN));
    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
    
    plusMinus($arr);
    */
}
