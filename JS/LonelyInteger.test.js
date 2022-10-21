/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lonelyinteger } from './LonelyInteger.js'

TEST('Starting LonelyInteger test...', (t) => {
    //Test 1
    let want = 4
    let got = lonelyinteger( [1, 2, 3, 4, 3, 2, 1] )
    t.assert(want === got, "Expect: 4")
    //Test 2
    want = 2
    got = lonelyinteger( [0, 0, 1, 2, 1] )
    t.assert(want === got, "Expect: 2")
    //Test 3
    want = 2
    got = lonelyinteger( [1, 1, 2] )
    t.assert(want === got, "Expect: 2")
    //Test 4
    want = 2
    got = lonelyinteger( [1, 2, 3, 4, 3, 4, 1] )
    t.assert(want === got, "Expect: 2")

    t.end()
})
