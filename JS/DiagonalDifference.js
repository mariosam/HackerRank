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
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */
function diagonalDifference(arr) {
    let d1 = 0;
    let d2 = 0;

    for ( let i = 0, j = arr.length-1; i < arr.length; i++, j-- ) {
        //soma diagonal up-left to down-right
        d1 += arr[i][i];

        //soma diagonal down-lef to up-right
        d2 += arr[j][i];
    }

    return Math.abs(d1 - d2);
 }
 
function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);
    const n = parseInt(readLine().trim(), 10);
    let arr = Array(n);

    for (let i = 0; i < n; i++) {
        arr[i] = readLine().replace(/\s+$/g, '').split(' ').map(arrTemp => parseInt(arrTemp, 10));
    }

    const result = diagonalDifference(arr);
    ws.write(result + '\n');
    ws.end();
}
 
 export { diagonalDifference }
