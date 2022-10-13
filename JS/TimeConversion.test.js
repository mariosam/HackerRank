/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { timeConversion } from './TimeConversion.js'

TEST('Starting TimeConversion test...', (t) => {
    //Test 1
    let want = "19:05:45"
    let got = timeConversion( "07:05:45PM" )
    t.assert(want === got, "Expect: 19:05:45")

    t.end()
})
