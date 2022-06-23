<?php
	header('Content-Disposition: attachment; filename=sample.usdz');
	header('Content-type: model/vnd.usdz+zip');
	$fn = fopen('sample.usdz', 'r');
	fpassthru($fn);
