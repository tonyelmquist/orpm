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
			'url' => 'reportico/noadmin.php?project=rentals&execute_mode=MENU&target_format=HTML" target="blank"', 
			'title' => 'Reports Module', 
			'groups' => array('*'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			// 'icon' => 'path/to/icon'
		);

