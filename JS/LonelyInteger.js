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
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */
function lonelyinteger(a) {
    //coloca os dados em ordem crescente
    a.sort();

    //inicializa resultado
    let res = a[0];

    //verifica se o num atual eh diferente do anterior e do proximo
    for ( let i = 1; i < a.length; i++ ) {
        if ( i == a.length-1 || a[i] != a[i-1] && a[i] != a[i+1] ) {
            res = a[i];
            break;
        }
    }

    return res;
}
 
function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);
    const n = parseInt(readLine().trim(), 10);
    const a = readLine().replace(/\s+$/g, '').split(' ').map(aTemp => parseInt(aTemp, 10));
    const result = lonelyinteger(a);

    ws.write(result + '\n');
    ws.end();
}
 
export { lonelyinteger }
