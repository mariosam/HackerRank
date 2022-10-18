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

public class DiagonalDifferenceTest {
    
    @Test
	public void testDiagonalDifference() throws Exception {
		//Test 1
		int want = 15;
        List<List<Integer>> ops = new ArrayList<>();
        List<Integer> v = new ArrayList<>();
        v.add(11);
        v.add(2);
        v.add(4);
        ops.add(v);
        v = new ArrayList<>();
        v.add(4);
        v.add(5);
        v.add(6);
        ops.add(v);
        v = new ArrayList<>();
        v.add(10);
        v.add(8);
        v.add(-12);
        ops.add(v);
		int got = DiagonalDifference.diagonalDifference( ops );
        assertEquals(want, got);
		//Test 2
        ops = new ArrayList<>();
        v = new ArrayList<>();
		want = 2;
        v.add(1);
        v.add(2);
        v.add(3);
        ops.add(v);
        v = new ArrayList<>();
        v.add(4);
        v.add(5);
        v.add(6);
        ops.add(v);
        v = new ArrayList<>();
        v.add(9);
        v.add(8);
        v.add(9);
        ops.add(v);
		got = DiagonalDifference.diagonalDifference( ops );
        assertEquals(want, got);
	}

}
