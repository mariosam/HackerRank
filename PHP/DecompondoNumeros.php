<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+decompNumbers( 6, 21 );

class DecompondoNumeros {

    /**
     * check all possibilities
     */
    function decompNumbers($max, $sum) {
        $result = [];

        //percorre todo o range de possibilidades
        for ( $i=1000; $i <= 7770; $i++) {
            //separa os numeros (em um array)
            $fourNum = str_split( $i );
            
            //pula para o proximo numero caso tenha algum numero maior do que o maximo informado
            if ( max($fourNum) > $max ) continue;
            
            //faz a soma dos 4 digitos
            $sumAll = $fourNum[0]+$fourNum[1]+$fourNum[2]+$fourNum[3];

            //salva o numero se a soma deles for igual ao informado (21)
            if ( $sumAll == $sum ) {
                array_push( $result, $i );
            }
        }
        
        return count($result) > 0 ? $result : null;
    }

    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    $fptr = fopen(getenv("OUTPUT_PATH"), "w");
    $maxDigit = intval(trim(fgets(STDIN)));
    $sumDigit = 21;

    $arr = decompNumbers($maxDigit, $sumDigit);

    if ( $arr === null ) {
        fwrite($fptr, "null" . "\n");   
    } else {
        foreach ($arr as &$num) {
            fwrite($fptr, $num . "\n");   
        }
    }

    fclose($fptr);
}
