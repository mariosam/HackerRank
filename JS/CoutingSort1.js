/**
 * @version JAVASCRIPT ES6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
'use strict';

//const fs = require('fs');

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
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
function countingSort(arr) {
    //coloca os dados em ordem crescente
	arr.sort();

	//inicializa retorno com array zerado
	let res = new Array(100).fill(0);

	//percorre o array somando as quantidades
	for ( let i = 0; i < arr.length; i++ ) res[arr[i]]++;

	return res;
}
 
function main() {
    const ws = fs.createWriteStream(process.env.OUTPUT_PATH);
    const n = parseInt(readLine().trim(), 10);
    const arr = readLine().replace(/\s+$/g, '').split(' ').map(arrTemp => parseInt(arrTemp, 10));
    const result = countingSort(arr);

    ws.write(result.join(' ') + '\n');
    ws.end();
}

export {countingSort}
