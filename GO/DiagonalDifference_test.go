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

func TestDiagonalDifference(t *testing.T) {
	tables := []struct {
		arr  [][]int32
		want int32
	}{
		{[][]int32{{11, 2, 4}, {4, 5, 6}, {10, 8, -12}}, 15},
		{[][]int32{{1, 2, 3}, {4, 5, 6}, {9, 8, 9}}, 2},
	}

	for _, table := range tables {
		got := diagonalDifference(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
