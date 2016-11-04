<?php
// This script and data application were generated by AppGini 5.51
// Download AppGini for free from http://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/xyz.php");
	include("$currDir/xyz_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('xyz');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "xyz";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV=array(   
		"`xyz`.`id`" => "id",
		"`xyz`.`name`" => "name"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`xyz`.`id`',
		2 => 2
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV=array(   
		"`xyz`.`id`" => "id",
		"`xyz`.`name`" => "name"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters=array(   
		"`xyz`.`id`" => "ID",
		"`xyz`.`name`" => "Name"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS=array(   
		"`xyz`.`id`" => "id",
		"`xyz`.`name`" => "name"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom="`xyz` ";
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
	$x->ScriptFileName = "xyz_view.php";
	$x->RedirectAfterInsert = "xyz_view.php?SelectedID=#ID#";
	$x->TableTitle = "Xyz";
	$x->TableIcon = "table.gif";
	$x->PrimaryKey = "`xyz`.`id`";

	$x->ColWidth   = array(  150);
	$x->ColCaption = array("Name");
	$x->ColFieldName = array('name');
	$x->ColNumber  = array(2);

	$x->Template = 'templates/xyz_templateTV.html';
	$x->SelectedTemplate = 'templates/xyz_templateTVS.html';
	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `xyz`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='xyz' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `xyz`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='xyz' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`xyz`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: xyz_init
	$render=TRUE;
	if(function_exists('xyz_init')){
		$args=array();
		$render=xyz_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: xyz_header
	$headerCode='';
	if(function_exists('xyz_header')){
		$args=array();
		$headerCode=xyz_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: xyz_footer
	$footerCode='';
	if(function_exists('xyz_footer')){
		$args=array();
		$footerCode=xyz_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>