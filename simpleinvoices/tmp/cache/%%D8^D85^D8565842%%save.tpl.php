<?php /* Smarty version 2.6.18, created on 2016-10-28 08:53:41
         compiled from ../templates/default/invoices/save.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '../templates/default/invoices/save.tpl', 29, false),)), $this); ?>

<?php if ($this->_tpl_vars['saved'] == true): ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_invoice_success']; ?>

	<br />
	<br />
<?php else: ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_invoice_failure']; ?>

	<br />
	<br />
<?php endif; ?>

<meta http-equiv="refresh" content="2;URL=index.php?module=invoices&amp;view=quick_view&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" />