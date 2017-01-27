<?php

// Data functions (insert, update, delete, form) for table units

// This script and data application were generated by AppGini 5.51
// Download AppGini for free from http://bigprof.com/appgini/download/

function units_insert(){
	global $Translation;

	// mm: can member insert record?
	$arrPerm=getTablePermissions('units');
	if(!$arrPerm[1]){
		return false;
	}

	$data['property'] = makeSafe($_REQUEST['property']);
		if($data['property'] == empty_lookup_value){ $data['property'] = ''; }
	$data['unit_number'] = makeSafe($_REQUEST['unit_number']);
		if($data['unit_number'] == empty_lookup_value){ $data['unit_number'] = ''; }
	$data['status'] = makeSafe($_REQUEST['status']);
		if($data['status'] == empty_lookup_value){ $data['status'] = ''; }
	if(is_array($_REQUEST['features'])){
		$MultipleSeparator=', ';
		foreach($_REQUEST['features'] as $k => $v)
			$data['features'] .= makeSafe($v) . $MultipleSeparator;
		$data['features'] = substr($data['features'], 0, -1 * strlen($MultipleSeparator));
	}else{
		$data['features']='';
	}
	$data['rental_amount'] = makeSafe($_REQUEST['rental_amount']);
		if($data['rental_amount'] == empty_lookup_value){ $data['rental_amount'] = ''; }
	$data['deposit_amount'] = makeSafe($_REQUEST['deposit_amount']);
		if($data['deposit_amount'] == empty_lookup_value){ $data['deposit_amount'] = ''; }
	$data['other_charges'] = makeSafe($_REQUEST['other_charges']);
		if($data['other_charges'] == empty_lookup_value){ $data['other_charges'] = ''; }
	$data['description'] = makeSafe($_REQUEST['description']);
		if($data['description'] == empty_lookup_value){ $data['description'] = ''; }
	$data['photo'] = PrepareUploadedFile('photo', 1024000,'jpg|jpeg|gif|png', false, '');
	if($data['photo']) createThumbnail($data['photo'], getThumbnailSpecs('units', 'photo', 'tv'));
	if($data['photo']) createThumbnail($data['photo'], getThumbnailSpecs('units', 'photo', 'dv'));
	if($data['status']== ''){
		echo StyleSheet() . "\n\n<div class=\"alert alert-danger\">" . $Translation['error:'] . " 'Status': " . $Translation['field not null'] . '<br><br>';
		echo '<a href="" onclick="history.go(-1); return false;">'.$Translation['< back'].'</a></div>';
		exit;
	}

	/* for empty upload fields, when saving a copy of an existing record, copy the original upload field */
	if($_REQUEST['SelectedID']){
		$res = sql("select * from units where id='" . makeSafe($_REQUEST['SelectedID']) . "'", $eo);
		if($row = db_fetch_assoc($res)){
			if(!$data['photo']) $data['photo'] = makeSafe($row['photo']);
		}
	}

	// hook: units_before_insert
	if(function_exists('units_before_insert')){
		$args=array();
		if(!units_before_insert($data, getMemberInfo(), $args)){ return false; }
	}

	$o = array('silentErrors' => true);
	sql('insert into `units` set       `property`=' . (($data['property'] !== '' && $data['property'] !== NULL) ? "'{$data['property']}'" : 'NULL') . ', `unit_number`=' . (($data['unit_number'] !== '' && $data['unit_number'] !== NULL) ? "'{$data['unit_number']}'" : 'NULL') . ', ' . ($data['photo'] != '' ? "`photo`='{$data['photo']}'" : '`photo`=NULL') . ', `status`=' . (($data['status'] !== '' && $data['status'] !== NULL) ? "'{$data['status']}'" : 'NULL') . ', `features`=' . (($data['features'] !== '' && $data['features'] !== NULL) ? "'{$data['features']}'" : 'NULL') . ', `rental_amount`=' . (($data['rental_amount'] !== '' && $data['rental_amount'] !== NULL) ? "'{$data['rental_amount']}'" : 'NULL') . ', `deposit_amount`=' . (($data['deposit_amount'] !== '' && $data['deposit_amount'] !== NULL) ? "'{$data['deposit_amount']}'" : 'NULL') . ', `other_charges`=' . (($data['other_charges'] !== '' && $data['other_charges'] !== NULL) ? "'{$data['other_charges']}'" : 'NULL') . ', `description`=' . (($data['description'] !== '' && $data['description'] !== NULL) ? "'{$data['description']}'" : 'NULL'), $o);
	if($o['error']!=''){
		echo $o['error'];
		echo "<a href=\"units_view.php?addNew_x=1\">{$Translation['< back']}</a>";
		exit;
	}

	$recID = db_insert_id(db_link());

	// hook: units_after_insert
	if(function_exists('units_after_insert')){
		$res = sql("select * from `units` where `id`='" . makeSafe($recID, false) . "' limit 1", $eo);
		if($row = db_fetch_assoc($res)){
			$data = array_map('makeSafe', $row);
		}
		$data['selectedID'] = makeSafe($recID, false);
		$args=array();
		if(!units_after_insert($data, getMemberInfo(), $args)){ return $recID; }
	}

	// mm: save ownership data
	sql("insert ignore into membership_userrecords set tableName='units', pkValue='" . makeSafe($recID, false) . "', memberID='" . makeSafe(getLoggedMemberID(), false) . "', dateAdded='" . time() . "', dateUpdated='" . time() . "', groupID='" . getLoggedGroupID() . "'", $eo);

	return $recID;
}

function units_delete($selected_id, $AllowDeleteOfParents=false, $skipChecks=false){
	// insure referential integrity ...
	global $Translation;
	$selected_id=makeSafe($selected_id);

	// mm: can member delete record?
	$arrPerm=getTablePermissions('units');
	$ownerGroupID=sqlValue("select groupID from membership_userrecords where tableName='units' and pkValue='$selected_id'");
	$ownerMemberID=sqlValue("select lcase(memberID) from membership_userrecords where tableName='units' and pkValue='$selected_id'");
	if(($arrPerm[4]==1 && $ownerMemberID==getLoggedMemberID()) || ($arrPerm[4]==2 && $ownerGroupID==getLoggedGroupID()) || $arrPerm[4]==3){ // allow delete?
		// delete allowed, so continue ...
	}else{
		return $Translation['You don\'t have enough permissions to delete this record'];
	}

	// hook: units_before_delete
	if(function_exists('units_before_delete')){
		$args=array();
		if(!units_before_delete($selected_id, $skipChecks, getMemberInfo(), $args))
			return $Translation['Couldn\'t delete this record'];
	}

	// child table: applications_leases
	$res = sql("select `id` from `units` where `id`='$selected_id'", $eo);
	$id = db_fetch_row($res);
	$rires = sql("select count(1) from `applications_leases` where `unit`='".addslashes($id[0])."'", $eo);
	$rirow = db_fetch_row($rires);
	if($rirow[0] && !$AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["couldn't delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "applications_leases", $RetMsg);
		return $RetMsg;
	}elseif($rirow[0] && $AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["confirm delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "applications_leases", $RetMsg);
		$RetMsg = str_replace("<Delete>", "<input type=\"button\" class=\"button\" value=\"".$Translation['yes']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."&delete_x=1&confirmed=1';\">", $RetMsg);
		$RetMsg = str_replace("<Cancel>", "<input type=\"button\" class=\"button\" value=\"".$Translation['no']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."';\">", $RetMsg);
		return $RetMsg;
	}

	// child table: applicants_and_tenants
	$res = sql("select `id` from `units` where `id`='$selected_id'", $eo);
	$id = db_fetch_row($res);
	$rires = sql("select count(1) from `applicants_and_tenants` where `unit`='".addslashes($id[0])."'", $eo);
	$rirow = db_fetch_row($rires);
	if($rirow[0] && !$AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["couldn't delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "applicants_and_tenants", $RetMsg);
		return $RetMsg;
	}elseif($rirow[0] && $AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["confirm delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "applicants_and_tenants", $RetMsg);
		$RetMsg = str_replace("<Delete>", "<input type=\"button\" class=\"button\" value=\"".$Translation['yes']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."&delete_x=1&confirmed=1';\">", $RetMsg);
		$RetMsg = str_replace("<Cancel>", "<input type=\"button\" class=\"button\" value=\"".$Translation['no']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."';\">", $RetMsg);
		return $RetMsg;
	}

	// child table: maintenance_tasks
	$res = sql("select `id` from `units` where `id`='$selected_id'", $eo);
	$id = db_fetch_row($res);
	$rires = sql("select count(1) from `maintenance_tasks` where `unit`='".addslashes($id[0])."'", $eo);
	$rirow = db_fetch_row($rires);
	if($rirow[0] && !$AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["couldn't delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "maintenance_tasks", $RetMsg);
		return $RetMsg;
	}elseif($rirow[0] && $AllowDeleteOfParents && !$skipChecks){
		$RetMsg = $Translation["confirm delete"];
		$RetMsg = str_replace("<RelatedRecords>", $rirow[0], $RetMsg);
		$RetMsg = str_replace("<TableName>", "maintenance_tasks", $RetMsg);
		$RetMsg = str_replace("<Delete>", "<input type=\"button\" class=\"button\" value=\"".$Translation['yes']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."&delete_x=1&confirmed=1';\">", $RetMsg);
		$RetMsg = str_replace("<Cancel>", "<input type=\"button\" class=\"button\" value=\"".$Translation['no']."\" onClick=\"window.location='units_view.php?SelectedID=".urlencode($selected_id)."';\">", $RetMsg);
		return $RetMsg;
	}

	sql("delete from `units` where `id`='$selected_id'", $eo);

	// hook: units_after_delete
	if(function_exists('units_after_delete')){
		$args=array();
		units_after_delete($selected_id, getMemberInfo(), $args);
	}

	// mm: delete ownership data
	sql("delete from membership_userrecords where tableName='units' and pkValue='$selected_id'", $eo);
}

function units_update($selected_id){
	global $Translation;

	// mm: can member edit record?
	$arrPerm=getTablePermissions('units');
	$ownerGroupID=sqlValue("select groupID from membership_userrecords where tableName='units' and pkValue='".makeSafe($selected_id)."'");
	$ownerMemberID=sqlValue("select lcase(memberID) from membership_userrecords where tableName='units' and pkValue='".makeSafe($selected_id)."'");
	if(($arrPerm[3]==1 && $ownerMemberID==getLoggedMemberID()) || ($arrPerm[3]==2 && $ownerGroupID==getLoggedGroupID()) || $arrPerm[3]==3){ // allow update?
		// update allowed, so continue ...
	}else{
		return false;
	}

	$data['property'] = makeSafe($_REQUEST['property']);
		if($data['property'] == empty_lookup_value){ $data['property'] = ''; }
	$data['unit_number'] = makeSafe($_REQUEST['unit_number']);
		if($data['unit_number'] == empty_lookup_value){ $data['unit_number'] = ''; }
	$data['status'] = makeSafe($_REQUEST['status']);
		if($data['status'] == empty_lookup_value){ $data['status'] = ''; }
	if($data['status']==''){
		echo StyleSheet() . "\n\n<div class=\"alert alert-danger\">{$Translation['error:']} 'Status': {$Translation['field not null']}<br><br>";
		echo '<a href="" onclick="history.go(-1); return false;">'.$Translation['< back'].'</a></div>';
		exit;
	}
	if(is_array($_REQUEST['features'])){
		$MultipleSeparator = ', ';
		foreach($_REQUEST['features'] as $k => $v)
			$data['features'] .= makeSafe($v) . $MultipleSeparator;
		$data['features']=substr($data['features'], 0, -1 * strlen($MultipleSeparator));
	}else{
		$data['features']='';
	}
	$data['rental_amount'] = makeSafe($_REQUEST['rental_amount']);
		if($data['rental_amount'] == empty_lookup_value){ $data['rental_amount'] = ''; }
	$data['deposit_amount'] = makeSafe($_REQUEST['deposit_amount']);
		if($data['deposit_amount'] == empty_lookup_value){ $data['deposit_amount'] = ''; }
	$data['other_charges'] = makeSafe($_REQUEST['other_charges']);
		if($data['other_charges'] == empty_lookup_value){ $data['other_charges'] = ''; }
	$data['description'] = makeSafe($_REQUEST['description']);
		if($data['description'] == empty_lookup_value){ $data['description'] = ''; }
	$data['selectedID']=makeSafe($selected_id);
	if($_REQUEST['photo_remove'] == 1){
		$data['photo'] = '';
	}else{
		$data['photo'] = PrepareUploadedFile('photo', 1024000, 'jpg|jpeg|gif|png', false, "");
		if($data['photo']) createThumbnail($data['photo'], getThumbnailSpecs('units', 'photo', 'tv'));
		if($data['photo']) createThumbnail($data['photo'], getThumbnailSpecs('units', 'photo', 'dv'));
	}

	// hook: units_before_update
	if(function_exists('units_before_update')){
		$args=array();
		if(!units_before_update($data, getMemberInfo(), $args)){ return false; }
	}

	$o=array('silentErrors' => true);
	sql('update `units` set       `property`=' . (($data['property'] !== '' && $data['property'] !== NULL) ? "'{$data['property']}'" : 'NULL') . ', `unit_number`=' . (($data['unit_number'] !== '' && $data['unit_number'] !== NULL) ? "'{$data['unit_number']}'" : 'NULL') . ', ' . ($data['photo']!='' ? "`photo`='{$data['photo']}'" : ($_REQUEST['photo_remove'] != 1 ? '`photo`=`photo`' : '`photo`=NULL')) . ', `status`=' . (($data['status'] !== '' && $data['status'] !== NULL) ? "'{$data['status']}'" : 'NULL') . ', `features`=' . (($data['features'] !== '' && $data['features'] !== NULL) ? "'{$data['features']}'" : 'NULL') . ', `rental_amount`=' . (($data['rental_amount'] !== '' && $data['rental_amount'] !== NULL) ? "'{$data['rental_amount']}'" : 'NULL') . ', `deposit_amount`=' . (($data['deposit_amount'] !== '' && $data['deposit_amount'] !== NULL) ? "'{$data['deposit_amount']}'" : 'NULL') . ', `other_charges`=' . (($data['other_charges'] !== '' && $data['other_charges'] !== NULL) ? "'{$data['other_charges']}'" : 'NULL') . ', `description`=' . (($data['description'] !== '' && $data['description'] !== NULL) ? "'{$data['description']}'" : 'NULL') . " where `id`='".makeSafe($selected_id)."'", $o);
	if($o['error']!=''){
		echo $o['error'];
		echo '<a href="units_view.php?SelectedID='.urlencode($selected_id)."\">{$Translation['< back']}</a>";
		exit;
	}


	// hook: units_after_update
	if(function_exists('units_after_update')){
		$res = sql("SELECT * FROM `units` WHERE `id`='{$data['selectedID']}' LIMIT 1", $eo);
		if($row = db_fetch_assoc($res)){
			$data = array_map('makeSafe', $row);
		}
		$data['selectedID'] = $data['id'];
		$args = array();
		if(!units_after_update($data, getMemberInfo(), $args)){ return; }
	}

	// mm: update ownership data
	sql("update membership_userrecords set dateUpdated='".time()."' where tableName='units' and pkValue='".makeSafe($selected_id)."'", $eo);

}

function units_form($selected_id = '', $AllowUpdate = 1, $AllowInsert = 1, $AllowDelete = 1, $ShowCancel = 0){
	// function to return an editable form for a table records
	// and fill it with data of record whose ID is $selected_id. If $selected_id
	// is empty, an empty form is shown, with only an 'Add New'
	// button displayed.

	global $Translation;

	// mm: get table permissions
	$arrPerm=getTablePermissions('units');
	if(!$arrPerm[1] && $selected_id==''){ return ''; }
	$AllowInsert = ($arrPerm[1] ? true : false);
	// print preview?
	$dvprint = false;
	if($selected_id && $_REQUEST['dvprint_x'] != ''){
		$dvprint = true;
	}

	$filterer_property = thisOr(undo_magic_quotes($_REQUEST['filterer_property']), '');

	// populate filterers, starting from children to grand-parents

	// unique random identifier
	$rnd1 = ($dvprint ? rand(1000000, 9999999) : '');
	// combobox: property
	$combo_property = new DataCombo;
	// combobox: status
	$combo_status = new Combo;
	$combo_status->ListType = 2;
	$combo_status->MultipleSeparator = ', ';
	$combo_status->ListBoxHeight = 10;
	$combo_status->RadiosPerLine = 1;
	if(is_file(dirname(__FILE__).'/hooks/units.status.csv')){
		$status_data = addslashes(implode('', @file(dirname(__FILE__).'/hooks/units.status.csv')));
		$combo_status->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions($status_data)));
		$combo_status->ListData = $combo_status->ListItem;
	}else{
		$combo_status->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions("Occupied;;Vacant;;Booked")));
		$combo_status->ListData = $combo_status->ListItem;
	}
	$combo_status->SelectName = 'status';
	$combo_status->AllowNull = false;
	// combobox: features
	$combo_features = new Combo;
	$combo_features->ListType = 3;
	$combo_features->MultipleSeparator = ', ';
	$combo_features->ListBoxHeight = 10;
	$combo_features->RadiosPerLine = 1;
	if(is_file(dirname(__FILE__).'/hooks/units.features.csv')){
		$features_data = addslashes(implode('', @file(dirname(__FILE__).'/hooks/units.features.csv')));
		$combo_features->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions($features_data)));
		$combo_features->ListData = $combo_features->ListItem;
	}else{
		$combo_features->ListItem = explode('||', entitiesToUTF8(convertLegacyOptions("Four-Bedroom;;Three-Bedroom;;Two-Bedroom;;One-Bedroom;;Bed-Sitter;;GuestWing")));
		$combo_features->ListData = $combo_features->ListItem;
	}
	$combo_features->SelectName = 'features';

	if($selected_id){
		// mm: check member permissions
		if(!$arrPerm[2]){
			return "";
		}
		// mm: who is the owner?
		$ownerGroupID=sqlValue("select groupID from membership_userrecords where tableName='units' and pkValue='".makeSafe($selected_id)."'");
		$ownerMemberID=sqlValue("select lcase(memberID) from membership_userrecords where tableName='units' and pkValue='".makeSafe($selected_id)."'");
		if($arrPerm[2]==1 && getLoggedMemberID()!=$ownerMemberID){
			return "";
		}
		if($arrPerm[2]==2 && getLoggedGroupID()!=$ownerGroupID){
			return "";
		}

		// can edit?
		if(($arrPerm[3]==1 && $ownerMemberID==getLoggedMemberID()) || ($arrPerm[3]==2 && $ownerGroupID==getLoggedGroupID()) || $arrPerm[3]==3){
			$AllowUpdate=1;
		}else{
			$AllowUpdate=0;
		}

		$res = sql("select * from `units` where `id`='".makeSafe($selected_id)."'", $eo);
		if(!($row = db_fetch_array($res))){
			return error_message($Translation['No records found']);
		}
		$urow = $row; /* unsanitized data */
		$hc = new CI_Input();
		$row = $hc->xss_clean($row); /* sanitize data */
		$combo_property->SelectedData = $row['property'];
		$combo_status->SelectedData = $row['status'];
		$combo_features->SelectedData = $row['features'];
	}else{
		$combo_property->SelectedData = $filterer_property;
		$combo_status->SelectedText = ( $_REQUEST['FilterField'][1]=='5' && $_REQUEST['FilterOperator'][1]=='<=>' ? (get_magic_quotes_gpc() ? stripslashes($_REQUEST['FilterValue'][1]) : $_REQUEST['FilterValue'][1]) : "");
	}
	$combo_property->HTML = '<span id="property-container' . $rnd1 . '"></span><input type="hidden" name="property" id="property' . $rnd1 . '" value="' . html_attr($combo_property->SelectedData) . '">';
	$combo_property->MatchText = '<span id="property-container-readonly' . $rnd1 . '"></span><input type="hidden" name="property" id="property' . $rnd1 . '" value="' . html_attr($combo_property->SelectedData) . '">';
	$combo_status->Render();
	$combo_features->Render();

	ob_start();
	?>

	<script>
		// initial lookup values
		var current_property__RAND__ = { text: "", value: "<?php echo addslashes($selected_id ? $urow['property'] : $filterer_property); ?>"};

		jQuery(function() {
			if(typeof(property_reload__RAND__) == 'function') property_reload__RAND__();
		});
		function property_reload__RAND__(){
		<?php if(($AllowUpdate || $AllowInsert) && !$dvprint){ ?>

			jQuery("#property-container__RAND__").select2({
				/* initial default value */
				initSelection: function(e, c){
					jQuery.ajax({
						url: 'ajax_combo.php',
						dataType: 'json',
						data: { id: current_property__RAND__.value, t: 'units', f: 'property' }
					}).done(function(resp){
						c({
							id: resp.results[0].id,
							text: resp.results[0].text
						});
						$j('[name="property"]').val(resp.results[0].id);
						$j('[id=property-container-readonly__RAND__]').html('<span id="property-match-text">' + resp.results[0].text + '</span>');
						if(resp.results[0].id == '<?php echo empty_lookup_value; ?>'){ $j('.btn[id=properties_view_parent]').hide(); }else{ $j('.btn[id=properties_view_parent]').show(); }


						if(typeof(property_update_autofills__RAND__) == 'function') property_update_autofills__RAND__();
					});
				},
				width: ($j('fieldset .col-xs-11').width() - 99) + 'px',
				formatNoMatches: function(term){ return '<?php echo addslashes($Translation['No matches found!']); ?>'; },
				minimumResultsForSearch: 10,
				loadMorePadding: 200,
				ajax: {
					url: 'ajax_combo.php',
					dataType: 'json',
					cache: true,
					data: function(term, page){ return { s: term, p: page, t: 'units', f: 'property' }; },
					results: function(resp, page){ return resp; }
				}
			}).on('change', function(e){
				current_property__RAND__.value = e.added.id;
				current_property__RAND__.text = e.added.text;
				$j('[name="property"]').val(e.added.id);
				if(e.added.id == '<?php echo empty_lookup_value; ?>'){ $j('.btn[id=properties_view_parent]').hide(); }else{ $j('.btn[id=properties_view_parent]').show(); }


				if(typeof(property_update_autofills__RAND__) == 'function') property_update_autofills__RAND__();
			});

			if(!$j("#property-container__RAND__").length){
				$j.ajax({
					url: 'ajax_combo.php',
					dataType: 'json',
					data: { id: current_property__RAND__.value, t: 'units', f: 'property' }
				}).done(function(resp){
					$j('[name="property"]').val(resp.results[0].id);
					$j('[id=property-container-readonly__RAND__]').html('<span id="property-match-text">' + resp.results[0].text + '</span>');
					if(resp.results[0].id == '<?php echo empty_lookup_value; ?>'){ $j('.btn[id=properties_view_parent]').hide(); }else{ $j('.btn[id=properties_view_parent]').show(); }

					if(typeof(property_update_autofills__RAND__) == 'function') property_update_autofills__RAND__();
				});
			}

		<?php }else{ ?>

			$j.ajax({
				url: 'ajax_combo.php',
				dataType: 'json',
				data: { id: current_property__RAND__.value, t: 'units', f: 'property' }
			}).done(function(resp){
				$j('[id=property-container__RAND__], [id=property-container-readonly__RAND__]').html('<span id="property-match-text">' + resp.results[0].text + '</span>');
				if(resp.results[0].id == '<?php echo empty_lookup_value; ?>'){ $j('.btn[id=properties_view_parent]').hide(); }else{ $j('.btn[id=properties_view_parent]').show(); }

				if(typeof(property_update_autofills__RAND__) == 'function') property_update_autofills__RAND__();
			});
		<?php } ?>

		}
	</script>
	<?php

	$lookups = str_replace('__RAND__', $rnd1, ob_get_contents());
	ob_end_clean();


	// code for template based detail view forms

	// open the detail view template
	if($dvprint){
		$templateCode = @file_get_contents('./templates/units_templateDVP.html');
	}else{
		$templateCode = @file_get_contents('./templates/units_templateDV.html');
	}

	// process form title
	$templateCode = str_replace('<%%DETAIL_VIEW_TITLE%%>', 'Unit details', $templateCode);
	$templateCode = str_replace('<%%RND1%%>', $rnd1, $templateCode);
	$templateCode = str_replace('<%%EMBEDDED%%>', ($_REQUEST['Embedded'] ? 'Embedded=1' : ''), $templateCode);
	// process buttons
	if($AllowInsert){
		if(!$selected_id) $templateCode=str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-success" id="insert" name="insert_x" value="1" onclick="return units_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save New'] . '</button>', $templateCode);
		$templateCode=str_replace('<%%INSERT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="insert" name="insert_x" value="1" onclick="return units_validateData();"><i class="glyphicon glyphicon-plus-sign"></i> ' . $Translation['Save As Copy'] . '</button>', $templateCode);
	}else{
		$templateCode=str_replace('<%%INSERT_BUTTON%%>', '', $templateCode);
	}

	// 'Back' button action
	if($_REQUEST['Embedded']){
		$backAction = 'window.parent.jQuery(\'.modal\').modal(\'hide\'); return false;';
	}else{
		$backAction = '$$(\'form\')[0].writeAttribute(\'novalidate\', \'novalidate\'); document.myform.reset(); return true;';
	}

	if($selected_id){
		if(!$_REQUEST['Embedded']) $templateCode=str_replace('<%%DVPRINT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="dvprint" name="dvprint_x" value="1" onclick="$$(\'form\')[0].writeAttribute(\'novalidate\', \'novalidate\'); document.myform.reset(); return true;"><i class="glyphicon glyphicon-print"></i> ' . $Translation['Print Preview'] . '</button>', $templateCode);
		if($AllowUpdate){
			$templateCode=str_replace('<%%UPDATE_BUTTON%%>', '<button type="submit" class="btn btn-success btn-lg" id="update" name="update_x" value="1" onclick="return units_validateData();"><i class="glyphicon glyphicon-ok"></i> ' . $Translation['Save Changes'] . '</button>', $templateCode);
		}else{
			$templateCode=str_replace('<%%UPDATE_BUTTON%%>', '', $templateCode);
		}
		if(($arrPerm[4]==1 && $ownerMemberID==getLoggedMemberID()) || ($arrPerm[4]==2 && $ownerGroupID==getLoggedGroupID()) || $arrPerm[4]==3){ // allow delete?
			$templateCode=str_replace('<%%DELETE_BUTTON%%>', '<button type="submit" class="btn btn-danger" id="delete" name="delete_x" value="1" onclick="return confirm(\'' . $Translation['are you sure?'] . '\');"><i class="glyphicon glyphicon-trash"></i> ' . $Translation['Delete'] . '</button>', $templateCode);
		}else{
			$templateCode=str_replace('<%%DELETE_BUTTON%%>', '', $templateCode);
		}
		$templateCode=str_replace('<%%DESELECT_BUTTON%%>', '<button type="submit" class="btn btn-default" id="deselect" name="deselect_x" value="1" onclick="' . $backAction . '"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['Back'] . '</button>', $templateCode);
	}else{
		$templateCode=str_replace('<%%UPDATE_BUTTON%%>', '', $templateCode);
		$templateCode=str_replace('<%%DELETE_BUTTON%%>', '', $templateCode);
		$templateCode=str_replace('<%%DESELECT_BUTTON%%>', ($ShowCancel ? '<button type="submit" class="btn btn-default" id="deselect" name="deselect_x" value="1" onclick="' . $backAction . '"><i class="glyphicon glyphicon-chevron-left"></i> ' . $Translation['Back'] . '</button>' : ''), $templateCode);
	}

	// set records to read only if user can't insert new records and can't edit current record
	if(($selected_id && !$AllowUpdate && !$AllowInsert) || (!$selected_id && !$AllowInsert)){
		$jsReadOnly .= "\tjQuery('#property').prop('disabled', true).css({ color: '#555', backgroundColor: '#fff' });\n";
		$jsReadOnly .= "\tjQuery('#property_caption').prop('disabled', true).css({ color: '#555', backgroundColor: 'white' });\n";
		$jsReadOnly .= "\tjQuery('#unit_number').replaceWith('<div class=\"form-control-static\" id=\"unit_number\">' + (jQuery('#unit_number').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#photo').replaceWith('<div class=\"form-control-static\" id=\"photo\">' + (jQuery('#photo').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('input[name=status]').parent().html('<div class=\"form-control-static\">' + jQuery('input[name=status]:checked').next().text() + '</div>')\n";
		$jsReadOnly .= "\tjQuery('#features').replaceWith('<div class=\"form-control-static\" id=\"features\">' + (jQuery('#features').val() || '') + '</div>'); jQuery('#features-multi-selection-help').hide();\n";
		$jsReadOnly .= "\tjQuery('#s2id_features').remove();\n";
		$jsReadOnly .= "\tjQuery('#rental_amount').replaceWith('<div class=\"form-control-static\" id=\"rental_amount\">' + (jQuery('#rental_amount').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#deposit_amount').replaceWith('<div class=\"form-control-static\" id=\"deposit_amount\">' + (jQuery('#deposit_amount').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('#other_charges').replaceWith('<div class=\"form-control-static\" id=\"other_charges\">' + (jQuery('#other_charges').val() || '') + '</div>');\n";
		$jsReadOnly .= "\tjQuery('.select2-container').hide();\n";

		$noUploads = true;
	}elseif($AllowInsert){
		$jsEditable .= "\tjQuery('form').eq(0).data('already_changed', true);"; // temporarily disable form change handler
			$jsEditable .= "\tjQuery('form').eq(0).data('already_changed', false);"; // re-enable form change handler
	}

	// process combos
	$templateCode=str_replace('<%%COMBO(property)%%>', $combo_property->HTML, $templateCode);
	$templateCode=str_replace('<%%COMBOTEXT(property)%%>', $combo_property->MatchText, $templateCode);
	$templateCode=str_replace('<%%URLCOMBOTEXT(property)%%>', urlencode($combo_property->MatchText), $templateCode);
	$templateCode=str_replace('<%%COMBO(status)%%>', $combo_status->HTML, $templateCode);
	$templateCode=str_replace('<%%COMBOTEXT(status)%%>', $combo_status->SelectedData, $templateCode);
	$templateCode=str_replace('<%%COMBO(features)%%>', $combo_features->HTML, $templateCode);
	$templateCode=str_replace('<%%COMBOTEXT(features)%%>', $combo_features->SelectedData, $templateCode);

	/* lookup fields array: 'lookup field name' => array('parent table name', 'lookup field caption') */
	$lookup_fields = array(  'property' => array('properties', 'Property'));
	foreach($lookup_fields as $luf => $ptfc){
		$pt_perm = getTablePermissions($ptfc[0]);

		// process foreign key links
		if($pt_perm['view'] || $pt_perm['edit']){
			$templateCode = str_replace("<%%PLINK({$luf})%%>", '<button type="button" class="btn btn-default view_parent hspacer-md" id="' . $ptfc[0] . '_view_parent" title="' . html_attr($Translation['View'] . ' ' . $ptfc[1]) . '"><i class="glyphicon glyphicon-eye-open"></i></button>', $templateCode);
		}

		// if user has insert permission to parent table of a lookup field, put an add new button
		if($pt_perm['insert'] && !$_REQUEST['Embedded']){
			$templateCode = str_replace("<%%ADDNEW({$ptfc[0]})%%>", '<button type="button" class="btn btn-success add_new_parent hspacer-md" id="' . $ptfc[0] . '_add_new" title="' . html_attr($Translation['Add New'] . ' ' . $ptfc[1]) . '"><i class="glyphicon glyphicon-plus-sign"></i></button>', $templateCode);
		}
	}

	// process images
	$templateCode=str_replace('<%%UPLOADFILE(id)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(property)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(unit_number)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(photo)%%>', ($noUploads ? '' : '<input type=hidden name=MAX_FILE_SIZE value=1024000>'.$Translation['upload image'].' <input type="file" name="photo" id="photo">'), $templateCode);
	if($AllowUpdate && $row['photo']!=''){
		$templateCode=str_replace('<%%REMOVEFILE(photo)%%>', '<br><input type="checkbox" name="photo_remove" id="photo_remove" value="1"> <label for="photo_remove" style="color: red; font-weight: bold;">'.$Translation['remove image'].'</label>', $templateCode);
	}else{
		$templateCode=str_replace('<%%REMOVEFILE(photo)%%>', '', $templateCode);
	}
	$templateCode=str_replace('<%%UPLOADFILE(status)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(features)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(rental_amount)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(deposit_amount)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(other_charges)%%>', '', $templateCode);
	$templateCode=str_replace('<%%UPLOADFILE(description)%%>', '', $templateCode);

	// process values
	if($selected_id){
		$templateCode=str_replace('<%%VALUE(id)%%>', html_attr($row['id']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(id)%%>', urlencode($urow['id']), $templateCode);
		$templateCode=str_replace('<%%VALUE(property)%%>', html_attr($row['property']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(property)%%>', urlencode($urow['property']), $templateCode);
		$templateCode=str_replace('<%%VALUE(unit_number)%%>', html_attr($row['unit_number']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(unit_number)%%>', urlencode($urow['unit_number']), $templateCode);
		$row['photo']=($row['photo']!=''?$row['photo']:'blank.gif');
		$templateCode=str_replace('<%%VALUE(photo)%%>', html_attr($row['photo']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(photo)%%>', urlencode($urow['photo']), $templateCode);
		$templateCode=str_replace('<%%VALUE(status)%%>', html_attr($row['status']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(status)%%>', urlencode($urow['status']), $templateCode);
		$templateCode=str_replace('<%%VALUE(features)%%>', html_attr($row['features']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(features)%%>', urlencode($urow['features']), $templateCode);
		$templateCode=str_replace('<%%VALUE(rental_amount)%%>', html_attr($row['rental_amount']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(rental_amount)%%>', urlencode($urow['rental_amount']), $templateCode);
		$templateCode=str_replace('<%%VALUE(deposit_amount)%%>', html_attr($row['deposit_amount']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(deposit_amount)%%>', urlencode($urow['deposit_amount']), $templateCode);
		$templateCode=str_replace('<%%VALUE(other_charges)%%>', html_attr($row['other_charges']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(other_charges)%%>', urlencode($urow['other_charges']), $templateCode);
		if($AllowUpdate || $AllowInsert){
			$templateCode = str_replace('<%%HTMLAREA(description)%%>', '<textarea name="description" id="description" rows="5">' . html_attr($row['description']) . '</textarea>', $templateCode);
		}else{
			$templateCode = str_replace('<%%HTMLAREA(description)%%>', '<div id="description" class="form-control-static">' . $row['description'] . '</div>', $templateCode);
		}
		$templateCode=str_replace('<%%VALUE(description)%%>', nl2br($row['description']), $templateCode);
		$templateCode=str_replace('<%%URLVALUE(description)%%>', urlencode($urow['description']), $templateCode);
	}else{
		$templateCode=str_replace('<%%VALUE(id)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(id)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(property)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(property)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(unit_number)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(unit_number)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(photo)%%>', 'blank.gif', $templateCode);
		$templateCode=str_replace('<%%VALUE(status)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(status)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(features)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(features)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(rental_amount)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(rental_amount)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(deposit_amount)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(deposit_amount)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%VALUE(other_charges)%%>', '', $templateCode);
		$templateCode=str_replace('<%%URLVALUE(other_charges)%%>', urlencode(''), $templateCode);
		$templateCode=str_replace('<%%HTMLAREA(description)%%>', '<textarea name="description" id="description" rows="5"></textarea>', $templateCode);
	}

	// process translations
	foreach($Translation as $symbol=>$trans){
		$templateCode=str_replace("<%%TRANSLATION($symbol)%%>", $trans, $templateCode);
	}

	// clear scrap
	$templateCode=str_replace('<%%', '<!-- ', $templateCode);
	$templateCode=str_replace('%%>', ' -->', $templateCode);

	// hide links to inaccessible tables
	if($_REQUEST['dvprint_x'] == ''){
		$templateCode .= "\n\n<script>\$j(function(){\n";
		$arrTables = getTableList();
		foreach($arrTables as $name => $caption){
			$templateCode .= "\t\$j('#{$name}_link').removeClass('hidden');\n";
			$templateCode .= "\t\$j('#xs_{$name}_link').removeClass('hidden');\n";
		}

		$templateCode .= $jsReadOnly;
		$templateCode .= $jsEditable;

		if(!$selected_id){
		}

		$templateCode.="\n});</script>\n";
	}

	// ajaxed auto-fill fields
	$templateCode .= '<script>';
	$templateCode .= '$j(function() {';


	$templateCode.="});";
	$templateCode.="</script>";
	$templateCode .= $lookups;

	// handle enforced parent values for read-only lookup fields

	// don't include blank images in lightbox gallery
	$templateCode = preg_replace('/blank.gif" data-lightbox=".*?"/', 'blank.gif"', $templateCode);

	// don't display empty email links
	$templateCode=preg_replace('/<a .*?href="mailto:".*?<\/a>/', '', $templateCode);

	// hook: units_dv
	if(function_exists('units_dv')){
		$args=array();
		units_dv(($selected_id ? $selected_id : FALSE), getMemberInfo(), $templateCode, $args);
	}

	return $templateCode;
}
?>