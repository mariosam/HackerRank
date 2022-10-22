/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import java.util.ArrayList;
import java.util.List;
import org.junit.Test;

public class LonelyIntegerTest {
    
    @Test
	public void testLonelyInteger() throws Exception {
		//Test 1
		int want = 4;
        List<Integer> ops = new ArrayList<Integer>();
        ops.add(1);
        ops.add(2);
        ops.add(3);
        ops.add(4);
        ops.add(3);
        ops.add(2);
        ops.add(1);
		int got = LonelyInteger.lonelyinteger( ops );
        assertEquals(want, got);
		//Test 2
		want = 2;
        ops = new ArrayList<>();
        ops.add(0);
        ops.add(0);
        ops.add(1);
        ops.add(2);
        ops.add(1);
		got = LonelyInteger.lonelyinteger( ops );
        assertEquals(want, got);
		//Test 3
		want = 2;
        ops = new ArrayList<>();
        ops.add(1);
        ops.add(1);
        ops.add(2);
		got = LonelyInteger.lonelyinteger( ops );
        assertEquals(want, got);
		//Test 4
		want = 2;
        ops = new ArrayList<>();
        ops.add(1);
        ops.add(2);
        ops.add(3);
        ops.add(4);
        ops.add(3);
        ops.add(4);
        ops.add(1);
		got = LonelyInteger.lonelyinteger( ops );
        assertEquals(want, got);
	}

}
