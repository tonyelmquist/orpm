<?php /* Smarty version 2.6.18, created on 2016-10-28 08:59:53
         compiled from ../templates/default/custom_fields/manage.tpl */ ?>
<?php if ($this->_tpl_vars['cfs'] == null): ?>
<p><em><?php echo $this->_tpl_vars['LANG']['no_invoices']; ?>
.</em></p>
<?php else: ?>

<div style="text-align:center;">
<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_what_are_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['what_are_custom_fields']; ?>
"><?php echo $this->_tpl_vars['LANG']['what_are_custom_fields']; ?>
<img src="./images/common/help-small.png" alt="" /></a> ::
<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_manage_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['whats_this_page_about']; ?>
"><?php echo $this->_tpl_vars['LANG']['whats_this_page_about']; ?>
<img src="./images/common/help-small.png" alt="" /></a>
</div>

<table id="manageGrid" style="display:none"></table>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/custom_fields/manage.js.php', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>