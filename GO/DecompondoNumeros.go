/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"strconv"
	"strings"
)

/**
 * check all possibilities
 */
func decompNumbers(max int64, sum int64) []int {
	var result []int

	//percorre todo o range de possibilidades
	for i := 1000; i <= 7770; i++ {
		//separa os numeros (em um array)
		fourNum := strings.Split(strconv.Itoa(i), "")

		//pula para o proximo numero caso tenha algum numero maior do que o maximo informado
		_, number := findMinAndMax(fourNum)
		if number > max {
			continue
		}

		//faz a soma dos 4 digitos
		fourNum1, _ := strconv.ParseInt(fourNum[0], 0, 64)
		fourNum2, _ := strconv.ParseInt(fourNum[1], 0, 64)
		fourNum3, _ := strconv.ParseInt(fourNum[2], 0, 64)
		fourNum4, _ := strconv.ParseInt(fourNum[3], 0, 64)
		sumAll := fourNum1 + fourNum2 + fourNum3 + fourNum4

		//salva o numero se a soma deles for igual ao informado (21)
		if sumAll == sum {
			result = append(result, i)
		}
	}

	return result
}

func findMinAndMax(a []string) (min int64, max int64) {
	min, _ = strconv.ParseInt(a[0], 0, 64)
	max, _ = strconv.ParseInt(a[0], 0, 64)

	for _, ops := range a {
		value, _ := strconv.ParseInt(ops, 0, 64)

		if value < min {
			min = value
		}
		if value > max {
			max = value
		}
	}

	return min, max
}

func main() {
	reader := bufio.NewReaderSize(os.Stdin, 16*1024*1024)
	stdout, err := os.Create(os.Getenv("OUTPUT_PATH"))
	checkError(err)
	defer stdout.Close()

	writer := bufio.NewWriterSize(stdout, 16*1024*1024)
	maxDigitTemp, err := strconv.ParseInt(strings.TrimSpace(readLine(reader)), 10, 64)
	checkError(err)
	maxDigit := int32(maxDigitTemp)
	sumDigit := int32(21)

	result := decompNumbers(maxDigit, sumDigit)
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
