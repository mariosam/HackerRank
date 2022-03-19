/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class DecompondoNumeros {
    
    public static void main(String[] args) throws IOException {
        BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(System.in));
        BufferedWriter bufferedWriter = new BufferedWriter(new FileWriter(System.getenv("OUTPUT_PATH")));
        int maxDigit = Integer.parseInt(bufferedReader.readLine().trim());
        int sumDigit = 21;

        int[] result = decompNumbers(maxDigit, sumDigit);

        bufferedWriter.write(String.valueOf(result));
        bufferedWriter.newLine();

        bufferedReader.close();
        bufferedWriter.close();
    }
 
    /**
     * check all possibilities
     */
    public static int[] decompNumbers(int max, int sum) {
        List<Integer> result = new ArrayList<Integer>();

        //percorre todo o range de possibilidades
        for ( int i=1000; i <= 7770; i++ ) {
            //separa os numeros (em um array)
            String[] fourNum = Integer.toString(i).split("");
            
            //pula para o proximo numero caso tenha algum numero maior do que o maximo informado
            String x = Collections.max(Arrays.asList( fourNum ));
            if ( Integer.parseInt(x) > max ) continue;
            
            //faz a soma dos 4 digitos
            int sumAll = Integer.parseInt(fourNum[0])+Integer.parseInt(fourNum[1])+Integer.parseInt(fourNum[2])+Integer.parseInt(fourNum[3]);

            //salva o numero se a soma deles for igual ao informado (21)
            if ( sumAll == sum ) {
                result.add( i );
            }
        }
        
        return result.size() > 0 ? result.stream().mapToInt(Integer::intValue).toArray() : null;
    }
}
