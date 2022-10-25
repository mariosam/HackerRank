/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findZigZagSequence } from './ZigZagSequence.js'

TEST('Starting ZigZagSequence test...', (t) => {
    //Test 1
    let want = [1, 4, 5, 3, 2]
    let got = findZigZagSequence( [2, 3, 5, 1, 4] )
    t.assert(want.toString === got.toString, "Expect: 1, 4, 5, 3, 2")
    //Test 2
    want = [1, 2, 3, 7, 6, 5, 4]
    got = findZigZagSequence( [1, 2, 3, 4, 5, 6, 7] )
    t.assert(want.toString === got.toString, "Expect: 1, 2, 3, 7, 6, 5, 4")

    t.end()
})
 
