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

func TestTimeConversion(t *testing.T) {
	tables := []struct {
		ops  string
		want string
	}{
		{"07:05:45PM", "19:05:45"},
	}

	for _, table := range tables {
		got := timeConversion(table.ops)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
