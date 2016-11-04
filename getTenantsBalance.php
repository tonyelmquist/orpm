<?php

	header('Content-type: application/json');

	$start_ts = microtime(true);

	$curr_dir=dirname(__FILE__);

	include("$currDir/lib.php");

	$results_per_page = 50;

	$ids = false;
	if(isset($_REQUEST['ids']));{
		$ids = $_REQUEST['ids'];
	}
	if (isset($_REQUEST['table'])) {
		$table = $_REQUEST['table'];
	}

	$cs_ids = '';
	foreach($ids as $id){
		$cs_ids .= "'" . makeSafe($id) . "',";
	}
	$cs_ids = substr($cs_ids, 0, -1); 

	/*$items = array();
	$res = sql( "select * from {$table} " .
				"where id in ({$cs_ids})", $eo);
	while($row = db_fetch_assoc($res)){
		$items[] = $row;
		}*/

	$tenant = array();
	$res = sql( "select * from residence_and_rental_history " .
				"where tenant in ({$cs_ids}) GROUP BY month", $eo);
	while($row = db_fetch_assoc($res)){
		$items[] = $row;
		}
		
	echo json_encode(array(
		'success' => true,
		'results' => $items,
		'elapsed' => round(microtime(true) - $start_ts, 3)
	));