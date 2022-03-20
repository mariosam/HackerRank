/**
 * @version GO
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import (
	"testing"
)

func TestIntroTutorial(t *testing.T) {
	tables := []struct {
		V    int32
		arr  []int32
		want int32
	}{
		{4, []int32{1, 4, 5, 7, 9, 12}, 1},
		{9, []int32{1, 4, 5, 7, 9, 12}, 4},
		{1, []int32{1, 4, 5, 7, 9, 12}, 0},
		{23, []int32{1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23}, 11},
	}

	for _, table := range tables {
		got := introTutorial(table.V, table.arr)

		if got != table.want {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
