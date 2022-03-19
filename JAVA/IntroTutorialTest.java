/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import java.util.ArrayList;
import org.junit.Test;

public class IntroTutorialTest {
        
    @Test
	public void testIntroTutorial() throws Exception {
		//Test 1
		int want = 1;
		int got = Result.introTutorial(4, new ArrayList<Integer>() {{ add(1); add(4); add(5); add(7); add(9); add(12); }});
        assertEquals(want, got);
		//Test 2
		want = 4;
		got = Result.introTutorial(9, new ArrayList<Integer>() {{ add(1); add(4); add(5); add(7); add(9); add(12); }});
        assertEquals(want, got);
		//Test 3
		want = 0;
		got = Result.introTutorial(1, new ArrayList<Integer>() {{ add(1); add(4); add(5); add(7); add(9); add(12); }});
        assertEquals(want, got);
	}
}
