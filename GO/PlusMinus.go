/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"bufio"
	"fmt"
	"io"
	"os"
	"strconv"
	"strings"
)

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
func plusMinus(arr []int32) []string {
	var positivos, negativos, zeros float32

	//soma a quantidade de cada setor
	for i := 0; i < len(arr); i++ {
		if arr[i] == 0 {
			zeros++
		} else if arr[i] > 0 {
			positivos++
		} else {
			negativos++
		}
	}

	//divide pela quantidade de itens
	positivos = positivos / float32(len(arr))
	negativos = negativos / float32(len(arr))
	zeros = zeros / float32(len(arr))

	//exibe retorno no console
	fmt.Printf("%.6f\n", positivos)
	fmt.Printf("%.6f\n", negativos)
	fmt.Printf("%.6f\n", zeros)

	//essa linha de return eh apenas para a classe de testes
	return []string{fmt.Sprintf("%.6f", positivos), fmt.Sprintf("%.6f", negativos), fmt.Sprintf("%.6f", zeros)}
}

func main() {
	reader := bufio.NewReaderSize(os.Stdin, 16*1024*1024)

	nTemp, err := strconv.ParseInt(strings.TrimSpace(readLine(reader)), 10, 64)
	checkError(err)
	n := int32(nTemp)

	arrTemp := strings.Split(strings.TrimSpace(readLine(reader)), " ")

	var arr []int32

	for i := 0; i < int(n); i++ {
		arrItemTemp, err := strconv.ParseInt(arrTemp[i], 10, 64)
		checkError(err)
		arrItem := int32(arrItemTemp)
		arr = append(arr, arrItem)
	}

	plusMinus(arr)
}

func readLine(reader *bufio.Reader) string {
	str, _, err := reader.ReadLine()
	if err == io.EOF {
		return ""
	}

	return strings.TrimRight(string(str), "\r\n")
}

func checkError(err error) {
	if err != nil {
		panic(err)
	}
}
