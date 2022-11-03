/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Collections;
import java.util.List;
import java.util.stream.Stream;
import static java.util.stream.Collectors.toList;

public class MiniMaxSum {
    
    public static void main(String[] args) throws IOException {
        BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));

        List<Integer> arr = Stream.of(bufferedReader.readLine().replaceAll("\\s+$", "").split(" "))
            .map(Integer::parseInt)
            .collect(toList());

        miniMaxSum(arr);

        bufferedReader.close();
    }

    /*
     * Complete the 'miniMaxSum' function below.
     *
     * The function accepts INTEGER_ARRAY arr as parameter.
     */
    public static String miniMaxSum(List<Integer> arr) {
        //coloca os dados em ordem crescente
        Collections.sort( arr );

        //soma os menores e maiores
        long min = Long.valueOf(arr.get(0))  + Long.valueOf(arr.get(1)) + Long.valueOf(arr.get(2)) + Long.valueOf(arr.get(3));
        long max = Long.valueOf(arr.get(1))  + Long.valueOf(arr.get(2)) + Long.valueOf(arr.get(3)) + Long.valueOf(arr.get(4));

        //exibe resultado no console
        System.out.printf("%d %d", min, max);

        //essa linha de return eh apenas para a classe de testes
        return String.format( "%d %d", min, max );
    }
}
