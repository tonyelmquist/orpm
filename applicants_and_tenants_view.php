<?php
// This script and data application were generated by AppGini 5.50
// Download AppGini for free from http://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/applicants_and_tenants.php");
	include("$currDir/applicants_and_tenants_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('applicants_and_tenants');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "applicants_and_tenants";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV=array(   
		"`applicants_and_tenants`.`id`" => "id",
		"`applicants_and_tenants`.`last_name`" => "last_name",
		"`applicants_and_tenants`.`first_name`" => "first_name",
		"`applicants_and_tenants`.`email`" => "email",
		"CONCAT_WS('-', LEFT(`applicants_and_tenants`.`phone`,3), MID(`applicants_and_tenants`.`phone`,4,3), RIGHT(`applicants_and_tenants`.`phone`,4))" => "phone",
		"if(`applicants_and_tenants`.`birth_date`,date_format(`applicants_and_tenants`.`birth_date`,'%m/%d/%Y'),'')" => "birth_date",
		"`applicants_and_tenants`.`status`" => "status"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`applicants_and_tenants`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => '`applicants_and_tenants`.`birth_date`',
		7 => 7
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV=array(   
		"`applicants_and_tenants`.`id`" => "id",
		"`applicants_and_tenants`.`last_name`" => "last_name",
		"`applicants_and_tenants`.`first_name`" => "first_name",
		"`applicants_and_tenants`.`email`" => "email",
		"CONCAT_WS('-', LEFT(`applicants_and_tenants`.`phone`,3), MID(`applicants_and_tenants`.`phone`,4,3), RIGHT(`applicants_and_tenants`.`phone`,4))" => "phone",
		"if(`applicants_and_tenants`.`birth_date`,date_format(`applicants_and_tenants`.`birth_date`,'%m/%d/%Y'),'')" => "birth_date",
		"`applicants_and_tenants`.`status`" => "status"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters=array(   
		"`applicants_and_tenants`.`id`" => "ID",
		"`applicants_and_tenants`.`last_name`" => "Surname",
		"`applicants_and_tenants`.`first_name`" => "Othernames",
		"`applicants_and_tenants`.`email`" => "Email",
		"`applicants_and_tenants`.`phone`" => "Phone",
		"`applicants_and_tenants`.`birth_date`" => "Birth date",
		"`applicants_and_tenants`.`status`" => "Status"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS=array(   
		"`applicants_and_tenants`.`id`" => "id",
		"`applicants_and_tenants`.`last_name`" => "last_name",
		"`applicants_and_tenants`.`first_name`" => "first_name",
		"`applicants_and_tenants`.`email`" => "email",
		"CONCAT_WS('-', LEFT(`applicants_and_tenants`.`phone`,3), MID(`applicants_and_tenants`.`phone`,4,3), RIGHT(`applicants_and_tenants`.`phone`,4))" => "phone",
		"if(`applicants_and_tenants`.`birth_date`,date_format(`applicants_and_tenants`.`birth_date`,'%m/%d/%Y'),'')" => "birth_date",
		"`applicants_and_tenants`.`status`" => "status"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom="`applicants_and_tenants` ";
	$x->QueryWhere='';
	$x->QueryOrder='';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = false;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 0;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "applicants_and_tenants_view.php";
	$x->RedirectAfterInsert = "applicants_and_tenants_view.php?SelectedID=#ID#";
	$x->TableTitle = "Tenant Center";
	$x->TableIcon = "resources/table_icons/account_balances.png";
	$x->PrimaryKey = "`applicants_and_tenants`.`id`";
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth   = array(  100, 100, 100, 100, 100, 100);
	$x->ColCaption = array("Surname", "Othernames", "Email", "Phone", "Birth date", "Status");
	$x->ColFieldName = array('last_name', 'first_name', 'email', 'phone', 'birth_date', 'status');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7);

	$x->Template = 'templates/applicants_and_tenants_templateTV.html';
	$x->SelectedTemplate = 'templates/applicants_and_tenants_templateTVS.html';
	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `applicants_and_tenants`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='applicants_and_tenants' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `applicants_and_tenants`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='applicants_and_tenants' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`applicants_and_tenants`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: applicants_and_tenants_init
	$render=TRUE;
	if(function_exists('applicants_and_tenants_init')){
		$args=array();
		$render=applicants_and_tenants_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: applicants_and_tenants_header
	$headerCode='';
	if(function_exists('applicants_and_tenants_header')){
		$args=array();
		$headerCode=applicants_and_tenants_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: applicants_and_tenants_footer
	$footerCode='';
	if(function_exists('applicants_and_tenants_footer')){
		$args=array();
		$footerCode=applicants_and_tenants_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>