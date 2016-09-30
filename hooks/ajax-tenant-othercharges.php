<?php
	$currDir = dirname(__FILE__) . '/..';
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");

/* grant access to all users who have access to the residence_and_rental_history table */
	$od_from = get_sql_from('residence_and_rental_history');
	if (!$od_from) {
		header('HTTP/1.0 401 Unauthorized');
		exit();
	}

	$tid = intval($_REQUEST['tid']);

	$unit = sqlValue("select `units`.`other_charges` FROM `units` JOIN `applicants_and_tenants` ON `applicants_and_tenants`.`unit` = `units`.`id` WHERE `applicants_and_tenants`.`id`='{$tid}'");

	echo $unit;

?>