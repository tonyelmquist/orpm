<?php /* Smarty version 2.6.18, created on 2016-10-28 08:51:48
         compiled from ../modules/billers/manage.js.php */ ?>
<script type="text/javascript">

<?php echo '
/*
		\'<!--0 Quick View --><a class="index_table" href="index.php?module=biller&view=details&id={1}&action=view"> <img src="images/common/view.png" height="16" border="-5px" padding="-4px" valign="bottom" /></a>\',
		\'<!--1 Edit View --><a class="index_table" href="index.php?module=biller&view=details&id={1}&action=edit"><img src="images/common/edit.png" height="16" border="-5px" padding="-4px" valign="bottom" /><!-- print --></a>\',
*/	
			var columns = 5;
			var padding = 12;
			var grid_width = $(\'.col\').width();
			
			grid_width = grid_width - (columns * padding);
			percentage_width = grid_width / 100; 
		
			
			$(\'#manageGrid\').flexigrid
			(
			{
			url: \'index.php?module=billers&view=xml\',
			dataType: \'xml\',
			colModel : [
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['actions']; ?>
<?php echo '\', name : \'actions\', width : 10 * percentage_width, sortable : false, align: \'center\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['name']; ?>
<?php echo '\', name : \'name\', width : 40 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['email']; ?>
<?php echo '\', name : \'email\', width : 30 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['enabled']; ?>
<?php echo '\', name : \'enabled\', width : 20 * percentage_width, sortable : true, align: \'left\'}
				
				],
				

			searchitems : [
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['name']; ?>
<?php echo '\', name : \'name\', isdefault: true},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['email']; ?>
<?php echo '\', name : \'email\'}
			],
			sortname: \'name\',
			sortorder: \'asc\',
			usepager: true,
			/*title: \'Manage Custom Fields\',*/
			pagestat: \''; ?>
<?php echo $this->_tpl_vars['LANG']['displaying_items']; ?>
<?php echo '\',
			procmsg: \''; ?>
<?php echo $this->_tpl_vars['LANG']['processing']; ?>
<?php echo '\',
			nomsg: \''; ?>
<?php echo $this->_tpl_vars['LANG']['no_items']; ?>
<?php echo '\',
			pagemsg: \''; ?>
<?php echo $this->_tpl_vars['LANG']['page']; ?>
<?php echo '\',
			ofmsg: \''; ?>
<?php echo $this->_tpl_vars['LANG']['of']; ?>
<?php echo '\',
			useRp: false,
			rp: 25,
			showToggleBtn: false,
			showTableToggleBtn: false,
			height: \'auto\'
			}
			);
	
		
'; ?>


</script>