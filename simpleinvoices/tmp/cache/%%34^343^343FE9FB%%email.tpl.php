<?php /* Smarty version 2.6.18, created on 2016-10-27 13:30:41
         compiled from ../templates/default/invoices/email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '../templates/default/invoices/email.tpl', 21, false),array('modifier', 'htmlsafe', '../templates/default/invoices/email.tpl', 22, false),array('modifier', 'outhtml', '../templates/default/invoices/email.tpl', 77, false),)), $this); ?>
<?php if ($_GET['stage'] == 1): ?>

<form name="frmpost" action="index.php?module=invoices&amp;view=email&amp;stage=2&amp;id=<?php echo ((is_array($_tmp=$_GET['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
" method="post">
<div id="top"><h3>Email <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 to Customer as PDF</h3></div>

<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email_from']; ?>

		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_email_from" title="<?php echo $this->_tpl_vars['LANG']['email_from']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" name="email_from" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email_to']; ?>

		<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_email_to" title="<?php echo $this->_tpl_vars['LANG']['email_to']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td><input type="text" name="email_to" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /></td>
	</tr>
	<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email_bcc']; ?>

		<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_email_bcc" title="<?php echo $this->_tpl_vars['LANG']['email_bcc']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
	<td><input type="text" name="email_bcc" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /></td>
	</tr>
	<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['subject']; ?>
</td>
	<td><input type="text" name="email_subject" size="50" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 from <?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 is attached" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['message']; ?>
</td>
		<td><textarea name="email_notes" class="editor" rows="8" cols="50"></textarea></td>
	</tr>
</table>

<br />
	<table class="buttons" align="center">
	    <tr>
	        <td>
	            <button type="submit" class="invoice_save positive" name="submit" value="<?php echo $this->_tpl_vars['LANG']['email']; ?>
">
	                <img class="button_img" src="./images/common/tick.png" alt="" /> 
	                <?php echo $this->_tpl_vars['LANG']['email']; ?>

	            </button>
	            <input type="hidden" name="op" value="insert_customer" />
			</td>
		    </tr>
	 </table>


</form>
<?php endif; ?>

<?php if ($_GET['stage'] == 2): ?>
<meta http-equiv="refresh" content="2;URL=index.php?module=invoices&amp;view=manage" />

<div id="top"></b></div>

<table align="center">
	<tr>
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
	</tr>
</table>

<?php endif; ?>