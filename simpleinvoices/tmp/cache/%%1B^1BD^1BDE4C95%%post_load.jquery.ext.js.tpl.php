<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:03
         compiled from ../include/jquery/post_load.jquery.ext.js.tpl */ ?>
<?php echo '
<script type="text/javascript">

/**

jquery stuff for tab_menu extension

**/

$(document).ready(function(){

  	//TODO - grab the active page and put in here - so correct tab is open for that page
	$("#tabmenu > ul").tabs("select", \''; ?>
<?php echo $this->_tpl_vars['active_tab']; ?>
 <?php echo '\');
/*	
console.log(\''; ?>
<?php echo $this->_tpl_vars['active_tab']; ?>
<?php echo '\');
	$active = \''; ?>
<?php echo $this->_tpl_vars['active_tab']; ?>
<?php echo '\';
	console.log($active);
	if($active == \'#setting\') { 
		//$("#tabmenu > ul").tabs({ selected: null }); 
//		$("#tabmenu > ul").tabs("select", \''; ?>
<?php echo $this->_tpl_vars['active_tab']; ?>
 <?php echo '\');
//		$("#tabmenu > ul").tabs({ selected: "#money" }); 
	} else {
		//$("#tabmenu > ul").tabs({ selected: null }); 
	//	$("#tabmenu > ul").tabs("select", null);
	}
*/
 });

 </script>
 '; ?>

 