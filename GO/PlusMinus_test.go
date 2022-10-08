/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPlusMinus(t *testing.T) {
	tables := []struct {
		size int32
		arr  []int32
		want []string
	}{
		{6, []int32{-4, 3, -9, 0, 4, 1}, []string{"0.500000", "0.333333", "0.166667"}},
		{8, []int32{1, 2, 3, -1, -2, -3, 0, 0}, []string{"0.375000", "0.375000", "0.250000"}},
	}

	for _, table := range tables {
		got := plusMinus(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
