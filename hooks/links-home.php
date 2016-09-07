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
         'url' => 'reportico/noadmin.php?project=rentals&execute_mode=MENU&target_format=HTML" target="blank"',
         'title' => 'Reports Module',
         'description' => 'View all the desired reports...',
         'groups' => array('*'),
         'icon' => 'resources/table_icons/report_stack.png'
      );


