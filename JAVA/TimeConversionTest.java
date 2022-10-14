/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class TimeConversionTest {
    
    @Test
	public void testTimeConversion() throws Exception {
		//Test 1
		String want = "19:05:45";
		String got = TimeConversion.timeConversion( "07:05:45PM" );
        assertEquals(want, got);
	}

}
