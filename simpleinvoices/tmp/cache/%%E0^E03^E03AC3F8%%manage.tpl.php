<?php /* Smarty version 2.6.18, created on 2016-10-28 08:59:59
         compiled from ../templates/default/tax_rates/manage.tpl */ ?>

<table class="buttons" align="center">
    <tr>
        <td>

            <a href="index.php?module=tax_rates&view=add" class="positive">
                <img src="./images/common/add.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['add_new_tax_rate']; ?>

            </a>

        </td>
    </tr>
</table>

<?php if ($this->_tpl_vars['taxes'] == null): ?>

	<br />
	<br />
	<span class="welcome"><?php echo $this->_tpl_vars['LANG']['no_tax_rates']; ?>
</span>
	<br />
	<br />
	<br />
	<br />

<?php else: ?>
	<br />
	<table id="manageGrid" style="display:none"></table>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/tax_rates/manage.js.php', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 
<?php endif; ?>