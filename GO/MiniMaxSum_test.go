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

func TestMiniMaxSum(t *testing.T) {
	tables := []struct {
		arr  []int32
		want string
	}{
		{[]int32{1, 2, 3, 4, 5}, "10 14"},
		{[]int32{1, 3, 5, 7, 9}, "16 24"},
		{[]int32{7, 69, 2, 221, 8974}, "299 9271"},
		{[]int32{140638725, 436257910, 953274816, 734065819, 362748590}, "1673711044 2486347135"},
	}

	for _, table := range tables {
		got := miniMaxSum(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
