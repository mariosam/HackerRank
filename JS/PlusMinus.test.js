/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { plusMinus } from './PlusMinus.js'

TEST('Starting PlusMinus test...', (t) => {
    //Test 1
    let want = ["0.500000", "0.333333", "0.166667"]
    let got = plusMinus( [-4, 3, -9, 0, 4, 1] )
    t.assert(want.toString === got.toString, "Expect: 0.500000, 0.333333, 0.166667")
    //Test 2
    want = ["0.375000", "0.375000", "0.250000"]
    got = plusMinus( [1, 2, 3, -1, -2, -3, 0, 0] )
    t.assert(want.toString === got.toString, "Expect: 0.375000, 0.375000, 0.250000")

    t.end()
})
