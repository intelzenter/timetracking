<?php
	$rdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('nl2br', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function(){
		var tn = 'schools';

		/* data for selected record, or defaults if none is selected */
		var data = {
		};

		/* initialize or continue using sporttracker.cache for the current table */
		sporttracker.cache = sporttracker.cache || {};
		sporttracker.cache[tn] = sporttracker.cache[tn] || sporttracker.ajaxCache();
		var cache = sporttracker.cache[tn];

		cache.start();
	});
</script>

