<?php
// This script and data application were generated by AppGini 5.51
// Download AppGini for free from http://bigprof.com/appgini/download/

	/* Configuration */
	/*************************************/

		$pcConfig = array(
			'applications_leases' => array(   
				'tenants' => array(   
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Applications/Leases',
					'table-icon' => 'resources/table_icons/curriculum_vitae.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Applicant/ Tenant', 2 => 'Application status', 3 => 'Property', 4 => 'Unit applied for', 5 => 'Lease type', 6 => 'Total number of occupants', 7 => 'Lease period from', 8 => 'to', 11 => 'Rental amount', 12 => 'Security deposit', 14 => 'Emergency contact', 17 => 'Applicant agrees'),
					'display-field-names' => array(1 => 'tenants', 2 => 'status', 3 => 'property', 4 => 'unit', 5 => 'type', 6 => 'total_number_of_occupants', 7 => 'start_date', 8 => 'end_date', 11 => 'rent', 12 => 'security_deposit', 14 => 'emergency_contact', 17 => 'agreement'),
					'sortable-fields' => array(0 => '`applications_leases`.`id`', 1 => '`applications_leases`.`tenants`', 2 => '`applications_leases`.`status`', 3 => '`applications_leases`.`property`', 4 => '`applications_leases`.`unit`', 5 => '`applications_leases`.`type`', 6 => '`applications_leases`.`total_number_of_occupants`', 7 => '`applications_leases`.`start_date`', 8 => '`applications_leases`.`end_date`', 9 => '`applications_leases`.`recurring_charges_frequency`', 10 => '`applications_leases`.`next_due_date`', 11 => '`applications_leases`.`rent`', 12 => '`applications_leases`.`security_deposit`', 13 => '`applications_leases`.`security_deposit_date`', 14 => '`applications_leases`.`emergency_contact`', 15 => '`applications_leases`.`co_signer_details`', 16 => '`applications_leases`.`notes`', 17 => '`applications_leases`.`agreement`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-applications_leases',
					'template-printable' => 'children-applications_leases-printable',
					'query' => "SELECT `applications_leases`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenants', `applications_leases`.`status` as 'status', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') as 'unit', `applications_leases`.`type` as 'type', `applications_leases`.`total_number_of_occupants` as 'total_number_of_occupants', if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%Y-%m-%d'),'') as 'start_date', if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%Y-%m-%d'),'') as 'end_date', `applications_leases`.`recurring_charges_frequency` as 'recurring_charges_frequency', if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%Y-%m-%d'),'') as 'next_due_date', CONCAT('$', FORMAT(`applications_leases`.`rent`, 2)) as 'rent', CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2)) as 'security_deposit', if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%Y-%m-%d'),'') as 'security_deposit_date', `applications_leases`.`emergency_contact` as 'emergency_contact', `applications_leases`.`co_signer_details` as 'co_signer_details', `applications_leases`.`notes` as 'notes', concat('<img src=\"', if(`applications_leases`.`agreement`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />') as 'agreement' FROM `applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` "
				),
				'unit' => array(   
					'parent-table' => 'units',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Applications/Leases',
					'table-icon' => 'resources/table_icons/curriculum_vitae.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Applicant/ Tenant', 2 => 'Application status', 3 => 'Property', 4 => 'Unit applied for', 5 => 'Lease type', 6 => 'Total number of occupants', 7 => 'Lease period from', 8 => 'to', 11 => 'Rental amount', 12 => 'Security deposit', 14 => 'Emergency contact', 17 => 'Applicant agrees'),
					'display-field-names' => array(1 => 'tenants', 2 => 'status', 3 => 'property', 4 => 'unit', 5 => 'type', 6 => 'total_number_of_occupants', 7 => 'start_date', 8 => 'end_date', 11 => 'rent', 12 => 'security_deposit', 14 => 'emergency_contact', 17 => 'agreement'),
					'sortable-fields' => array(0 => '`applications_leases`.`id`', 1 => '`applications_leases`.`tenants`', 2 => '`applications_leases`.`status`', 3 => '`applications_leases`.`property`', 4 => '`applications_leases`.`unit`', 5 => '`applications_leases`.`type`', 6 => '`applications_leases`.`total_number_of_occupants`', 7 => '`applications_leases`.`start_date`', 8 => '`applications_leases`.`end_date`', 9 => '`applications_leases`.`recurring_charges_frequency`', 10 => '`applications_leases`.`next_due_date`', 11 => '`applications_leases`.`rent`', 12 => '`applications_leases`.`security_deposit`', 13 => '`applications_leases`.`security_deposit_date`', 14 => '`applications_leases`.`emergency_contact`', 15 => '`applications_leases`.`co_signer_details`', 16 => '`applications_leases`.`notes`', 17 => '`applications_leases`.`agreement`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-applications_leases',
					'template-printable' => 'children-applications_leases-printable',
					'query' => "SELECT `applications_leases`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenants', `applications_leases`.`status` as 'status', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', IF(    CHAR_LENGTH(`units1`.`unit_number`), CONCAT_WS('',   `units1`.`unit_number`), '') as 'unit', `applications_leases`.`type` as 'type', `applications_leases`.`total_number_of_occupants` as 'total_number_of_occupants', if(`applications_leases`.`start_date`,date_format(`applications_leases`.`start_date`,'%Y-%m-%d'),'') as 'start_date', if(`applications_leases`.`end_date`,date_format(`applications_leases`.`end_date`,'%Y-%m-%d'),'') as 'end_date', `applications_leases`.`recurring_charges_frequency` as 'recurring_charges_frequency', if(`applications_leases`.`next_due_date`,date_format(`applications_leases`.`next_due_date`,'%Y-%m-%d'),'') as 'next_due_date', CONCAT('$', FORMAT(`applications_leases`.`rent`, 2)) as 'rent', CONCAT('$', FORMAT(`applications_leases`.`security_deposit`, 2)) as 'security_deposit', if(`applications_leases`.`security_deposit_date`,date_format(`applications_leases`.`security_deposit_date`,'%Y-%m-%d'),'') as 'security_deposit_date', `applications_leases`.`emergency_contact` as 'emergency_contact', `applications_leases`.`co_signer_details` as 'co_signer_details', `applications_leases`.`notes` as 'notes', concat('<img src=\"', if(`applications_leases`.`agreement`, 'checked.gif', 'checkednot.gif'), '\" border=\"0\" />') as 'agreement' FROM `applications_leases` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`applications_leases`.`tenants` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`applications_leases`.`property` LEFT JOIN `units` as units1 ON `units1`.`id`=`applications_leases`.`unit` "
				)
			),
			'residence_and_rental_history' => array(   
				'tenant' => array(   
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Residence and rental history',
					'table-icon' => 'resources/table_icons/document_comment_above.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(2 => 'Month', 3 => 'Monthly rent', 4 => 'Security Deposit', 5 => 'Other Charges', 6 => 'Rent Paid', 7 => 'Rent Balance', 8 => 'Due date', 9 => 'Rent Reminder Date', 10 => 'Late Rent Reminder Date', 11 => 'Status', 12 => 'Duration of residency from', 13 => 'to', 14 => 'Reason for leaving'),
					'display-field-names' => array(2 => 'month', 3 => 'monthly_rent', 4 => 'security_deposit', 5 => 'other_charges', 6 => 'rent_paid', 7 => 'rent_balance', 8 => 'due_date', 9 => 'rent_reminder', 10 => 'late_rent_reminder', 11 => 'status', 12 => 'duration_of_residency_from', 13 => 'to', 14 => 'reason_for_leaving'),
					'sortable-fields' => array(0 => '`residence_and_rental_history`.`id`', 1 => '`residence_and_rental_history`.`tenant`', 2 => '`residence_and_rental_history`.`month`', 3 => '`residence_and_rental_history`.`monthly_rent`', 4 => '`residence_and_rental_history`.`security_deposit`', 5 => '`residence_and_rental_history`.`other_charges`', 6 => '`residence_and_rental_history`.`rent_paid`', 7 => '`residence_and_rental_history`.`rent_balance`', 8 => '`residence_and_rental_history`.`due_date`', 9 => '`residence_and_rental_history`.`rent_reminder`', 10 => '`residence_and_rental_history`.`late_rent_reminder`', 11 => '`residence_and_rental_history`.`status`', 12 => '`residence_and_rental_history`.`duration_of_residency_from`', 13 => '`residence_and_rental_history`.`to`', 14 => '`residence_and_rental_history`.`reason_for_leaving`', 15 => '`residence_and_rental_history`.`notes`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-residence_and_rental_history',
					'template-printable' => 'children-residence_and_rental_history-printable',
					'query' => "SELECT `residence_and_rental_history`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', if(`residence_and_rental_history`.`month`,date_format(`residence_and_rental_history`.`month`,'%Y-%m-%d'),'') as 'month', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`monthly_rent`), CONCAT_WS('',   `applicants_and_tenants1`.`monthly_rent`), '') as 'monthly_rent', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`security_deposit`), CONCAT_WS('',   `applicants_and_tenants1`.`security_deposit`), '') as 'security_deposit', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`other_charges`), CONCAT_WS('',   `applicants_and_tenants1`.`other_charges`), '') as 'other_charges', `residence_and_rental_history`.`rent_paid` as 'rent_paid', `residence_and_rental_history`.`rent_balance` as 'rent_balance', if(`residence_and_rental_history`.`due_date`,date_format(`residence_and_rental_history`.`due_date`,'%Y-%m-%d'),'') as 'due_date', if(`residence_and_rental_history`.`rent_reminder`,date_format(`residence_and_rental_history`.`rent_reminder`,'%Y-%m-%d'),'') as 'rent_reminder', if(`residence_and_rental_history`.`late_rent_reminder`,date_format(`residence_and_rental_history`.`late_rent_reminder`,'%Y-%m-%d'),'') as 'late_rent_reminder', `residence_and_rental_history`.`status` as 'status', if(`residence_and_rental_history`.`duration_of_residency_from`,date_format(`residence_and_rental_history`.`duration_of_residency_from`,'%Y-%m-%d'),'') as 'duration_of_residency_from', if(`residence_and_rental_history`.`to`,date_format(`residence_and_rental_history`.`to`,'%Y-%m-%d'),'') as 'to', `residence_and_rental_history`.`reason_for_leaving` as 'reason_for_leaving', `residence_and_rental_history`.`notes` as 'notes' FROM `residence_and_rental_history` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`residence_and_rental_history`.`tenant` "
				)
			),
			'employment_and_income_history' => array(   
				'tenant' => array(   
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Employment and income history',
					'table-icon' => 'resources/table_icons/cash_stack.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(2 => 'Employer name', 3 => 'City', 4 => 'Employer phone', 5 => 'employed from', 6 => 'Employed till', 7 => 'Occupation', 8 => 'Notes'),
					'display-field-names' => array(2 => 'employer_name', 3 => 'city', 4 => 'employer_phone', 5 => 'employed_from', 6 => 'employed_till', 7 => 'occupation', 8 => 'notes'),
					'sortable-fields' => array(0 => '`employment_and_income_history`.`id`', 1 => '`employment_and_income_history`.`tenant`', 2 => '`employment_and_income_history`.`employer_name`', 3 => '`employment_and_income_history`.`city`', 4 => '`employment_and_income_history`.`employer_phone`', 5 => '`employment_and_income_history`.`employed_from`', 6 => '`employment_and_income_history`.`employed_till`', 7 => '`employment_and_income_history`.`occupation`', 8 => '`employment_and_income_history`.`notes`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-employment_and_income_history',
					'template-printable' => 'children-employment_and_income_history-printable',
					'query' => "SELECT `employment_and_income_history`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', `employment_and_income_history`.`employer_name` as 'employer_name', `employment_and_income_history`.`city` as 'city', `employment_and_income_history`.`employer_phone` as 'employer_phone', if(`employment_and_income_history`.`employed_from`,date_format(`employment_and_income_history`.`employed_from`,'%Y-%m-%d'),'') as 'employed_from', if(`employment_and_income_history`.`employed_till`,date_format(`employment_and_income_history`.`employed_till`,'%Y-%m-%d'),'') as 'employed_till', `employment_and_income_history`.`occupation` as 'occupation', `employment_and_income_history`.`notes` as 'notes' FROM `employment_and_income_history` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`employment_and_income_history`.`tenant` "
				)
			),
			'references' => array(   
				'tenant' => array(   
					'parent-table' => 'applicants_and_tenants',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'References',
					'table-icon' => 'resources/table_icons/application_from_storage.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(2 => 'Reference name', 3 => 'Reference phone'),
					'display-field-names' => array(2 => 'reference_name', 3 => 'phone'),
					'sortable-fields' => array(0 => '`references`.`id`', 1 => '`references`.`tenant`', 2 => '`references`.`reference_name`', 3 => '`references`.`phone`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-references',
					'template-printable' => 'children-references-printable',
					'query' => "SELECT `references`.`id` as 'id', IF(    CHAR_LENGTH(`applicants_and_tenants1`.`first_name`) || CHAR_LENGTH(`applicants_and_tenants1`.`last_name`), CONCAT_WS('',   `applicants_and_tenants1`.`first_name`, ' ', `applicants_and_tenants1`.`last_name`), '') as 'tenant', `references`.`reference_name` as 'reference_name', `references`.`phone` as 'phone' FROM `references` LEFT JOIN `applicants_and_tenants` as applicants_and_tenants1 ON `applicants_and_tenants1`.`id`=`references`.`tenant` "
				)
			),
			'applicants_and_tenants' => array(   
			),
			'properties' => array(   
				'owner' => array(   
					'parent-table' => 'rental_owners',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Properties',
					'table-icon' => 'resources/table_icons/application_home.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Property Name', 2 => 'Type', 3 => 'Number of units', 4 => 'Photo', 5 => 'Owner', 6 => 'Country', 7 => 'County', 8 => 'Area', 9 => 'Street / Road'),
					'display-field-names' => array(1 => 'property_name', 2 => 'type', 3 => 'number_of_units', 4 => 'photo', 5 => 'owner', 6 => 'country', 7 => 'street', 8 => 'City', 9 => 'State'),
					'sortable-fields' => array(0 => '`properties`.`id`', 1 => '`properties`.`property_name`', 2 => '`properties`.`type`', 3 => '`properties`.`number_of_units`', 4 => '`properties`.`photo`', 5 => '`properties`.`owner`', 6 => '`properties`.`country`', 7 => '`properties`.`street`', 8 => '`properties`.`City`', 9 => '`properties`.`State`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-properties',
					'template-printable' => 'children-properties-printable',
					'query' => "SELECT `properties`.`id` as 'id', `properties`.`property_name` as 'property_name', `properties`.`type` as 'type', `properties`.`number_of_units` as 'number_of_units', `properties`.`photo` as 'photo', IF(    CHAR_LENGTH(`rental_owners1`.`first_name`) || CHAR_LENGTH(`rental_owners1`.`last_name`), CONCAT_WS('',   `rental_owners1`.`first_name`, ' ', `rental_owners1`.`last_name`), '') as 'owner', `properties`.`country` as 'country', `properties`.`street` as 'street', `properties`.`City` as 'City', `properties`.`State` as 'State' FROM `properties` LEFT JOIN `rental_owners` as rental_owners1 ON `rental_owners1`.`id`=`properties`.`owner` "
				)
			),
			'units' => array(   
				'property' => array(   
					'parent-table' => 'properties',
					'parent-primary-key' => 'id',
					'child-primary-key' => 'id',
					'child-primary-key-index' => 0,
					'tab-label' => 'Units',
					'table-icon' => 'resources/table_icons/change_password.png',
					'display-refresh' => true,
					'display-add-new' => true,
					'forced-where' => '',
					'display-fields' => array(1 => 'Property', 2 => 'Unit', 3 => 'Photo', 4 => 'Status', 5 => 'Features', 6 => 'Rental amount', 7 => 'Security Deposit', 8 => 'Other Charges', 9 => 'Description'),
					'display-field-names' => array(1 => 'property', 2 => 'unit_number', 3 => 'photo', 4 => 'status', 5 => 'features', 6 => 'rental_amount', 7 => 'deposit_amount', 8 => 'other_charges', 9 => 'description'),
					'sortable-fields' => array(0 => '`units`.`id`', 1 => '`units`.`property`', 2 => '`units`.`unit_number`', 3 => '`units`.`photo`', 4 => '`units`.`status`', 5 => '`units`.`features`', 6 => '`units`.`rental_amount`', 7 => '`units`.`deposit_amount`', 8 => '`units`.`other_charges`', 9 => '`units`.`description`'),
					'records-per-page' => 10,
					'default-sort-by' => false,
					'default-sort-direction' => 'asc',
					'open-detail-view-on-click' => true,
					'display-page-selector' => true,
					'show-page-progress' => true,
					'template' => 'children-units',
					'template-printable' => 'children-units-printable',
					'query' => "SELECT `units`.`id` as 'id', IF(    CHAR_LENGTH(`properties1`.`property_name`), CONCAT_WS('',   `properties1`.`property_name`), '') as 'property', `units`.`unit_number` as 'unit_number', `units`.`photo` as 'photo', `units`.`status` as 'status', `units`.`features` as 'features', `units`.`rental_amount` as 'rental_amount', `units`.`deposit_amount` as 'deposit_amount', `units`.`other_charges` as 'other_charges', `units`.`description` as 'description' FROM `units` LEFT JOIN `properties` as properties1 ON `properties1`.`id`=`units`.`property` "
				)
			),
			'rental_owners' => array(   
			)
		);

	/*************************************/
	/* End of configuration */


	@header("Content-Type: text/html; charset=UTF-8");
	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");

	handle_maintenance();

	/**
	* dynamic configuration based on current user's permissions
	* $userPCConfig array is populated only with parent tables where the user has access to
	* at least one child table
	*/
	$userPCConfig = array();
	foreach($pcConfig as $pcChildTable => $ChildrenLookups){
		$permChild = getTablePermissions($pcChildTable);
		if($permChild[2]){ // user can view records of the child table, so proceed to check children lookups
			foreach($ChildrenLookups as $ChildLookupField => $ChildConfig){
				$permParent = getTablePermissions($ChildConfig['parent-table']);
				if($permParent[2]){ // user can view records of parent table
					$userPCConfig[$pcChildTable][$ChildLookupField] = $pcConfig[$pcChildTable][$ChildLookupField];
					// show add new only if configured above AND the user has insert permission
					if($permChild[1] && $pcConfig[$pcChildTable][$ChildLookupField]['display-add-new']){
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = true;
					}else{
						$userPCConfig[$pcChildTable][$ChildLookupField]['display-add-new'] = false;
					}
				}
			}
		}
	}

	/* Receive, UTF-convert, and validate parameters */
	$ParentTable = $_REQUEST['ParentTable']; // needed only with operation=show-children, will be validated in the processing code
	$ChildTable = $_REQUEST['ChildTable'];
		if(!in_array($ChildTable, array_keys($userPCConfig))){
			/* defaults to first child table in config array if not provided */
			$ChildTable = current(array_keys($userPCConfig));
		}
		if(!$ChildTable){ die('<!-- No tables accessible to current user -->'); }
	$SelectedID = strip_tags($_REQUEST['SelectedID']);
	$ChildLookupField = $_REQUEST['ChildLookupField'];
		if(!in_array($ChildLookupField, array_keys($userPCConfig[$ChildTable]))){
			/* defaults to first lookup in current child config array if not provided */
			$ChildLookupField = current(array_keys($userPCConfig[$ChildTable]));
		}
	$Page = intval($_REQUEST['Page']);
		if($Page < 1){
			$Page = 1;
		}
	$SortBy = ($_REQUEST['SortBy'] != '' ? abs(intval($_REQUEST['SortBy'])) : false);
		if(!in_array($SortBy, array_keys($userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields']), true)){
			$SortBy = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-by'];
		}
	$SortDirection = strtolower($_REQUEST['SortDirection']);
		if(!in_array($SortDirection, array('asc', 'desc'))){
			$SortDirection = $userPCConfig[$ChildTable][$ChildLookupField]['default-sort-direction'];
		}
	$Operation = strtolower($_REQUEST['Operation']);
		if(!in_array($Operation, array('get-records', 'show-children', 'get-records-printable', 'show-children-printable'))){
			$Operation = 'get-records';
		}

	/* process requested operation */
	switch($Operation){
		/************************************************/
		case 'show-children':
			/* populate HTML and JS content with children tabs */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<li%s><a href="#panel_%s-%s" id="tab_%s-%s" data-toggle="tab">%s%s</a></li>' . "\n\t\t\t\t\t",($tabLabels ? '' : ' class="active"'), $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="tab-pane%s"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, ($tabPanels ? '' : ' active'), $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs">
				<ul class="nav nav-tabs">
					<?php echo $tabLabels; ?>
				</ul>
				<span id="pc-loading"></span>
			</div>
			<div class="tab-content"><?php echo $tabPanels; ?></div>

			<script>
				/* ajax loading of each tab's contents */
				<?php echo $tabLoaders; ?>
			</script>
			<?php
			break;

		/************************************************/
		case 'show-children-printable':
			/* populate HTML and JS content with children buttons */
			$tabLabels = $tabPanels = $tabLoaders = '';
			foreach($userPCConfig as $ChildTable => $childLookups){
				foreach($childLookups as $ChildLookupField => $childConfig){
					if($childConfig['parent-table'] == $ParentTable){
						$TableIcon = ($childConfig['table-icon'] ? "<img src=\"{$childConfig['table-icon']}\" border=\"0\" />" : '');
						$tabLabels .= sprintf('<button type="button" class="btn btn-default" data-target="#panel_%s-%s" id="tab_%s-%s" data-toggle="collapse">%s %s</button>' . "\n\t\t\t\t\t", $ChildTable, $ChildLookupField, $ChildTable, $ChildLookupField, $TableIcon, $childConfig['tab-label']);
						$tabPanels .= sprintf('<div id="panel_%s-%s" class="collapse"><img src="loading.gif" align="top" />%s</div>' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, $Translation['Loading ...']);
						$tabLoaders .= sprintf('post("parent-children.php", { ChildTable: "%s", ChildLookupField: "%s", SelectedID: "%s", Page: 1, SortBy: "", SortDirection: "", Operation: "get-records-printable" }, "panel_%s-%s");' . "\n\t\t\t\t", $ChildTable, $ChildLookupField, addslashes($SelectedID), $ChildTable, $ChildLookupField);
					}
				}
			}

			if(!$tabLabels){ die('<!-- no children of current parent table are accessible to current user -->'); }
			?>
			<div id="children-tabs" class="hidden-print">
				<div class="btn-group btn-group-lg">
					<?php echo $tabLabels; ?>
				</div>
				<span id="pc-loading"></span>
			</div>
			<div class="vspacer-lg"><?php echo $tabPanels; ?></div>

			<script>
				/* ajax loading of each tab's contents */
				<?php echo $tabLoaders; ?>
			</script>
			<?php
			break;

		/************************************************/
		case 'get-records-printable':
		default: /* default is 'get-records' */

			if($Operation == 'get-records-printable'){
				$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] = 2000;
			}

			// build the user permissions limiter
			$permissionsWhere = $permissionsJoin = '';
			if($permChild[2] == 1){ // user can view only his own records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND LCASE(`membership_userrecords`.`memberID`)='".getLoggedMemberID()."'";
			}elseif($permChild[2] == 2){ // user can view only his group's records
				$permissionsWhere = "`$ChildTable`.`{$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key']}`=`membership_userrecords`.`pkValue` AND `membership_userrecords`.`tableName`='$ChildTable' AND `membership_userrecords`.`groupID`='".getLoggedGroupID()."'";
			}elseif($permChild[2] == 3){ // user can view all records
				/* that's the only case remaining ... no need to modify the query in this case */
			}
			$permissionsJoin = ($permissionsWhere ? ", `membership_userrecords`" : '');

			// build the count query
			$forcedWhere = $userPCConfig[$ChildTable][$ChildLookupField]['forced-where'];
			$query = 
				preg_replace('/^select .* from /i', 'SELECT count(1) FROM ', $userPCConfig[$ChildTable][$ChildLookupField]['query']) .
				$permissionsJoin . " WHERE " .
				($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
				($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
				"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'";
			$totalMatches = sqlValue($query);

			// make sure $Page is <= max pages
			$maxPage = ceil($totalMatches / $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']);
			if($Page > $maxPage){ $Page = $maxPage; }

			// initiate output data array
			$data = array(
				'config' => $userPCConfig[$ChildTable][$ChildLookupField],
				'parameters' => array(
					'ChildTable' => $ChildTable,
					'ChildLookupField' => $ChildLookupField,
					'SelectedID' => $SelectedID,
					'Page' => $Page,
					'SortBy' => $SortBy,
					'SortDirection' => $SortDirection,
					'Operation' => $Operation
				),
				'records' => array(),
				'totalMatches' => $totalMatches
			);

			// build the data query
			if($totalMatches){ // if we have at least one record, proceed with fetching data
				$startRecord = $userPCConfig[$ChildTable][$ChildLookupField]['records-per-page'] * ($Page - 1);
				$data['query'] = 
					$userPCConfig[$ChildTable][$ChildLookupField]['query'] .
					$permissionsJoin . " WHERE " .
					($permissionsWhere ? "( $permissionsWhere )" : "( 1=1 )") . " AND " .
					($forcedWhere ? "( $forcedWhere )" : "( 2=2 )") . " AND " .
					"`$ChildTable`.`$ChildLookupField`='" . makeSafe($SelectedID) . "'" . 
					($SortBy !== false && $userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy] ? " ORDER BY {$userPCConfig[$ChildTable][$ChildLookupField]['sortable-fields'][$SortBy]} $SortDirection" : '') .
					" LIMIT $startRecord, {$userPCConfig[$ChildTable][$ChildLookupField]['records-per-page']}";
				$res = sql($data['query'], $eo);
				while($row = db_fetch_row($res)){
					$data['records'][$row[$userPCConfig[$ChildTable][$ChildLookupField]['child-primary-key-index']]] = $row;
				}
			}else{ // if no matching records
				$startRecord = 0;
			}

			if($Operation == 'get-records-printable'){
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template-printable'], $data);
			}else{
				$response = loadView($userPCConfig[$ChildTable][$ChildLookupField]['template'], $data);
			}

			// change name space to ensure uniqueness
			$uniqueNameSpace = $ChildTable.ucfirst($ChildLookupField).'GetRecords';
			echo str_replace("{$ChildTable}GetChildrenRecordsList", $uniqueNameSpace, $response);
		/************************************************/
	}
