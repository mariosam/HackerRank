/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
'use strict';

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
* Complete the 'miniMaxSum' function below.
*
* The function accepts INTEGER_ARRAY arr as parameter.
*/
function miniMaxSum(arr) {
    //coloca os dados em ordem crescente
    arr.sort();

    //soma os menores e maiores
    let min = arr[0] + arr[1] + arr[2] + arr[3]; 
    let max = arr[1] + arr[2] + arr[3] + arr[4];

    //exibe resultado no console
    console.log(min+' '+max);

    //essa linha de return eh apenas para a classe de testes
    return min+' '+max;
}

function main() {
    const arr = readLine().replace(/\s+$/g, '').split(' ').map(arrTemp => parseInt(arrTemp, 10));

    miniMaxSum(arr);
}

export { miniMaxSum }
