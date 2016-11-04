<?php /* Smarty version 2.6.18, created on 2016-11-02 08:56:05
         compiled from ../templates/default/user/save.tpl */ ?>

<?php if ($this->_tpl_vars['saved'] == true): ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_user_success']; ?>

	<br />
	<br />
<?php else: ?>
	<br />
	 <?php echo $this->_tpl_vars['LANG']['save_user_failure']; ?>

	<br />
	<br />
<?php endif; ?>

<?php if ($_POST['cancel'] == null): ?>
	<meta http-equiv="refresh" content="2;URL=index.php?module=user&view=manage" />
<?php else: ?>
	<meta http-equiv="refresh" content="0;URL=index.php?module=user&view=manage" />
<?php endif; ?>