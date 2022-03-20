/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDecompondoNumeros(t *testing.T) {
	tables := []struct {
		maxDigit int64
		sumDigit int64
		want     []int
	}{
		{1, 21, []int{}},
		{6, 21, []int{3666, 4566, 4656, 4665, 5466, 5556, 5565, 5646, 5655, 5664, 6366, 6456, 6465, 6546, 6555, 6564, 6636, 6645, 6654, 6663}},
	}

	for _, table := range tables {
		got := decompNumbers(table.maxDigit, table.sumDigit)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
