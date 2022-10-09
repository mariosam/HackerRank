/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class PlusMinusTest {
    
    @Test
	public void testPlusMinus() throws Exception {
		//Test 1
		String[] want = new String[] {"0,500000", "0,333333", "0,166667"};
        List<Integer> ops = new ArrayList<Integer>();
        ops.add(-4);
        ops.add(3);
        ops.add(-9);
        ops.add(0);
        ops.add(4);
        ops.add(1);
		String[] got = PlusMinus.plusMinus( ops );
        assertArrayEquals(want, got);
		//Test 2
		want = new String[] {"0,375000", "0,375000", "0,250000"};
        ops = new ArrayList<>();
        ops.add(1);
        ops.add(2);
        ops.add(3);
        ops.add(-1);
        ops.add(-2);
        ops.add(-3);
        ops.add(0);
        ops.add(0);
		got = PlusMinus.plusMinus( ops );
        assertArrayEquals(want, got);
	}

}
