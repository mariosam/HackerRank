/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"fmt"
	"sort"
)

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
func miniMaxSum(arr []int32) string {
	//coloca os dados em ordem crescente
	sort.Slice(arr, func(i, j int) bool { return arr[i] < arr[j] })

	//soma os menores e maiores
	min := int64(arr[0]) + int64(arr[1]) + int64(arr[2]) + int64(arr[3])
	max := int64(arr[1]) + int64(arr[2]) + int64(arr[3]) + int64(arr[4])

	//exibe resultado no console
	fmt.Printf("%d %d", min, max)

	//essa linha de return eh apenas para a classe de testes
	return fmt.Sprintf("%d %d", min, max)
}

/*
 func main() {
    reader := bufio.NewReaderSize(os.Stdin, 16 * 1024 * 1024)

    arrTemp := strings.Split(strings.TrimSpace(readLine(reader)), " ")

    var arr []int32

    for i := 0; i < 5; i++ {
        arrItemTemp, err := strconv.ParseInt(arrTemp[i], 10, 64)
        checkError(err)
        arrItem := int32(arrItemTemp)
        arr = append(arr, arrItem)
    }

    miniMaxSum(arr)
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
*/
