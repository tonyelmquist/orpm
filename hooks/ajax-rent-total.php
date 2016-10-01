<?php
	$currDir = dirname(__FILE__) . '/..';
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");

	/* grant access to all users who have access to the applicants_and_tenants table */
	$od_from = get_sql_from('applicants_and_tenants');
	if (!$od_from) {
		header('HTTP/1.0 401 Unauthorized');
		exit();
	}

	$id = intval($_REQUEST['id']);
	if (!$id) exit;

	$rent_total = sqlValue("select sum(monthly_rent + security_deposit + other_charges - rent_paid) from residence_and_rental_history where tenant='{$id}'");

	sql("update applicants_and_tenants set total_rent_due='{$rent_total}' where id='{$id}'", $eo);

	if ($rent_total < 0.00) {
		sql("update applicants_and_tenants set current_month_rent_status='OVERPAYMENT' where id='{$id}'", $eo);
	} elseif ($rent_total == 0.00) {
		sql("update applicants_and_tenants set current_month_rent_status='PAID' where id='{$id}'", $eo);
	} elseif ($rent_total > 0.00) {
		sql("update applicants_and_tenants set current_month_rent_status='BALANCE' where id='{$id}'", $eo);
	}

	echo number_format($rent_total, 2);