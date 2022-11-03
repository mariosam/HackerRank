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

public class MiniMaxSumTest {
    
    @Test
	public void testMiniMaxSum() throws Exception {
		//Test 1
		String want = "10 14";
        List<Integer> ops = new ArrayList<Integer>();
        ops.add(1);
        ops.add(2);
        ops.add(3);
        ops.add(4);
        ops.add(5);
		String got = MiniMaxSum.miniMaxSum( ops );
        assertEquals(want, got);
		//Test 2
		want = "16 24";
        ops = new ArrayList<>();
        ops.add(1);
        ops.add(3);
        ops.add(5);
        ops.add(7);
        ops.add(9);
		got = MiniMaxSum.miniMaxSum( ops );
        assertEquals(want, got);
		//Test 3
		want = "299 9271";
        ops = new ArrayList<>();
        ops.add(7);
        ops.add(69);
        ops.add(2);
        ops.add(221);
        ops.add(8974);
		got = MiniMaxSum.miniMaxSum( ops );
        assertEquals(want, got);
		//Test 4
		want = "1673711044 2486347135";
        ops = new ArrayList<>();
        ops.add(140638725);
        ops.add(436257910);
        ops.add(953274816);
        ops.add(734065819);
        ops.add(362748590);
		got = MiniMaxSum.miniMaxSum( ops );
        assertEquals(want, got);
	}

}
