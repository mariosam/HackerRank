/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
'use strict';

const fs = require('fs');
 
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

/*
* Complete the 'findZigZagSequence' function below.
*
* The function accepts INTEGER_ARRAY arr as parameter.
*/
function findZigZagSequence(arr = []) {
    //inicializa var de retorno
    let res = [];

    //identifica a metade do array, -1 pq o array inicia em 0.
    let k = ((arr.length+1)/2)-1;

    //identifica o menor valor do array, q inicia o retorno.
    let menor = Math.min(arr);

    //monta resultado.
    if ( arr.indexOf( menor ) > k ) {
        res = res.concat( arr.slice( arr.findIndex( menor ), k ), arr.slice( 0, k+1 ).reverse() );
    } else {
        res = res.concat( arr.slice( 0, k ), arr.slice( k, k.length ).reverse() );
    }

    return res;
}

function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);
    const t = parseInt(readLine().trim(), 10);
    const n = parseInt(readLine().trim(), 10);
    const arr = readLine().replace(/\s+$/g, '').split(' ').map(arrTemp => parseInt(arrTemp, 10));
    const result = findZigZagSequence(arr);

    ws.write(result.join(' ') + '\n');
    ws.end();
}
export {findZigZagSequence}
