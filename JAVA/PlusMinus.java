/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.List;
import java.util.stream.Stream;
import static java.util.stream.Collectors.toList;

public class PlusMinus {

    public static void main(String[] args) throws IOException {
        BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));

        int n = Integer.parseInt(bufferedReader.readLine().trim());

        List<Integer> arr = Stream.of(bufferedReader.readLine().replaceAll("\\s+$", "").split(" "))
            .map(Integer::parseInt)
            .collect(toList());

        plusMinus(arr);

        bufferedReader.close();
    }

    /*
     * Complete the 'plusMinus' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */
    public static String[] plusMinus(List<Integer> arr) {
        double positivos=0;
        double negativos=0;
        double zeros=0;

        //primeiro soma a quantidade de cada setor
        for ( int i = 0; i < arr.size(); i++ ) {
            if ( arr.get(i) == 0 ) {
                zeros++;
            } else if ( arr.get(i) > 0 ) {
                positivos++;
            } else {
                negativos++;
            }
        }

        //divide pela quantidade de itens
        positivos = positivos / arr.size();
        negativos = negativos / arr.size();
        zeros = zeros / arr.size();

        //exibe retorno no console
        System.out.println( String.format( "%.6f", positivos ));
        System.out.println( String.format( "%.6f", negativos ));
        System.out.println( String.format( "%.6f", zeros ));

        //essa linha de return eh apenas para a classe de testes
        return new String[]{ String.format( "%.6f", positivos ), String.format( "%.6f", negativos ), String.format( "%.6f", zeros ) };
    }
}
