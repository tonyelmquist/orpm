<?php
	/*
	 * You can add custom links in the home page by appending them here ...
	 * The format for each link is:
		$homeLinks[] = array(
			'url' => 'path/to/link', 
			'title' => 'Link title', 
			'description' => 'Link text',
			'groups' => array('group1', 'group2'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'grid_column_classes' => '', // optional CSS classes to apply to link block. See: http://getbootstrap.com/css/#grid
			'panel_classes' => '', // optional CSS classes to apply to panel. See: http://getbootstrap.com/components/#panels
			'link_classes' => '', // optional CSS classes to apply to link. See: http://getbootstrap.com/css/#buttons
			'icon' => 'path/to/icon' // optional icon to use with the link
		);
	 */

	$homeLinks[] = array(
         //'url' => 'reportico/run.php?project=admin&execute_mode=admin&target_format=HTML" 
         'url' => 'repo/noadmin.php?project=rentals&execute_mode=MENU&target_format=HTML" target="blank"',
         'title' => 'Reports Module',
         'description' => 'Listing of all system generated reports',
         'groups' => array('*'),
         'icon' => 'resources/table_icons/report_stack.png'
      );

	/* http://localhost:8888/orpm/applicants_and_tenants_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=&FilterField%5B1%5D=13&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=BALANCE */

	$homeLinks[] = array(
				'url' => 'http://localhost:8888/orpm/applicants_and_tenants_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=&FilterField%5B1%5D=13&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=BALANCE',
				'icon' => 'resources/table_icons/money_delete.png',
				'title' => 'Unpaid rent',
				'description' => 'Show all tenants that have not paid current month rent.',
				'groups' => array('*'), // groups allowed to see this link
				'grid_column_classes' => 'col-md-4 col-lg-3',
				'panel_classes' => 'panel-danger',
				'link_classes' => 'btn-danger'
		);

	$homeLinks[] = array(
				'url' => 'http://localhost:8888/orpm/simpleinvoices/" target="blank"',
				'icon' => 'resources/table_icons/receipt_invoice.png',
				'title' => 'Invoices / Receipts',
				'description' => 'Generate all tenants invoices / receipts.',
				'groups' => array('*'), // groups allowed to see this link
				'grid_column_classes' => 'col-md-4 col-lg-3',
				'panel_classes' => 'panel-info',
				'link_classes' => 'btn-info'
		);

		/* get the count of applicants_and_tenants - Query changed in production */
		$applicants_and_tenants_where = get_sql_from('applicants_and_tenants');
		if(!$applicants_and_tenants_where){
		   // Here get_sql_from is returning false (without access, and table don't exists) 
		   $tenants_count = 0;
		 } else {
		   $tenants_count = sqlValue("select count(*) from {$applicants_and_tenants_where}");
		}
		//$tenants_count = sqlValue("select count(*) from applicants_and_tenants");
		//$tenants_count = sqlValue("select count(*) from ".get_sql_from('applicants_and_tenants')); 
		//echo "Tenants Count : {$tenants_count}";

		/* get the count of properties */
		//$property_count = sqlValue("select count(*) from ".get_sql_from('properties')); 
		
		/* get the count of units */
		//$unit_count = sqlValue("select count(*) from ".get_sql_from('units')); 
		
		/* get the count of rental_owners */
		//$owner_count = sqlValue("select count(*) from ".get_sql_from('rental_owners')); 

		/* get the count of audit_trails */
		//$audit_count = sqlValue("select count(*) from ".get_sql_from('audit_trail')); 
		//echo "audit_trail Count : {$audit_count}";
		?>
		
		<script>
			$j(function(){
				$j('a.btn[href="applicants_and_tenants_view.php"]').html('<img src="resources/table_icons/account_balances.png"><strong>Tenant Center(<?php echo $tenants_count;?>)</strong>');
				$j('a.btn[href="properties_view.php"]').html('<img src="resources/table_icons/application_home.png"><strong>Property Center(<?php echo $property_count;?>)</strong>');
				$j('a.btn[href="units_view.php"]').html('<img src="resources/table_icons/change_password.png"><strong>Units Center(<?php echo $unit_count;?>)</strong>');
				$j('a.btn[href="rental_owners_view.php"]').html('<img src="resources/table_icons/administrator.png"><strong>Owners Center(<?php echo $owner_count;?>)</strong>');
				$j('a.btn[href="audit_trail_view.php"]').html('<img src="table.gif"><strong>Audit Trail(<?php echo $audit_count;?>)</strong>');
			});
		</script>


		


