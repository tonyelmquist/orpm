<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:48
         compiled from ../templates/default/menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/menu.tpl', 16, false),)), $this); ?>
<div class="top_menu">
	<div class="txt_right">
		<?php echo $this->_tpl_vars['LANG']['hello']; ?>
 <?php echo ((is_array($_tmp=$_SESSION['Zend_Auth']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 | <a href="http://www.simpleinvoices.org/help" target="blank"><?php echo $this->_tpl_vars['LANG']['help']; ?>
</a>
		<?php if ($this->_tpl_vars['config']->authentication->enabled == 1): ?>
			|
			<?php if ($_SESSION['Zend_Auth']['id'] == null): ?>
				<a href="index.php?module=auth&amp;view=login"><?php echo $this->_tpl_vars['LANG']['login']; ?>
</a>
			<?php else: ?>
				<a href="index.php?module=auth&amp;view=logout"><?php echo $this->_tpl_vars['LANG']['logout']; ?>
</a>
			<?php endif; ?>
		<?php endif; ?>
	
	</div>
</div>

<div id="tabmenu" class="flora" >
	<ul>
		<li><a href="#home"><span><?php echo $this->_tpl_vars['LANG']['home']; ?>
</span></a></li>
		<li><a href="#money"><span><?php echo $this->_tpl_vars['LANG']['money']; ?>
</span></a></li>
		<li><a href="#people"><span><?php echo $this->_tpl_vars['LANG']['people']; ?>
</span></a></li>
		<li><a href="#product"><span><?php echo $this->_tpl_vars['LANG']['products']; ?>
</span></a></li>
		<li style="float:right" class="menu_setting"><a href="#setting"><span><?php echo $this->_tpl_vars['LANG']['settings']; ?>
</span></a></li>
	</ul>

	<div id="home">
		<ul class="subnav">
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'dashboard'): ?> class="active" <?php endif; ?> href="index.php?module=index&amp;view=index"><?php echo $this->_tpl_vars['LANG']['dashboard']; ?>
</a></li>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'report'): ?> class="active" <?php endif; ?> href="index.php?module=reports&amp;view=index"><?php echo $this->_tpl_vars['LANG']['all_reports']; ?>
</a></li>
		</ul>
	</div>

	<div id="money">
		<ul class="subnav">
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'invoice'): ?> class="active" <?php endif; ?> href="index.php?module=invoices&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['invoices']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'invoice_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'invoice_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['quick_view']; ?>
</a></li><?php endif; ?>
							<li><a <?php if ($this->_tpl_vars['pageActive'] == 'invoice_new'): ?> class="active" <?php endif; ?> id="invoice_dialogx" href="index.php?module=invoices&amp;view=itemised"><?php echo $this->_tpl_vars['LANG']['new_invoice']; ?>
</a></li> 
				<?php if ($this->_tpl_vars['subPageActive'] == 'invoice_new_itemised'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['itemised']; ?>
</a></li><?php endif; ?>				
				<?php if ($this->_tpl_vars['subPageActive'] == 'invoice_new_total'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['total']; ?>
</a></li><?php endif; ?>				

			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'cron'): ?> class="active" <?php endif; ?> href="index.php?module=cron&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['recurrence']; ?>
</a></li> 
				<?php if ($this->_tpl_vars['subPageActive'] == 'cron_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>				
				<?php if ($this->_tpl_vars['subPageActive'] == 'cron_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'cron_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'payment'): ?> class="active" <?php endif; ?> href="index.php?module=payments&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['payments']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_process'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['process']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_eway'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['eway']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_filter_invoice'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['payments_filtered']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$_GET['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_filter_customer'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['payments_filtered_customer']; ?>
 '<?php echo $this->_tpl_vars['customer']['name']; ?>
'</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'report_sale'): ?> class="active" <?php endif; ?> href="index.php?module=reports&amp;view=report_sales_total"><?php echo $this->_tpl_vars['LANG']['sales_report']; ?>
</a></li>
		</ul>
	</div>

	<div id="people">
		<ul class="subnav">
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'customer'): ?> class="active"<?php endif; ?> href="index.php?module=customers&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['customers']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'customer_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'customer_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'customer_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'biller'): ?> class="active" <?php endif; ?> href="index.php?module=billers&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['billers']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'biller_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'biller_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'biller_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'user'): ?> class="active" <?php endif; ?> href="index.php?module=user&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['users']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'user_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'user_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'user_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
		</ul>
	</div>

	<div id="product">
                <ul class="subnav">
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'product_manage'): ?> class="active"<?php endif; ?> href="index.php?module=products&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['manage_products']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'product_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'product_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'product_add'): ?> class="active"<?php endif; ?> href="index.php?module=products&amp;view=add"><?php echo $this->_tpl_vars['LANG']['add_product']; ?>
</a></li>
            <?php if ($this->_tpl_vars['defaults']['inventory'] == '1'): ?>
    			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'inventory'): ?> class="active"<?php endif; ?> href="index.php?module=inventory&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['inventory']; ?>
</a></li>
	    			<?php if ($this->_tpl_vars['subPageActive'] == 'inventory_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
		    		<?php if ($this->_tpl_vars['subPageActive'] == 'inventory_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			    	<?php if ($this->_tpl_vars['subPageActive'] == 'inventory_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
            <?php endif; ?>
		</ul>
	</div>

	<div style="float: right; " id="setting">
		<ul class="subnav">
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'setting'): ?> class="active"<?php endif; ?> href="index.php?module=options&amp;view=index"><?php echo $this->_tpl_vars['LANG']['settings']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'setting_extensions'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['extensions']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'system_default'): ?> class="active"<?php endif; ?> href="index.php?module=system_defaults&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['system_preferences']; ?>
</a></li>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'custom_field'): ?> class="active"<?php endif; ?> href="index.php?module=custom_fields&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['custom_fields_upper']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'custom_fields_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'custom_fields_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'tax_rate'): ?> class="active"<?php endif; ?> href="index.php?module=tax_rates&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['tax_rates']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'tax_rates_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'tax_rates_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'tax_rates_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'preference'): ?> class="active"<?php endif; ?> href="index.php?module=preferences&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['invoice_preferences']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'preferences_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'preferences_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'preferences_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'payment_type'): ?> class="active"<?php endif; ?> href="index.php?module=payment_types&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['payment_types']; ?>
</a></li>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_types_add'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['add']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_types_view'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['view']; ?>
</a></li><?php endif; ?>
				<?php if ($this->_tpl_vars['subPageActive'] == 'payment_types_edit'): ?> <li><a class="active active_subpage" href="#"><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a></li><?php endif; ?>
			<li><a <?php if ($this->_tpl_vars['pageActive'] == 'backup'): ?> class="active"<?php endif; ?> href="index.php?module=options&amp;view=backup_database"><?php echo $this->_tpl_vars['LANG']['backup_database']; ?>
</a></li>
		</ul>
	</div>
</div>
