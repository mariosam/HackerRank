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

func TestZigZagSequence(t *testing.T) {
	tables := []struct {
		arr  []int
		want []int
	}{
		{[]int{2, 3, 5, 1, 4}, []int{1, 4, 5, 3, 2}},
		{[]int{1, 2, 3, 4, 5, 6, 7}, []int{1, 2, 3, 7, 6, 5, 4}},
	}

	for _, table := range tables {
		got := findZigZagSequence(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
