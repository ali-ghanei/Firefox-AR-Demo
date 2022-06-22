<?php
	header('Content-Disposition: attachment; filename=test_ar_file.usdz');
	header('Content-type: model/vnd.usdz+zip');
	$fn = fopen("test_ar_file.usdz","r");
	fpassthru($fn);