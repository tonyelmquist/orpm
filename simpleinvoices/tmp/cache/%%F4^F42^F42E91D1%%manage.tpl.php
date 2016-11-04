<?php /* Smarty version 2.6.18, created on 2016-10-27 12:56:40
         compiled from ../templates/default/preferences/manage.tpl */ ?>
<table class="buttons" align="center">
    <tr>
        <td>
            <a href="./index.php?module=preferences&amp;view=add" class="positive">
                <img src="./images/famfam/add.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['add_new_preference']; ?>

            </a>

        </td>
    </tr>
</table>
 
<?php if ($this->_tpl_vars['preferences'] == null): ?>
	
	<br />
	<br />
	<span class="welcome"><?php echo $this->_tpl_vars['LANG']['no_preferences']; ?>
</span>
	<br />
	<br />
	<br />
	
<?php else: ?>
	<br />
	<table id="manageGrid" style="display:none"></table>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/preferences/manage.js.php', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>
<br />
<div style="text-align:center;"><a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_what_the" title="<?php echo $this->_tpl_vars['LANG']['whats_all_this_inv_pref']; ?>
"><img src="./images/common/help-small.png" alt="" /> <?php echo $this->_tpl_vars['LANG']['whats_all_this_inv_pref']; ?>
 </a></div>