/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class ZigZagSequenceTest {
    
    @Test
	public void testZigZagSequence() throws Exception {
		//Test 1
		int[] want = {1, 4, 5, 3, 2};
		int[] got = ZigZagSequence.findZigZagSequence( new int[]{2, 3, 5, 1, 4}, 5 );
        assertArrayEquals(want, got);
		//Test 2
		want = new int[] {1, 2, 3, 7, 6, 5, 4};
		got = ZigZagSequence.findZigZagSequence( new int[]{1, 2, 3, 4, 5, 6, 7}, 7 );
        assertArrayEquals(want, got);
	}

}
