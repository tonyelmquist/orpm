<?php /* Smarty version 2.6.18, created on 2016-10-27 13:27:58
         compiled from ../templates/default/preferences/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/preferences/details.tpl', 15, false),)), $this); ?>
<!--Modified code to display apostrophes in text box output 05/02/2008-Gates-->
<form name="frmpost"
	action="index.php?module=preferences&amp;view=save&amp;id=<?php echo $_GET['id']; ?>
"
	method="post">


<?php if ($_GET['action'] == 'view'): ?>
<br />
	<table align="center">
		<tr>	
			<td class="details_screen">Description 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_description" title="<?php echo $this->_tpl_vars['LANG']['description']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Currency sign 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_currency_sign" title="<?php echo $this->_tpl_vars['LANG']['currency_sign']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['currency_code']; ?>

				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_currency_code" title="<?php echo $this->_tpl_vars['LANG']['currency_code']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['currency_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice heading 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_heading" title="<?php echo $this->_tpl_vars['LANG']['invoice_heading']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a> 
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice wording 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_wording" title="<?php echo $this->_tpl_vars['LANG']['invoice_wording']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice detail heading 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_detail_heading" title="<?php echo $this->_tpl_vars['LANG']['invoice_detail_heading']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_detail_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['include_online_payment']; ?>

				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_detail_line" title="<?php echo $this->_tpl_vars['LANG']['invoice_detail_line']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a></td>
			<td>
				<input type=checkbox name=include_online_payment[] <?php if (in_array ( 'paypal' , explode ( "," , $this->_tpl_vars['preference']['include_online_payment'] ) )): ?>checked<?php endif; ?> value='paypal' DISABLED><?php echo $this->_tpl_vars['LANG']['paypal']; ?>

				<input type=checkbox name=include_online_payment[] <?php if (in_array ( 'eway_merchant_xml' , explode ( "," , $this->_tpl_vars['preference']['include_online_payment'] ) )): ?>checked<?php endif; ?> value='eway_merchant_xml' DISABLED><?php echo $this->_tpl_vars['LANG']['eway_merchant_xml']; ?>

</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment method 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_payment_method" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_method']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a></td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_method'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line1 name 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line1_name" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_1_name']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a></td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line1 value 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line1_value" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_1_value']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line2 name 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line2_name" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_2_name']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line2 value 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line2_value" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_2_value']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>		
        <tr>
        	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_enabled" title="<?php echo $this->_tpl_vars['LANG']['enabled']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo $this->_tpl_vars['preference']['enabled']; ?>
</td>		</tr>	
        <tr>
        	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['status']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_status" title="<?php echo $this->_tpl_vars['LANG']['status']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo $this->_tpl_vars['preference']['status_wording']; ?>
</td>		</tr>	
        <tr>
        	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['invoice_numbering_group']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_numbering_group" title="<?php echo $this->_tpl_vars['LANG']['invoice_numbering_group']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><?php echo $this->_tpl_vars['index_group']['pref_description']; ?>
</td>		</tr>	
		<tr>
			<td colspan="2" align="center"></td>
		</tr>
	</table>
	<br />
	<table class="buttons" align="center">
		<tr>
			<td>
				<a href="./index.php?module=preferences&amp;view=details&amp;id=<?php echo $this->_tpl_vars['preference']['pref_id']; ?>
&amp;action=edit" class="positive">
				<img src="./images/famfam/report_edit.png" alt="" /><?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a>

            <a href="./index.php?module=preferences&amp;view=manage" class="negative">
				<img src="./images/common/cross.png" alt="" /><?php echo $this->_tpl_vars['LANG']['cancel']; ?>
</a>
			</td>
		</tr>
	</table>
	<br />
	<table  align="center">
		<tr>
			<td colspan="2" align="center" class="align_center">
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_what_the" title="<?php echo $this->_tpl_vars['LANG']['whats_all_this_inv_pref']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> Whats all this "Invoice Preference" stuff about? </a>
			</td>
		</tr>
	</table>


<?php endif; ?>

<?php if ($_GET['action'] == 'edit'): ?>
<br />
	<table align="center">
		<tr>
			<td class="details_screen">Description 
				<a 
					class="cluetip"
					href="#"
					rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
					title="<?php echo $this->_tpl_vars['LANG']['Required_Field']; ?>
"
				>
					<img src="./images/common/required-small.png" alt="" />
				</a>	
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_description" title="<?php echo $this->_tpl_vars['LANG']['description']; ?>
">
					<img src="./images/common/help-small.png" alt="" />
				</a>
			</td>
			<td><input type="text" class="validate[required]" name='pref_description' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Currency sign 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_currency_sign" title="<?php echo $this->_tpl_vars['LANG']['currency_sign']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td>
                <input type="text" name='pref_currency_sign' value="<?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
" size="15" />
                <a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_currency_sign" title="<?php echo $this->_tpl_vars['LANG']['currency_sign']; ?>
">
                   <?php echo $this->_tpl_vars['LANG']['currency_sign_non_dollar']; ?>

                    <img src="./images/common/help-small.png" alt="" /> 
                </a>
            </td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['currency_code']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_currency_code" title="<?php echo $this->_tpl_vars['LANG']['currency_code']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td>
                <input type="text" name='currency_code' value="<?php echo $this->_tpl_vars['preference']['currency_code']; ?>
" size="15" />
            </td>
		</tr>
		<tr>
			<td class="details_screen">Invoice heading 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_heading" title="<?php echo $this->_tpl_vars['LANG']['invoice_heading']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a> 
			<td><input type="text" name='pref_inv_heading' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice wording 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_wording" title="<?php echo $this->_tpl_vars['LANG']['invoice_wording']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a> 
			</td>
			<td><input type="text" name='pref_inv_wording' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice detail heading 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_detail_heading" title="<?php echo $this->_tpl_vars['LANG']['invoice_detail_heading']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> </a>
			</td>
			<td><input type="text" name='pref_inv_detail_heading' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_detail_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice detail line 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_detail_line" title="<?php echo $this->_tpl_vars['LANG']['invoice_detail_line']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_detail_line' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_detail_line'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="75" /></td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['include_online_payment']; ?>

				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_detail_line" title="<?php echo $this->_tpl_vars['LANG']['invoice_detail_line']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a></td>
			<td>
				<input type=checkbox name=include_online_payment[] <?php if (in_array ( 'paypal' , explode ( "," , $this->_tpl_vars['preference']['include_online_payment'] ) )): ?>checked<?php endif; ?> value='paypal'><?php echo $this->_tpl_vars['LANG']['paypal']; ?>

				<input type=checkbox name=include_online_payment[] <?php if (in_array ( 'eway_merchant_xml' , explode ( "," , $this->_tpl_vars['preference']['include_online_payment'] ) )): ?>checked<?php endif; ?> value='eway_merchant_xml'><?php echo $this->_tpl_vars['LANG']['eway_merchant_xml']; ?>

			</td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment method 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_payment_method" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_method']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_payment_method' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_method'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line1 name 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line1_name" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_1_name']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_payment_line1_name' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line1 value 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line1_value" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_1_value']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_payment_line1_value' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line2 name 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line2_name" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_2_name']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_payment_line2_name' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen">Invoice payment line2 value 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_payment_line2_value" title="<?php echo $this->_tpl_vars['LANG']['invoice_payment_line_2_value']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td><input type="text" name='pref_inv_payment_line2_value' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['status']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_status" title="<?php echo $this->_tpl_vars['LANG']['status']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td>
				<select name="status">
                <?php $_from = $this->_tpl_vars['status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                    <option <?php if ($this->_tpl_vars['s']['id'] == $this->_tpl_vars['preference']['status']): ?> selected <?php endif; ?> value="<?php echo $this->_tpl_vars['s']['id']; ?>
"><?php echo $this->_tpl_vars['s']['status']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['invoice_numbering_group']; ?>
 
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_numbering_group" title="<?php echo $this->_tpl_vars['LANG']['invoice_numbering_group']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
            <td class="details_screen">
            <?php if ($this->_tpl_vars['preferences'] == null): ?>
                <p><em><?php echo $this->_tpl_vars['LANG']['no_preferences']; ?>
</em></p>
            <?php else: ?>
                <select name="index_group">
                <?php $_from = $this->_tpl_vars['preferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
                    <option <?php if ($this->_tpl_vars['p']['pref_id'] == $this->_tpl_vars['preference']['index_group']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['p']['pref_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['p']['pref_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
            
            </td>
    	</tr>	
		<tr>
			<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>

				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_invoice_enabled" title="<?php echo $this->_tpl_vars['LANG']['enabled']; ?>
">
				<img src="./images/common/help-small.png" alt="" /></a>
			</td>
			<td>
				<select name="pref_enabled">
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_enabled'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" selected
				style="font-weight: bold;"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['enabled'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
				<option value="1"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</option>
				<option value="0"><?php echo $this->_tpl_vars['LANG']['disabled']; ?>
</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" class="align_center">
				<a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_inv_pref_what_the" title="<?php echo $this->_tpl_vars['LANG']['whats_all_this_inv_pref']; ?>
">
				<img src="./images/common/help-small.png" alt="" /> <?php echo $this->_tpl_vars['LANG']['whats_all_this_inv_pref']; ?>
 </a>
			</td>
		</tr>
	</table>
<br />
	<table class="buttons" align="center">
		<tr>
			<td>
				<button type="submit" class="positive" name="save_preference" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
					<img class="button_img" src="./images/common/tick.png" alt="" /> 
					<?php echo $this->_tpl_vars['LANG']['save']; ?>

				</button>

				<input type="hidden" name="op" value="edit_preference" />
        
				<a href="./index.php?module=preferences&amp;view=manage" class="negative">
					<img src="./images/common/cross.png" alt="" />
					<?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
			</td>
		</tr>
	</table>
<?php endif; ?>
</form>