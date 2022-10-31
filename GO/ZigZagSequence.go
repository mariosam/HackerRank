/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"fmt"
	"strconv"
	"strings"
)

func findZigZagSequence(arr []int) []int {
	//inicializa var de retorno
	var res []int

	//identifica a metade do array, -1 pq o array inicia em 0.
	k := ((len(arr) + 1) / 2) - 1

	//identifica o menor valor do array, q inicia o retorno.
	menor, _ := findMinAndMax(arr)

	//monta resultado.
	pos := indexOf(menor, arr)
	if pos > k {
		parte1 := arr[pos:]
		res = append(res, parte1...)

		parte2 := arr[0 : k+1]
		parte2 = reverseInts(parte2)
		res = append(res, parte2...)
	} else {
		parte1 := arr[0:k]
		res = append(res, parte1...)

		parte2 := arr[k:]
		parte2 = reverseInts(parte2)
		res = append(res, parte2...)
	}

	//fmt.Println(res)
	var temp []string
	for i := 0; i < len(res); i++ {
		temp = append(temp, strconv.Itoa(res[i]))
	}
	fmt.Println(strings.Join(temp, " "))

	return res
}

func findMinAndMax(a []int) (min int, max int) {
	min = a[0]
	max = a[0]
	for _, value := range a {
		if value < min {
			min = value
		}
		if value > max {
			max = value
		}
	}
	return min, max
}

func indexOf(element int, data []int) int {
	for k, v := range data {
		if element == v {
			return k
		}
	}
	return -1 //not found.
}

func reverseInts(input []int) []int {
	if len(input) == 0 {
		return input
	}
	return append(reverseInts(input[1:]), input[0])
}

/*
func main() {
	reader := bufio.NewReaderSize(os.Stdin, 16*1024*1024)

	stdout, err := os.Create(os.Getenv("OUTPUT_PATH"))
	checkError(err)

	defer stdout.Close()

	writer := bufio.NewWriterSize(stdout, 16*1024*1024)

	nTemp, err := strconv.ParseInt(strings.TrimSpace(readLine(reader)), 10, 64)
	checkError(err)
	n := int32(nTemp)

	aTemp := strings.Split(strings.TrimSpace(readLine(reader)), " ")

	var a []int32

	for i := 0; i < int(n); i++ {
		aItemTemp, err := strconv.ParseInt(aTemp[i], 10, 64)
		checkError(err)
		aItem := int32(aItemTemp)
		a = append(a, aItem)
	}

	result := lonelyinteger(a)

	fmt.Fprintf(writer, "%d\n", result)

	writer.Flush()
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
