--TEST--
Test for bug #472: Dead Code Analysis for code coverage messed up after goto (>= PHP 7.4, !opcache)
--SKIPIF--
<?php
require __DIR__ . '/utils.inc';
check_reqs('PHP >= 7.4; !opcache');
?>
--INI--
xdebug.default_enable=1
xdebug.auto_trace=0
xdebug.trace_options=0
xdebug.trace_output_dir=/tmp
xdebug.collect_params=1
xdebug.collect_return=0
xdebug.collect_assignments=0
xdebug.auto_profile=0
xdebug.profiler_enable=0
xdebug.dump_globals=0
xdebug.show_mem_delta=0
xdebug.trace_format=0
xdebug.coverage_enable=1
xdebug.overload_var_dump=0
--FILE--
<?php
    xdebug_start_code_coverage(XDEBUG_CC_UNUSED | XDEBUG_CC_DEAD_CODE);

	include 'bug00472.inc';
    $cc = xdebug_get_code_coverage();
	ksort($cc);
	var_dump(array_slice($cc, 1, 1));

    xdebug_stop_code_coverage(false);
?>
--EXPECTF--
array(1) {
  ["%sbug00472.inc"]=>
  array(70) {
    [9]=>
    int(-1)
    [10]=>
    int(-1)
    [13]=>
    int(-1)
    [14]=>
    int(-1)
    [15]=>
    int(-1)
    [18]=>
    int(-1)
    [19]=>
    int(-1)
    [20]=>
    int(-1)
    [23]=>
    int(-1)
    [24]=>
    int(-1)
    [25]=>
    int(-1)
    [26]=>
    int(-1)
    [29]=>
    int(-1)
    [30]=>
    int(-1)
    [31]=>
    int(-1)
    [34]=>
    int(-1)
    [35]=>
    int(-1)
    [38]=>
    int(-1)
    [40]=>
    int(-1)
    [41]=>
    int(-1)
    [42]=>
    int(-1)
    [43]=>
    int(-1)
    [45]=>
    int(-1)
    [46]=>
    int(-1)
    [50]=>
    int(-1)
    [51]=>
    int(-1)
    [52]=>
    int(-1)
    [54]=>
    int(-1)
    [55]=>
    int(-1)
    [56]=>
    int(-1)
    [57]=>
    int(-1)
    [58]=>
    int(-1)
    [59]=>
    int(-1)
    [60]=>
    int(-1)
    [65]=>
    int(-1)
    [66]=>
    int(-1)
    [67]=>
    int(-1)
    [68]=>
    int(-1)
    [70]=>
    int(-1)
    [71]=>
    int(-1)
    [72]=>
    int(-1)
    [73]=>
    int(-1)
    [74]=>
    int(-1)
    [75]=>
    int(-1)
    [76]=>
    int(-1)
    [82]=>
    int(-1)
    [83]=>
    int(-1)
    [84]=>
    int(-1)
    [85]=>
    int(-1)
    [87]=>
    int(-1)
    [88]=>
    int(-1)
    [93]=>
    int(-1)
    [94]=>
    int(-1)
    [95]=>
    int(-1)
    [96]=>
    int(-1)
    [98]=>
    int(-1)
    [99]=>
    int(-1)
    [100]=>
    int(-1)
    [101]=>
    int(-1)
    [102]=>
    int(-1)
    [103]=>
    int(-1)
    [104]=>
    int(-1)
    [112]=>
    int(-1)
    [113]=>
    int(-1)
    [115]=>
    int(-1)
    [116]=>
    int(-1)
    [118]=>
    int(-1)
    [119]=>
    int(-1)
    [120]=>
    int(-2)
    [122]=>
    int(1)
  }
}
