/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { diagonalDifference } from './DiagonalDifference.js'

TEST('Starting DiagonalDifference test...', (t) => {
    //Test 1
    let want = 15
    let got = diagonalDifference( [[11, 2, 4], [4, 5, 6], [10, 8, -12]] )
    t.assert(want === got, "Expect: 15")
    //Test 2
    want = 2
    got = diagonalDifference( [[1, 2, 3], [4, 5, 6], [9, 8, 9]] )
    t.assert(want === got, "Expect: 2")

    t.end()
})
