/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { miniMaxSum } from './MiniMaxSum.js'

TEST('Starting MiniMaxSum test...', (t) => {
    //Test 1
    let want = "10 14"
    let got = miniMaxSum( [1, 2, 3, 4, 5] )
    t.assert(want === got, "Expect: 10 14")
    //Test 2
    want = "16 24"
    got = miniMaxSum( [1, 3, 5, 7, 9] )
    t.assert(want === got, "Expect: 16 24")
    //Test 3
    want = "299 9271"
    got = miniMaxSum( [7, 69, 2, 221, 8974] )
    t.assert(want === got, "Expect: 299 9271")
    //Test 4
    want = "1673711044 2486347135"
    got = miniMaxSum( [140638725, 436257910, 953274816, 734065819, 362748590] )
    t.assert(want === got, "Expect: 1673711044 2486347135")

    t.end()
})
