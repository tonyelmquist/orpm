<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:48
         compiled from ../modules/invoices/manage.js.php */ ?>
<script type="text/javascript">
<?php echo '
			var columns = 8;
			var padding = 12;
			var action_menu = 140;
			var grid_width = $(\'.col\').width();
			//var url = \'index.php?module=invoices&view=xml\';
			
			grid_width = grid_width - (columns * padding) - action_menu;
			percentage_width = grid_width / 100; 
			
			function test(com,grid)
			{
				if (com==\'Delete\')
					{
						confirm(\'Delete \' + $(\'.trSelected\',grid).length + \' items?\')
					}
				else if (com==\'Add\')
					{
						alert(\'Add New Item\');
					}			
			}


			$("#manageGrid").flexigrid
			(
			{
			url: "'; ?>
<?php echo $this->_tpl_vars['url']; ?>
<?php echo '",
			dataType: \'xml\',
			colModel : [
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['actions']; ?>
<?php echo '\', name : \'actions\', width : action_menu, sortable : false, align: \'center\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['id']; ?>
<?php echo '\', name : \'index_name\', width :15 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['biller']; ?>
<?php echo '\', name : \'biller\', width :20 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['customer']; ?>
<?php echo '\', name : \'customer\', width :20 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['date_upper']; ?>
<?php echo '\', name : \'date\', width : 15 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['total']; ?>
<?php echo '\', name : \'invoice_total\', width : 10 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['owing']; ?>
<?php echo '\', name : \'owing\', width : 10 * percentage_width, sortable : true, align: \'left\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['aging']; ?>
<?php echo '\', name : \'aging\', width : 10 * percentage_width, sortable : true, align: \'left\'}
				
				],
				/*
			buttons : [
				{name: \'Add\', bclass: \'add\', onpress : test},
				{name: \'Delete\', bclass: \'delete\', onpress : test},
				{separator: true}
				],
			*/
			searchitems : [
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['invoice_number']; ?>
<?php echo '\', name : \'iv.id\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['biller']; ?>
<?php echo '\', name : \'b.name\'},
				{display: \''; ?>
<?php echo $this->_tpl_vars['LANG']['customer']; ?>
<?php echo '\', name : \'c.name\', isdefault: true}
				],
			sortname: "id",
			sortorder: "desc",
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
			rp: 15,
			showToggleBtn: false,
			showTableToggleBtn: false,
			width: \'auto\',
			height: \'auto\'
			}
			);
'; ?>


</script>