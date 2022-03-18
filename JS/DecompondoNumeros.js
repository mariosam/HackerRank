/**
 * @version JAVASCRIPT
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

//console.log("Result is "+decompNumbers(6,21));

'use strict';

const fs = require('fs');
const { result } = require('lodash');

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', function(inputStdin) {
    inputString += inputStdin;
});

process.stdin.on('end', function() {
    inputString = inputString.split('\n');

    main();
});

function readLine() {
    return inputString[currentLine++];
}

/**
 * check all possibilities
 */
function decompNumbers(max, sum) {
    let result = [];

    //percorre todo o range de possibilidades
    for ( let i=1000; i <= 7770; i++ ) {
        //separa os numeros (em um array)
        let fourNum = i.split("");
        
        //pula para o proximo numero caso tenha algum numero maior do que o maximo informado
        if ( Math.max(...fourNum) > max ) continue;
        
        //faz a soma dos 4 digitos
        let sumAll = parseInt(fourNum[0])+parseInt(fourNum[1])+parseInt(fourNum[2])+parseInt(fourNum[3]);

        //salva o numero se a soma deles for igual ao informado (21)
        if ( sumAll == sum ) {
            result.push( i );
        }
    }
    
    return result.length > 0 ? result : null;
}

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);
    const maxDigit = parseInt(readLine().trim(), 10);
    const sumDigit = 21;

    const arr = decompNumbers(maxDigit, sumDigit);

    if ( arr.length > 0 ) {  
        for ( let i=0; i < arr.length; i++ ) {
            ws.write(arr[i] + '\n');
        } 
    } else {
        ws.write(null + '\n');
    }

    ws.end();
}

module.exports = {decompNumbers}
