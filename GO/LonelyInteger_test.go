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

func TestLonelyInteger(t *testing.T) {
	tables := []struct {
		arr  []int32
		want int32
	}{
		{[]int32{1, 2, 3, 4, 3, 2, 1}, 4},
		{[]int32{0, 0, 1, 2, 1}, 2},
		{[]int32{1, 1, 2}, 2},
		{[]int32{1, 2, 3, 4, 3, 4, 1}, 2},
	}

	for _, table := range tables {
		got := lonelyinteger(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
