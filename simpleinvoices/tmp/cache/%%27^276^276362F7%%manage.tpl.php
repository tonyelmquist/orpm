<?php /* Smarty version 2.6.18, created on 2016-10-28 08:59:46
         compiled from ../templates/default/system_defaults/manage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/system_defaults/manage.tpl', 4, false),)), $this); ?>
<br />
	<table align="center">
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=biller'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_biller']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultBiller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=customer'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_customer']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultCustomer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=tax'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_tax']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultTax']['tax_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=preference_id'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_invoice_preference']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultPreference']['pref_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=line_items'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_number_items']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaults']['line_items'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=def_inv_template'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_inv_template']; ?>

		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_default_invoice_template_text" title="<?php echo $this->_tpl_vars['LANG']['default_inv_template']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
        </td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaults']['template'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=def_payment_type'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['default_payment_type']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultPaymentType']['pt_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen">
		<a href='index.php?module=system_defaults&amp;view=edit&amp;submit=delete'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['delete']; ?>

		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_delete" title="<?php echo $this->_tpl_vars['LANG']['delete']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultDelete'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=logging'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['logging']; ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_logging" title="<?php echo $this->_tpl_vars['LANG']['logging']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultLogging'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=language'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['language']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultLanguage'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=tax_per_line_item'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['number_of_taxes_per_line_item']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaults']['tax_per_line_item'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="details_screen"><a href='index.php?module=system_defaults&amp;view=edit&amp;submit=inventory'><img src="images/common/edit.png" title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" alt="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
" /></a></td><td class="details_screen"><?php echo $this->_tpl_vars['LANG']['inventory']; ?>
 
		</td>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['defaultInventory'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
        </table>
       <br /> 