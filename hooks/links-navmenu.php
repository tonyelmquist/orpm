<?php
	/*
	* You can add custom links to the navigation menu by appending them here ...
	* The format for each link is:
		$navLinks[] = array(
			'url' => 'path/to/link', 
			'title' => 'Link title', 
			'groups' => array('group1', 'group2'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'icon' => 'path/to/icon'
		);
	*/

		$navLinks[] = array(
			'url' => 'repo/noadmin.php?project=rentals&execute_mode=MENU&target_format=HTML" target="blank"', 
			'title' => 'Reports Module', 
			'groups' => array('*'),
			'icon' => 'resources/table_icons/report_stack.png'
		);

		$navLinks[] = array(
			'url' => 'http://localhost:8888/orpm/applicants_and_tenants_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=&FilterField%5B1%5D=13&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=BALANCE', 
			'title' => 'Unpaid rent', 
			'groups' => array('*'),
			'icon' => 'resources/table_icons/money_delete.png'
		);

