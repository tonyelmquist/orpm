<?php
	$currDir=dirname(__FILE__);
	require("$currDir/incCommon.php");
	include("$currDir/incHeader.php");

	/* application schema as created in AppGini */
	$schema = array(   
		'applications_leases' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'tenants' => array('appgini' => 'INT unsigned '),
			'status' => array('appgini' => 'VARCHAR(40) not null default \'Application\' '),
			'property' => array('appgini' => 'INT unsigned '),
			'unit' => array('appgini' => 'INT unsigned '),
			'type' => array('appgini' => 'VARCHAR(40) not null default \'Fixed\' '),
			'total_number_of_occupants' => array('appgini' => 'VARCHAR(15) '),
			'start_date' => array('appgini' => 'DATE '),
			'end_date' => array('appgini' => 'DATE '),
			'recurring_charges_frequency' => array('appgini' => 'VARCHAR(40) not null default \'Monthly\' '),
			'next_due_date' => array('appgini' => 'DATE '),
			'rent' => array('appgini' => 'DECIMAL(8,2) '),
			'security_deposit' => array('appgini' => 'DECIMAL(15,2) '),
			'security_deposit_date' => array('appgini' => 'DATE '),
			'emergency_contact' => array('appgini' => 'VARCHAR(100) '),
			'co_signer_details' => array('appgini' => 'VARCHAR(100) '),
			'notes' => array('appgini' => 'TEXT '),
			'agreement' => array('appgini' => 'VARCHAR(40) ')
		),
		'residence_and_rental_history' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'tenant' => array('appgini' => 'INT unsigned '),
			'address' => array('appgini' => 'VARCHAR(40) '),
			'landlord_or_manager_name' => array('appgini' => 'VARCHAR(15) '),
			'landlord_or_manager_phone' => array('appgini' => 'VARCHAR(15) '),
			'monthly_rent' => array('appgini' => 'DECIMAL(6,2) '),
			'duration_of_residency_from' => array('appgini' => 'DATE '),
			'to' => array('appgini' => 'DATE '),
			'reason_for_leaving' => array('appgini' => 'VARCHAR(40) '),
			'notes' => array('appgini' => 'TEXT ')
		),
		'employment_and_income_history' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'tenant' => array('appgini' => 'INT unsigned '),
			'employer_name' => array('appgini' => 'VARCHAR(15) '),
			'city' => array('appgini' => 'VARCHAR(20) '),
			'employer_phone' => array('appgini' => 'VARCHAR(15) '),
			'employed_from' => array('appgini' => 'DATE '),
			'employed_till' => array('appgini' => 'DATE '),
			'occupation' => array('appgini' => 'VARCHAR(40) '),
			'notes' => array('appgini' => 'TEXT ')
		),
		'references' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'tenant' => array('appgini' => 'INT unsigned '),
			'reference_name' => array('appgini' => 'VARCHAR(15) '),
			'phone' => array('appgini' => 'VARCHAR(15) ')
		),
		'applicants_and_tenants' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'last_name' => array('appgini' => 'VARCHAR(15) '),
			'first_name' => array('appgini' => 'VARCHAR(15) '),
			'email' => array('appgini' => 'VARCHAR(80) '),
			'phone' => array('appgini' => 'VARCHAR(15) '),
			'birth_date' => array('appgini' => 'DATE '),
			'driver_license_number' => array('appgini' => 'VARCHAR(15) '),
			'driver_license_state' => array('appgini' => 'VARCHAR(15) '),
			'requested_lease_term' => array('appgini' => 'VARCHAR(15) '),
			'monthly_gross_pay' => array('appgini' => 'DECIMAL(8,2) '),
			'additional_income' => array('appgini' => 'DECIMAL(8,2) '),
			'assets' => array('appgini' => 'DECIMAL(8,2) '),
			'status' => array('appgini' => 'VARCHAR(40) not null default \'Applicant\' '),
			'notes' => array('appgini' => 'TEXT ')
		),
		'properties' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'property_name' => array('appgini' => 'TEXT not null '),
			'type' => array('appgini' => 'VARCHAR(40) not null '),
			'number_of_units' => array('appgini' => 'DECIMAL(15,0) '),
			'photo' => array('appgini' => 'VARCHAR(40) '),
			'owner' => array('appgini' => 'INT unsigned '),
			'operating_account' => array('appgini' => 'VARCHAR(40) '),
			'property_reserve' => array('appgini' => 'DECIMAL(15,0) '),
			'lease_term' => array('appgini' => 'VARCHAR(15) '),
			'country' => array('appgini' => 'VARCHAR(40) '),
			'street' => array('appgini' => 'VARCHAR(40) '),
			'City' => array('appgini' => 'VARCHAR(40) '),
			'State' => array('appgini' => 'VARCHAR(40) '),
			'ZIP' => array('appgini' => 'DECIMAL(15,0) ')
		),
		'units' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'property' => array('appgini' => 'INT unsigned '),
			'unit_number' => array('appgini' => 'VARCHAR(40) '),
			'photo' => array('appgini' => 'VARCHAR(40) '),
			'status' => array('appgini' => 'VARCHAR(40) not null '),
			'size' => array('appgini' => 'VARCHAR(40) '),
			'country' => array('appgini' => 'INT unsigned '),
			'street' => array('appgini' => 'INT unsigned '),
			'city' => array('appgini' => 'INT unsigned '),
			'state' => array('appgini' => 'INT unsigned '),
			'postal_code' => array('appgini' => 'INT unsigned '),
			'rooms' => array('appgini' => 'VARCHAR(40) '),
			'bathroom' => array('appgini' => 'DECIMAL(15,0) '),
			'features' => array('appgini' => 'TEXT '),
			'market_rent' => array('appgini' => 'DECIMAL(15,0) '),
			'rental_amount' => array('appgini' => 'DECIMAL(6,2) '),
			'deposit_amount' => array('appgini' => 'DECIMAL(6,2) '),
			'description' => array('appgini' => 'TEXT ')
		),
		'rental_owners' => array(   
			'id' => array('appgini' => 'INT unsigned not null primary key auto_increment '),
			'first_name' => array('appgini' => 'VARCHAR(40) '),
			'last_name' => array('appgini' => 'VARCHAR(40) '),
			'company_name' => array('appgini' => 'VARCHAR(40) '),
			'date_of_birth' => array('appgini' => 'DATE '),
			'primary_email' => array('appgini' => 'VARCHAR(40) '),
			'alternate_email' => array('appgini' => 'VARCHAR(40) '),
			'phone' => array('appgini' => 'VARCHAR(40) '),
			'country' => array('appgini' => 'VARCHAR(40) '),
			'street' => array('appgini' => 'VARCHAR(40) '),
			'city' => array('appgini' => 'VARCHAR(40) '),
			'state' => array('appgini' => 'VARCHAR(40) '),
			'zip' => array('appgini' => 'DECIMAL(15,0) '),
			'comments' => array('appgini' => 'TEXT ')
		)
	);

	$table_captions = getTableList();

	/* function for preparing field definition for comparison */
	function prepare_def($def){
		$def = trim($def);
		$def = strtolower($def);

		/* ignore length for int data types */
		$def = preg_replace('/int\w*\([0-9]+\)/', 'int', $def);

		/* make sure there is always a space before mysql words */
		$def = preg_replace('/(\S)(unsigned|not null|binary|zerofill|auto_increment|default)/', '$1 $2', $def);

		/* treat 0.000.. same as 0 */
		$def = preg_replace('/([0-9])*\.0+/', '$1', $def);

		/* treat unsigned zerofill same as zerofill */
		$def = str_ireplace('unsigned zerofill', 'zerofill', $def);

		/* ignore zero-padding for date data types */
		$def = preg_replace("/date\s*default\s*'([0-9]{4})-0?([1-9])-0?([1-9])'/i", "date default '$1-$2-$3'", $def);

		return $def;
	}

	/* process requested fixes */
	$fix_table = (isset($_GET['t']) ? $_GET['t'] : false);
	$fix_field = (isset($_GET['f']) ? $_GET['f'] : false);

	if($fix_table && $fix_field && isset($schema[$fix_table][$fix_field])){
		$field_added = $field_updated = false;

		// field exists?
		$res = sql("show columns from `{$fix_table}` like '{$fix_field}'", $eo);
		if($row = db_fetch_assoc($res)){
			// modify field
			$qry = "alter table `{$fix_table}` modify `{$fix_field}` {$schema[$fix_table][$fix_field]['appgini']}";
			sql($qry, $eo);
			$field_updated = true;
		}else{
			// create field
			$qry = "alter table `{$fix_table}` add column `{$fix_field}` {$schema[$fix_table][$fix_field]['appgini']}";
			sql($qry, $eo);
			$field_added = true;
		}
	}

	foreach($table_captions as $tn => $tc){
		$eo['silentErrors'] = true;
		$res = sql("show columns from `{$tn}`", $eo);
		if($res){
			while($row = db_fetch_assoc($res)){
				if(!isset($schema[$tn][$row['Field']]['appgini'])) continue;
				$field_description = strtoupper(str_replace(' ', '', $row['Type']));
				$field_description = str_ireplace('unsigned', ' unsigned', $field_description);
				$field_description = str_ireplace('zerofill', ' zerofill', $field_description);
				$field_description = str_ireplace('binary', ' binary', $field_description);
				$field_description .= ($row['Null'] == 'NO' ? ' not null' : '');
				$field_description .= ($row['Key'] == 'PRI' ? ' primary key' : '');
				$field_description .= ($row['Key'] == 'UNI' ? ' unique' : '');
				$field_description .= ($row['Default'] != '' ? " default '" . makeSafe($row['Default']) . "'" : '');
				$field_description .= ($row['Extra'] == 'auto_increment' ? ' auto_increment' : '');

				$schema[$tn][$row['Field']]['db'] = '';
				if(isset($schema[$tn][$row['Field']])){
					$schema[$tn][$row['Field']]['db'] = $field_description;
				}
			}
		}
	}
?>

<?php if($field_added || $field_updated){ ?>
	<div class="alert alert-info alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<i class="glyphicon glyphicon-info-sign"></i>
		An attempt to <?php echo ($field_added ? 'create' : 'update'); ?> the field <i><?php echo $fix_field; ?></i> in <i><?php echo $fix_table; ?></i> table
		was made by executing this query:
		<pre><?php echo $qry; ?></pre>
		Results are shown below.
	</div>
<?php } ?>

<div class="page-header"><h1>
	View/Rebuild fields
	<button type="button" class="btn btn-default" id="show_deviations_only"><i class="glyphicon glyphicon-eye-close"></i> Show deviations only</button>
	<button type="button" class="btn btn-default hidden" id="show_all_fields"><i class="glyphicon glyphicon-eye-open"></i> Show all fields</button>
</h1></div>

<p class="lead">This page compares the tables and fields structure/schema as designed in AppGini to the actual database structure and allows you to fix any deviations.</p>

<div class="alert summary"></div>
<table class="table table-responsive table-hover table-striped">
	<thead><tr>
		<th></th>
		<th>Field</th>
		<th>AppGini definition</th>
		<th>Current definition in the database</th>
		<th></th>
	</tr></thead>

	<tbody>
	<?php foreach($schema as $tn => $fields){ ?>
		<tr class="text-info"><td colspan="5"><h4 data-placement="left" data-toggle="tooltip" title="<?php echo $tn; ?> table"><i class="glyphicon glyphicon-th-list"></i> <?php echo $table_captions[$tn]; ?></h4></td></tr>
		<?php foreach($fields as $fn => $fd){ ?>
			<?php $diff = ((prepare_def($fd['appgini']) == prepare_def($fd['db'])) ? false : true); ?>
			<?php $no_db = ($fd['db'] ? false : true); ?>
			<tr class="<?php echo ($diff ? 'highlight' : 'field_ok'); ?>">
				<td><i class="glyphicon glyphicon-<?php echo ($diff ? 'remove text-danger' : 'ok text-success'); ?>"></i></td>
				<td><?php echo $fn; ?></td>
				<td class="<?php echo ($diff ? 'bold text-success' : ''); ?>"><?php echo $fd['appgini']; ?></td>
				<td class="<?php echo ($diff ? 'bold text-danger' : ''); ?>"><?php echo thisOr($fd['db'], "Doesn't exist!"); ?></td>
				<td>
					<?php if($diff && $no_db){ ?>
						<a href="pageRebuildFields.php?t=<?php echo $tn; ?>&f=<?php echo $fn; ?>" class="btn btn-success btn-xs btn_create" data-toggle="tooltip" data-placement="top" title="Create the field by running an ADD COLUMN query."><i class="glyphicon glyphicon-plus"></i> Create it</a>
					<?php }elseif($diff){ ?>
						<a href="pageRebuildFields.php?t=<?php echo $tn; ?>&f=<?php echo $fn; ?>" class="btn btn-warning btn-xs btn_update" data-toggle="tooltip" title="Fix the field by running an ALTER COLUMN query so that its definition becomes the same as that in AppGini."><i class="glyphicon glyphicon-cog"></i> Fix it</a>
					<?php } ?>
				</td>
			</tr>
		<?php } ?>
	<?php } ?>
	</tbody>
</table>
<div class="alert summary"></div>

<style>
	.bold{ font-weight: bold; }
	.highlight, .highlight td{ background-color: #FFFFE0 !important; }
	[data-toggle="tooltip"]{ display: block !important; }
</style>

<script>
	jQuery(function(){
		jQuery('[data-toggle="tooltip"]').tooltip();

		jQuery('#show_deviations_only').click(function(){
			jQuery(this).addClass('hidden');
			jQuery('#show_all_fields').removeClass('hidden');
			jQuery('.field_ok').hide();
		});

		jQuery('#show_all_fields').click(function(){
			jQuery(this).addClass('hidden');
			jQuery('#show_deviations_only').removeClass('hidden');
			jQuery('.field_ok').show();
		});

		jQuery('.btn_update').click(function(){
			return confirm("DANGER!! In some cases, this might lead to data loss, truncation, or corruption. It might be a better idea sometimes to update the field in AppGini to match that in the database. Would you still like to continue?");
		});

		var count_updates = jQuery('.btn_update').length;
		var count_creates = jQuery('.btn_create').length;
		if(!count_creates && !count_updates){
			jQuery('.summary').addClass('alert-success').html('No deviations found. All fields OK!');
		}else{
			jQuery('.summary')
				.addClass('alert-warning')
				.html(
					'Found ' + count_creates + ' non-existing fields that need to be created.<br>' +
					'Found ' + count_updates + ' deviating fields that might need to be updated.'
				);
		}
	});
</script>

<?php
	include("$currDir/incFooter.php");
?>
