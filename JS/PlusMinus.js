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
* Complete the 'plusMinus' function below.
*
* The function accepts INTEGER_ARRAY arr as parameter.
*/
function plusMinus(arr) {
    let positivos=0;
    let negativos=0;
    let zeros=0;

    //primeiro soma a quantidade de cada setor
    for ( let i = 0; i < arr.length; i++ ) {
        if ( arr[i] == 0 ) {
            zeros++;
        } else if ( arr[i] > 0 ) {
            positivos++;
        } else {
            negativos++;
        }
    }

    //divide pela quantidade de itens
    positivos = positivos / arr.length;
    negativos = negativos / arr.length;
    zeros = zeros / arr.length;

    //exibe retorno no console
    console.log( positivos.toFixed(6) );
    console.log( negativos.toFixed(6) );
    console.log( zeros.toFixed(6) );

    //essa linha de return eh apenas para a classe de testes
    return [ positivos, negativos, zeros ];
}

function main() {
    const n = parseInt(readLine().trim(), 10);

    const arr = readLine().replace(/\s+$/g, '').split(' ').map(arrTemp => parseInt(arrTemp, 10));

    plusMinus(arr);
}
 
export {plusMinus}
