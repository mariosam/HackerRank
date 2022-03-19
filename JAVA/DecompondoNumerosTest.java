/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class DecompondoNumerosTest {
    
    @Test
	public void testDecompondoNumeros() throws Exception {
		//Test 1
		int[] want = null;
		int[] got = DecompondoNumeros.decompNumbers(1, 21);
        assertArrayEquals(want, got);
		//Test 2
		want = new int[] {3666,4566,4656,4665,5466,5556,5565,5646,5655,5664,6366,6456,6465,6546,6555,6564,6636,6645,6654,6663};
		got = DecompondoNumeros.decompNumbers(6, 21);
        assertArrayEquals(want, got);
	}

}
