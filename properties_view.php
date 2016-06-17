<?php
// This script and data application were generated by AppGini 5.50
// Download AppGini for free from http://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/properties.php");
	include("$currDir/properties_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('properties');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "properties";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV=array(   
		"`properties`.`id`" => "id",
		"`properties`.`property_name`" => "property_name",
		"`properties`.`type`" => "type",
		"`properties`.`number_of_units`" => "number_of_units",
		"`properties`.`photo`" => "photo",
		"IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') /* Owner */" => "owner",
		"`properties`.`operating_account`" => "operating_account",
		"CONCAT('$', FORMAT(`properties`.`property_reserve`, 2))" => "property_reserve",
		"`properties`.`lease_term`" => "lease_term",
		"`properties`.`country`" => "country",
		"`properties`.`street`" => "street",
		"`properties`.`City`" => "City",
		"`properties`.`State`" => "State",
		"`properties`.`ZIP`" => "ZIP"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`properties`.`id`',
		2 => 2,
		3 => 3,
		4 => '`properties`.`number_of_units`',
		5 => 5,
		6 => 6,
		7 => 7,
		8 => '`properties`.`property_reserve`',
		9 => 9,
		10 => 10,
		11 => 11,
		12 => 12,
		13 => 13,
		14 => '`properties`.`ZIP`'
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV=array(   
		"`properties`.`id`" => "id",
		"`properties`.`property_name`" => "property_name",
		"`properties`.`type`" => "type",
		"`properties`.`number_of_units`" => "number_of_units",
		"`properties`.`photo`" => "photo",
		"IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') /* Owner */" => "owner",
		"`properties`.`operating_account`" => "operating_account",
		"CONCAT('$', FORMAT(`properties`.`property_reserve`, 2))" => "property_reserve",
		"`properties`.`lease_term`" => "lease_term",
		"`properties`.`country`" => "country",
		"`properties`.`street`" => "street",
		"`properties`.`City`" => "City",
		"`properties`.`State`" => "State",
		"`properties`.`ZIP`" => "ZIP"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters=array(   
		"`properties`.`id`" => "ID",
		"`properties`.`property_name`" => "Property Name",
		"`properties`.`type`" => "Type",
		"`properties`.`number_of_units`" => "Number of units",
		"IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') /* Owner */" => "Owner",
		"`properties`.`operating_account`" => "Operating account",
		"`properties`.`property_reserve`" => "Property reserve",
		"`properties`.`lease_term`" => "Lease term",
		"`properties`.`country`" => "Country",
		"`properties`.`street`" => "Street",
		"`properties`.`City`" => "City",
		"`properties`.`State`" => "State",
		"`properties`.`ZIP`" => "ZIP"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS=array(   
		"`properties`.`id`" => "id",
		"`properties`.`property_name`" => "property_name",
		"`properties`.`type`" => "type",
		"`properties`.`number_of_units`" => "number_of_units",
		"IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') /* Owner */" => "owner",
		"`properties`.`operating_account`" => "operating_account",
		"CONCAT('$', FORMAT(`properties`.`property_reserve`, 2))" => "property_reserve",
		"`properties`.`lease_term`" => "lease_term",
		"`properties`.`country`" => "country",
		"`properties`.`street`" => "street",
		"`properties`.`City`" => "City",
		"`properties`.`State`" => "State",
		"`properties`.`ZIP`" => "ZIP"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array(  'owner' => 'Owner');

	$x->QueryFrom="`properties` LEFT JOIN `rental_owners` as rental_owners1 ON `rental_owners1`.`id`=`properties`.`owner` ";
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
	$x->ScriptFileName = "properties_view.php";
	$x->RedirectAfterInsert = "properties_view.php?SelectedID=#ID#";
	$x->TableTitle = "Properties";
	$x->TableIcon = "resources/table_icons/application_home.png";
	$x->PrimaryKey = "`properties`.`id`";

	$x->ColWidth   = array(  50, 80, 50, 60, 100, 120, 70, 120, 70, 50, 50);
	$x->ColCaption = array("Property Name", "Type", "Number of units", "Photo", "Owner", "Operating account", "Property reserve", "Street", "City", "State", "ZIP");
	$x->ColFieldName = array('property_name', 'type', 'number_of_units', 'photo', 'owner', 'operating_account', 'property_reserve', 'street', 'City', 'State', 'ZIP');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 11, 12, 13, 14);

	$x->Template = 'templates/properties_templateTV.html';
	$x->SelectedTemplate = 'templates/properties_templateTVS.html';
	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `properties`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='properties' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `properties`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='properties' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`properties`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: properties_init
	$render=TRUE;
	if(function_exists('properties_init')){
		$args=array();
		$render=properties_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: properties_header
	$headerCode='';
	if(function_exists('properties_header')){
		$args=array();
		$headerCode=properties_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: properties_footer
	$footerCode='';
	if(function_exists('properties_footer')){
		$args=array();
		$footerCode=properties_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>