<?php
// This script and data application were generated by AppGini 5.50
// Download AppGini for free from http://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/applications_leases.php");
	include("$currDir/applications_leases_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('applications_leases');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "applications_leases";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV=array(   
		"`applications_leases`.`id`" => "id",
		"IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') /* Applicant/ Tenant */" => "tenants",
		"`applications_leases`.`status`" => "status",
		"IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') /* Property */" => "property",
		"IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') /* Unit applied for */" => "unit",
		"`applications_leases`.`type`" => "type",
		"`applications_leases`.`total_number_of_occupants`" => "total_number_of_occupants",
		"if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'')" => "start_date",
		"if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'')" => "end_date",
		"`applications_leases`.`recurring_charges_frequency`" => "recurring_charges_frequency",
		"if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'')" => "next_due_date",
		"CONCAT('$', FORMAT(`applications_leases`.`rent`, 2))" => "rent",
		"CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2))" => "security_deposit",
		"if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'')" => "security_deposit_date",
		"`applications_leases`.`emergency_contact`" => "emergency_contact",
		"`applications_leases`.`co_signer_details`" => "co_signer_details",
		"`applications_leases`.`notes`" => "notes",
		"concat('<img src=\"', if(`applications_leases`.`agreement`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />')" => "agreement"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`applications_leases`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => '`applications_leases`.`start_date`',
		9 => '`applications_leases`.`end_date`',
		10 => 10,
		11 => '`applications_leases`.`next_due_date`',
		12 => '`applications_leases`.`rent`',
		13 => '`applications_leases`.`security_deposit`',
		14 => '`applications_leases`.`security_deposit_date`',
		15 => 15,
		16 => 16,
		17 => 17,
		18 => 18
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV=array(   
		"`applications_leases`.`id`" => "id",
		"IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') /* Applicant/ Tenant */" => "tenants",
		"`applications_leases`.`status`" => "status",
		"IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') /* Property */" => "property",
		"IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') /* Unit applied for */" => "unit",
		"`applications_leases`.`type`" => "type",
		"`applications_leases`.`total_number_of_occupants`" => "total_number_of_occupants",
		"if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'')" => "start_date",
		"if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'')" => "end_date",
		"`applications_leases`.`recurring_charges_frequency`" => "recurring_charges_frequency",
		"if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'')" => "next_due_date",
		"CONCAT('$', FORMAT(`applications_leases`.`rent`, 2))" => "rent",
		"CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2))" => "security_deposit",
		"if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'')" => "security_deposit_date",
		"`applications_leases`.`emergency_contact`" => "emergency_contact",
		"`applications_leases`.`co_signer_details`" => "co_signer_details",
		"`applications_leases`.`notes`" => "notes",
		"`applications_leases`.`agreement`" => "agreement"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters=array(   
		"`applications_leases`.`id`" => "ID",
		"IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') /* Applicant/ Tenant */" => "Applicant/ Tenant",
		"`applications_leases`.`status`" => "Application status",
		"IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') /* Property */" => "Property",
		"IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') /* Unit applied for */" => "Unit applied for",
		"`applications_leases`.`type`" => "Lease type",
		"`applications_leases`.`total_number_of_occupants`" => "Total number of occupants",
		"`applications_leases`.`start_date`" => "Lease period from",
		"`applications_leases`.`end_date`" => "to",
		"`applications_leases`.`recurring_charges_frequency`" => "Recurring charges frequency",
		"`applications_leases`.`next_due_date`" => "Next due date",
		"`applications_leases`.`rent`" => "Rental amount",
		"`applications_leases`.`security_deposit`" => "Security deposit",
		"`applications_leases`.`security_deposit_date`" => "Security deposit date",
		"`applications_leases`.`emergency_contact`" => "Emergency contact",
		"`applications_leases`.`co_signer_details`" => "Co signer details",
		"`applications_leases`.`notes`" => "Notes",
		"`applications_leases`.`agreement`" => "Applicant agrees"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS=array(   
		"`applications_leases`.`id`" => "id",
		"IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') /* Applicant/ Tenant */" => "tenants",
		"`applications_leases`.`status`" => "status",
		"IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') /* Property */" => "property",
		"IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') /* Unit applied for */" => "unit",
		"`applications_leases`.`type`" => "type",
		"`applications_leases`.`total_number_of_occupants`" => "total_number_of_occupants",
		"if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%m/%d/%Y'),'')" => "start_date",
		"if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%m/%d/%Y'),'')" => "end_date",
		"`applications_leases`.`recurring_charges_frequency`" => "recurring_charges_frequency",
		"if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%m/%d/%Y'),'')" => "next_due_date",
		"CONCAT('$', FORMAT(`applications_leases`.`rent`, 2))" => "rent",
		"CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2))" => "security_deposit",
		"if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%m/%d/%Y'),'')" => "security_deposit_date",
		"`applications_leases`.`emergency_contact`" => "emergency_contact",
		"`applications_leases`.`co_signer_details`" => "co_signer_details",
		"`applications_leases`.`notes`" => "notes",
		"concat('<img src=\"', if(`applications_leases`.`agreement`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />')" => "agreement"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array(  'tenants' => 'Applicant/ Tenant', 'property' => 'Property', 'unit' => 'Unit applied for');

	$x->QueryFrom="`applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` ";
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
	$x->ScriptFileName = "applications_leases_view.php";
	$x->RedirectAfterInsert = "applications_leases_view.php?SelectedID=#ID#";
	$x->TableTitle = "Applications/Leases";
	$x->TableIcon = "resources/table_icons/curriculum_vitae.png";
	$x->PrimaryKey = "`applications_leases`.`id`";

	$x->ColWidth   = array(  60, 50, 80, 60, 40, 70, 70, 60, 70, 80, 120, 70);
	$x->ColCaption = array("Applicant/ Tenant", "Application status", "Property", "Unit applied for", "Lease type", "Total number of occupants", "Lease period from", "to", "Rental amount", "Security deposit", "Emergency contact", "Applicant agrees");
	$x->ColFieldName = array('tenants', 'status', 'property', 'unit', 'type', 'total_number_of_occupants', 'start_date', 'end_date', 'rent', 'security_deposit', 'emergency_contact', 'agreement');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9, 12, 13, 15, 18);

	$x->Template = 'templates/applications_leases_templateTV.html';
	$x->SelectedTemplate = 'templates/applications_leases_templateTVS.html';
	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `applications_leases`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='applications_leases' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `applications_leases`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='applications_leases' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`applications_leases`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: applications_leases_init
	$render=TRUE;
	if(function_exists('applications_leases_init')){
		$args=array();
		$render=applications_leases_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: applications_leases_header
	$headerCode='';
	if(function_exists('applications_leases_header')){
		$args=array();
		$headerCode=applications_leases_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: applications_leases_footer
	$footerCode='';
	if(function_exists('applications_leases_footer')){
		$args=array();
		$footerCode=applications_leases_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>