<?php
	$currDir=dirname(__FILE__);
	require("$currDir/incCommon.php");

	// get groupID of anonymous group
	$anonGroupID=sqlValue("select groupID from membership_groups where name='".$adminConfig['anonymousGroup']."'");

	// request to save changes?
	if($_POST['saveChanges']!=''){
		// validate data
		$name=makeSafe($_POST['name']);
		$description=makeSafe($_POST['description']);
		switch($_POST['visitorSignup']){
			case 0:
				$allowSignup=0;
				$needsApproval=1;
				break;
			case 2:
				$allowSignup=1;
				$needsApproval=0;
				break;
			default:
				$allowSignup=1;
				$needsApproval=1;
		}
		###############################
		$applications_leases_insert=checkPermissionVal('applications_leases_insert');
		$applications_leases_view=checkPermissionVal('applications_leases_view');
		$applications_leases_edit=checkPermissionVal('applications_leases_edit');
		$applications_leases_delete=checkPermissionVal('applications_leases_delete');
		###############################
		$residence_and_rental_history_insert=checkPermissionVal('residence_and_rental_history_insert');
		$residence_and_rental_history_view=checkPermissionVal('residence_and_rental_history_view');
		$residence_and_rental_history_edit=checkPermissionVal('residence_and_rental_history_edit');
		$residence_and_rental_history_delete=checkPermissionVal('residence_and_rental_history_delete');
		###############################
		$employment_and_income_history_insert=checkPermissionVal('employment_and_income_history_insert');
		$employment_and_income_history_view=checkPermissionVal('employment_and_income_history_view');
		$employment_and_income_history_edit=checkPermissionVal('employment_and_income_history_edit');
		$employment_and_income_history_delete=checkPermissionVal('employment_and_income_history_delete');
		###############################
		$references_insert=checkPermissionVal('references_insert');
		$references_view=checkPermissionVal('references_view');
		$references_edit=checkPermissionVal('references_edit');
		$references_delete=checkPermissionVal('references_delete');
		###############################
		$applicants_and_tenants_insert=checkPermissionVal('applicants_and_tenants_insert');
		$applicants_and_tenants_view=checkPermissionVal('applicants_and_tenants_view');
		$applicants_and_tenants_edit=checkPermissionVal('applicants_and_tenants_edit');
		$applicants_and_tenants_delete=checkPermissionVal('applicants_and_tenants_delete');
		###############################
		$properties_insert=checkPermissionVal('properties_insert');
		$properties_view=checkPermissionVal('properties_view');
		$properties_edit=checkPermissionVal('properties_edit');
		$properties_delete=checkPermissionVal('properties_delete');
		###############################
		$units_insert=checkPermissionVal('units_insert');
		$units_view=checkPermissionVal('units_view');
		$units_edit=checkPermissionVal('units_edit');
		$units_delete=checkPermissionVal('units_delete');
		###############################
		$rental_owners_insert=checkPermissionVal('rental_owners_insert');
		$rental_owners_view=checkPermissionVal('rental_owners_view');
		$rental_owners_edit=checkPermissionVal('rental_owners_edit');
		$rental_owners_delete=checkPermissionVal('rental_owners_delete');
		###############################

		// new group or old?
		if($_POST['groupID']==''){ // new group
			// make sure group name is unique
			if(sqlValue("select count(1) from membership_groups where name='$name'")){
				echo "<div class=\"alert alert-danger\">Error: Group name already exists. You must choose a unique group name.</div>";
				include("$currDir/incFooter.php");
			}

			// add group
			sql("insert into membership_groups set name='$name', description='$description', allowSignup='$allowSignup', needsApproval='$needsApproval'", $eo);

			// get new groupID
			$groupID=db_insert_id(db_link());

		}else{ // old group
			// validate groupID
			$groupID=intval($_POST['groupID']);

			if($groupID==$anonGroupID){
				$name=$adminConfig['anonymousGroup'];
				$allowSignup=0;
				$needsApproval=0;
			}

			// make sure group name is unique
			if(sqlValue("select count(1) from membership_groups where name='$name' and groupID!='$groupID'")){
				echo "<div class=\"alert alert-danger\">Error: Group name already exists. You must choose a unique group name.</div>";
				include("$currDir/incFooter.php");
			}

			// update group
			sql("update membership_groups set name='$name', description='$description', allowSignup='$allowSignup', needsApproval='$needsApproval' where groupID='$groupID'", $eo);

			// reset then add group permissions
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='applications_leases'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='residence_and_rental_history'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='employment_and_income_history'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='references'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='applicants_and_tenants'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='properties'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='units'", $eo);
			sql("delete from membership_grouppermissions where groupID='$groupID' and tableName='rental_owners'", $eo);
		}

		// add group permissions
		if($groupID){
			// table 'applications_leases'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='applications_leases', allowInsert='$applications_leases_insert', allowView='$applications_leases_view', allowEdit='$applications_leases_edit', allowDelete='$applications_leases_delete'", $eo);
			// table 'residence_and_rental_history'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='residence_and_rental_history', allowInsert='$residence_and_rental_history_insert', allowView='$residence_and_rental_history_view', allowEdit='$residence_and_rental_history_edit', allowDelete='$residence_and_rental_history_delete'", $eo);
			// table 'employment_and_income_history'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='employment_and_income_history', allowInsert='$employment_and_income_history_insert', allowView='$employment_and_income_history_view', allowEdit='$employment_and_income_history_edit', allowDelete='$employment_and_income_history_delete'", $eo);
			// table 'references'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='references', allowInsert='$references_insert', allowView='$references_view', allowEdit='$references_edit', allowDelete='$references_delete'", $eo);
			// table 'applicants_and_tenants'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='applicants_and_tenants', allowInsert='$applicants_and_tenants_insert', allowView='$applicants_and_tenants_view', allowEdit='$applicants_and_tenants_edit', allowDelete='$applicants_and_tenants_delete'", $eo);
			// table 'properties'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='properties', allowInsert='$properties_insert', allowView='$properties_view', allowEdit='$properties_edit', allowDelete='$properties_delete'", $eo);
			// table 'units'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='units', allowInsert='$units_insert', allowView='$units_view', allowEdit='$units_edit', allowDelete='$units_delete'", $eo);
			// table 'rental_owners'
			sql("insert into membership_grouppermissions set groupID='$groupID', tableName='rental_owners', allowInsert='$rental_owners_insert', allowView='$rental_owners_view', allowEdit='$rental_owners_edit', allowDelete='$rental_owners_delete'", $eo);
		}

		// redirect to group editing page
		redirect("admin/pageEditGroup.php?groupID=$groupID");

	}elseif($_GET['groupID']!=''){
		// we have an edit request for a group
		$groupID=intval($_GET['groupID']);
	}

	include("$currDir/incHeader.php");

	if($groupID!=''){
		// fetch group data to fill in the form below
		$res=sql("select * from membership_groups where groupID='$groupID'", $eo);
		if($row=db_fetch_assoc($res)){
			// get group data
			$name=$row['name'];
			$description=$row['description'];
			$visitorSignup=($row['allowSignup']==1 && $row['needsApproval']==1 ? 1 : ($row['allowSignup']==1 ? 2 : 0));

			// get group permissions for each table
			$res=sql("select * from membership_grouppermissions where groupID='$groupID'", $eo);
			while($row=db_fetch_assoc($res)){
				$tableName=$row['tableName'];
				$vIns=$tableName."_insert";
				$vUpd=$tableName."_edit";
				$vDel=$tableName."_delete";
				$vVue=$tableName."_view";
				$$vIns=$row['allowInsert'];
				$$vUpd=$row['allowEdit'];
				$$vDel=$row['allowDelete'];
				$$vVue=$row['allowView'];
			}
		}else{
			// no such group exists
			echo "<div class=\"alert alert-danger\">Error: Group not found!</div>";
			$groupID=0;
		}
	}
?>
<div class="page-header"><h1><?php echo ($groupID ? "Edit Group '$name'" : "Add New Group"); ?></h1></div>
<?php if($anonGroupID==$groupID){ ?>
	<div class="alert alert-warning">Attention! This is the anonymous group.</div>
<?php } ?>
<input type="checkbox" id="showToolTips" value="1" checked><label for="showToolTips">Show tool tips as mouse moves over options</label>
<form method="post" action="pageEditGroup.php">
	<input type="hidden" name="groupID" value="<?php echo $groupID; ?>">
	<div class="table-responsive"><table class="table table-striped">
		<tr>
			<td align="right" class="tdFormCaption" valign="top">
				<div class="formFieldCaption">Group name</div>
				</td>
			<td align="left" class="tdFormInput">
				<input type="text" name="name" <?php echo ($anonGroupID==$groupID ? "readonly" : ""); ?> value="<?php echo $name; ?>" size="20" class="formTextBox">
				<br>
				<?php if($anonGroupID==$groupID){ ?>
					The name of the anonymous group is read-only here.
				<?php }else{ ?>
					If you name the group '<?php echo $adminConfig['anonymousGroup']; ?>', it will be considered the anonymous group<br>
					that defines the permissions of guest visitors that do not log into the system.
				<?php } ?>
				</td>
			</tr>
		<tr>
			<td align="right" valign="top" class="tdFormCaption">
				<div class="formFieldCaption">Description</div>
				</td>
			<td align="left" class="tdFormInput">
				<textarea name="description" cols="50" rows="5" class="formTextBox"><?php echo $description; ?></textarea>
				</td>
			</tr>
		<?php if($anonGroupID!=$groupID){ ?>
		<tr>
			<td align="right" valign="top" class="tdFormCaption">
				<div class="formFieldCaption">Allow visitors to sign up?</div>
				</td>
			<td align="left" class="tdFormInput">
				<?php
					echo htmlRadioGroup(
						"visitorSignup",
						array(0, 1, 2),
						array(
							"No. Only the admin can add users.",
							"Yes, and the admin must approve them.",
							"Yes, and automatically approve them."
						),
						($groupID ? $visitorSignup : $adminConfig['defaultSignUp'])
					);
				?>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan="2" align="right" class="tdFormFooter">
				<input type="submit" name="saveChanges" value="Save changes">
				</td>
			</tr>
		<tr>
			<td colspan="2" class="tdFormHeader">
				<table class="table table-striped">
					<tr>
						<td class="tdFormHeader" colspan="5"><h2>Table permissions for this group</h2></td>
						</tr>
					<?php
						// permissions arrays common to the radio groups below
						$arrPermVal=array(0, 1, 2, 3);
						$arrPermText=array("No", "Owner", "Group", "All");
					?>
					<tr>
						<td class="tdHeader"><div class="ColCaption">Table</div></td>
						<td class="tdHeader"><div class="ColCaption">Insert</div></td>
						<td class="tdHeader"><div class="ColCaption">View</div></td>
						<td class="tdHeader"><div class="ColCaption">Edit</div></td>
						<td class="tdHeader"><div class="ColCaption">Delete</div></td>
						</tr>
				<!-- applications_leases table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Applications/Leases</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(applications_leases_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="applications_leases_insert" value="1" <?php echo ($applications_leases_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applications_leases_view", $arrPermVal, $arrPermText, $applications_leases_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applications_leases_edit", $arrPermVal, $arrPermText, $applications_leases_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applications_leases_delete", $arrPermVal, $arrPermText, $applications_leases_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- residence_and_rental_history table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Residence and rental history</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(residence_and_rental_history_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="residence_and_rental_history_insert" value="1" <?php echo ($residence_and_rental_history_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("residence_and_rental_history_view", $arrPermVal, $arrPermText, $residence_and_rental_history_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("residence_and_rental_history_edit", $arrPermVal, $arrPermText, $residence_and_rental_history_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("residence_and_rental_history_delete", $arrPermVal, $arrPermText, $residence_and_rental_history_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- employment_and_income_history table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Employment and income history</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(employment_and_income_history_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="employment_and_income_history_insert" value="1" <?php echo ($employment_and_income_history_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("employment_and_income_history_view", $arrPermVal, $arrPermText, $employment_and_income_history_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("employment_and_income_history_edit", $arrPermVal, $arrPermText, $employment_and_income_history_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("employment_and_income_history_delete", $arrPermVal, $arrPermText, $employment_and_income_history_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- references table -->
					<tr>
						<td class="tdCaptionCell" valign="top">References</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(references_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="references_insert" value="1" <?php echo ($references_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("references_view", $arrPermVal, $arrPermText, $references_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("references_edit", $arrPermVal, $arrPermText, $references_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("references_delete", $arrPermVal, $arrPermText, $references_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- applicants_and_tenants table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Applicants and tenants</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(applicants_and_tenants_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="applicants_and_tenants_insert" value="1" <?php echo ($applicants_and_tenants_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applicants_and_tenants_view", $arrPermVal, $arrPermText, $applicants_and_tenants_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applicants_and_tenants_edit", $arrPermVal, $arrPermText, $applicants_and_tenants_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("applicants_and_tenants_delete", $arrPermVal, $arrPermText, $applicants_and_tenants_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- properties table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Properties</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(properties_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="properties_insert" value="1" <?php echo ($properties_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("properties_view", $arrPermVal, $arrPermText, $properties_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("properties_edit", $arrPermVal, $arrPermText, $properties_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("properties_delete", $arrPermVal, $arrPermText, $properties_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- units table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Units</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(units_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="units_insert" value="1" <?php echo ($units_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("units_view", $arrPermVal, $arrPermText, $units_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("units_edit", $arrPermVal, $arrPermText, $units_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("units_delete", $arrPermVal, $arrPermText, $units_delete, "highlight");
							?>
							</td>
						</tr>
				<!-- rental_owners table -->
					<tr>
						<td class="tdCaptionCell" valign="top">Rental owners</td>
						<td class="tdCell" valign="top">
							<input onMouseOver="stm(rental_owners_addTip, toolTipStyle);" onMouseOut="htm();" type="checkbox" name="rental_owners_insert" value="1" <?php echo ($rental_owners_insert ? "checked class=\"highlight\"" : ""); ?>>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("rental_owners_view", $arrPermVal, $arrPermText, $rental_owners_view, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("rental_owners_edit", $arrPermVal, $arrPermText, $rental_owners_edit, "highlight");
							?>
							</td>
						<td class="tdCell">
							<?php
								echo htmlRadioGroup("rental_owners_delete", $arrPermVal, $arrPermText, $rental_owners_delete, "highlight");
							?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		<tr>
			<td colspan="2" align="right" class="tdFormFooter">
				<input type="submit" name="saveChanges" value="Save changes">
				</td>
			</tr>
		</table></div>
</form>

	<script>
		$j(function(){
			var highlight_selections = function(){
				$j('input[type=radio]:checked').next().addClass('text-primary');
				$j('input[type=radio]:not(:checked)').next().removeClass('text-primary');
			}

			$j('input[type=radio]').change(function(){ highlight_selections(); });
			highlight_selections();
		});
	</script>


<?php
	include("$currDir/incFooter.php");
?>