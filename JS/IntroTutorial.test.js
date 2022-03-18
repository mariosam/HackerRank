/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
 const TEST = require('tape')
 const OBJ = require('./IntroTutorial.js')
 
 TEST('Starting IntroTutorial test...', (t) => {
     //Test 1
     t.assert(OBJ.introTutorial(4, [1, 4, 5, 7, 9, 12]) === 1, "Expect: 4, [1, 4, 5, 7, 9, 12] = 1")
     //Test 2
     t.assert(OBJ.introTutorial(9, [1, 4, 5, 7, 9, 12]) === 4, "Expect: 9, [1, 4, 5, 7, 9, 12] = 4")
     //Test 3
     t.assert(OBJ.introTutorial(1, [1, 4, 5, 7, 9, 12]) === 0, "Expect: 1, [1, 4, 5, 7, 9, 12] = 0")
 
     t.end()
 })
 
