/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
const TEST = require('tape')
const OBJ = require('./DecompondoNumeros.js')

TEST('Starting DecompondoNumeros test...', (t) => {
    //Test 1
    let want = null
    let got = OBJ.decompNumbers( 1, 21 )
    t.assert(want.toString === got.toString, "Expect: 1, 21 = null")
    //Test 2
    want = [3666,4566,4656,4665,5466,5556,5565,5646,5655,5664,6366,6456,6465,6546,6555,6564,6636,6645,6654,6663]
    got = OBJ.decompNumbers( 6, 21 )
    t.assert(want.toString === got.toString, "Expect: 6, 21 = [3666,4566...6654,6663]")

    t.end()
})
