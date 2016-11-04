<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:56
         compiled from ../templates/default/payments/process.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/payments/process.tpl', 8, false),array('modifier', 'number_format', '../templates/default/payments/process.tpl', 11, false),array('modifier', 'siLocal_number', '../templates/default/payments/process.tpl', 48, false),)), $this); ?>
<form name="frmpost" action="index.php?module=payments&amp;view=save" method="post" onsubmit="return frmpost_Validator(this)">
<br /> 
<table align="center">	

<?php if ($_GET['op'] === 'pay_selected_invoice'): ?>

<tr>
	<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['preference'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	<td><input type="hidden" name="invoice_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['total']; ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
</tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['biller']; ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['paid']; ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['paid'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</td>
</tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['customer']; ?>
</td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['owing']; ?>
</td>
	<td><u><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
</u></td>
</tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['amount']; ?>
</td>
	<td colspan="5"><input type="text" name="ac_amount" size="25" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" />
	<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_process_payment_auto_amount" title="<?php echo $this->_tpl_vars['LANG']['process_payment_auto_amount']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
	</td>
</tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['date_formatted']; ?>
</td>
	<td><input type="text" class="date-picker" name="ac_date" id="date1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['today'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /></td>
</tr>

<?php endif; ?>


<?php if ($_GET['op'] === 'pay_invoice'): ?>
	
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['invoice']; ?>

	</td>
	<td>
<select name="invoice_id" class="validate[required]">
    <option value=''></option>
    <?php $_from = $this->_tpl_vars['invoice_all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoice']):
?>
        <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['biller'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['customer'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo $this->_tpl_vars['LANG']['total']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['invoice_total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 : <?php echo $this->_tpl_vars['LANG']['owing']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
)</option>
    <?php endforeach; endif; unset($_from); ?>
</select>

</tr>
<tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['amount']; ?>
</td>
	<td colspan="5"><input type="text" name="ac_amount" size="25" /></td>
</tr>
<tr>
	<div class="demo-holder">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['date_formatted']; ?>
</td>
		<td><input type="text" class="date-picker" name="ac_date" id="date1" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['today'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" /></td>
	</div>
</tr>

<?php endif; ?>


<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['payment_type_method']; ?>
</td>
	<td>

<?php if ($this->_tpl_vars['paymentTypes'] == null): ?>
	<p><em><?php echo $this->_tpl_vars['LANG']['no_payment_types']; ?>
</em></p>
<?php else: ?>


	<select name="ac_payment_type">
		<?php $_from = $this->_tpl_vars['paymentTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paymentType']):
?>
			<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['paymentType']['pt_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" <?php if ($this->_tpl_vars['paymentType']['pt_id'] == $this->_tpl_vars['defaults']['payment_type']): ?>selected<?php endif; ?>>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['paymentType']['pt_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

			</option>
		<?php endforeach; endif; unset($_from); ?>
	</select>
<?php endif; ?>
	
	</td>
</tr>
<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['note']; ?>
</td>
	<td colspan="5"><textarea class="editor" name="ac_notes" rows="5" cols="50"></textarea></td>
</tr>
</table>

<br />

<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="process_payment" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['save']; ?>

            </button>

            <input type="hidden" name="op" value="edit_preference" />
        
            <a href="./index.php?module=payments&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
 </table>
 </form>
