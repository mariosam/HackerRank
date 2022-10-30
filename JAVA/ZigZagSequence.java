/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.IntStream;

public class ZigZagSequence {

    //private static final String ArrayUtils = null;

    public static void main (String[] args) throws java.lang.Exception {
        try (Scanner kb = new Scanner(System.in)) {
            int test_cases = kb.nextInt();
            for(int cs = 1; cs <= test_cases; cs++){
                int n = kb.nextInt();
                 int a[] = new int[n];
                for(int i = 0; i < n; i++){
                    a[i] = kb.nextInt();
                }
                findZigZagSequence(a, n);
            }
        }
   }

    public static int[] findZigZagSequence(int[] arr, int n) {
        //inicializa var de retorno
        int[] res = new int[n];
    
        //identifica a metade do array, -1 pq o array inicia em 0.
        int k = ((arr.length+1)/2)-1;
    
        //identifica o menor valor do array, q inicia o retorno.
        int menor = Arrays.stream(arr).min().getAsInt();
    
        //monta resultado.
        int pos = indexOfIntArray( arr, menor );
        if ( pos > k ) {
            int[] parte1 = Arrays.copyOfRange( arr, pos, arr.length );
            int[] parte2 = Arrays.copyOfRange( arr, 0, k+1 );
            reverse(parte2);

            res = IntStream.concat( Arrays.stream(parte1), Arrays.stream(parte2) ).toArray();
        } else {
            int[] parte1 = Arrays.copyOfRange( arr, 0, k );
            int[] parte2 = Arrays.copyOfRange( arr, k, n );
            reverse(parte2);

            res = IntStream.concat( Arrays.stream(parte1), Arrays.stream(parte2) ).toArray();
        }
    
        //System.out.println(Arrays.toString(res).replaceAll(",", " ").replaceFirst("]","").replaceFirst("[", ""));
        return res;
    }

    private static int indexOfIntArray(int[] array, int key) {
        int returnvalue = -1;
        for (int i = 0; i < array.length; ++i) {
            if (key == array[i]) {
                returnvalue = i;
                break;
            }
        }
        return returnvalue;
    }

    private static void reverse(int a[]) {
        int i, t;
        int n = a.length;
        for (i = 0; i < n / 2; i++) {
            t = a[i];
            a[i] = a[n - i - 1];
            a[n - i - 1] = t;
        }
    }
}
