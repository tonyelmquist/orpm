<?php /* Smarty version 2.6.18, created on 2016-10-28 08:52:12
         compiled from ../templates/default/invoices/itemised.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/invoices/itemised.tpl', 120, false),)), $this); ?>

<form name="frmpost" action="index.php?module=invoices&amp;view=save" method="post" onsubmit="return frmpost_Validator(this)">

<div id="gmail_loading" class="gmailLoader" style="float:right; display: none;">
        	<img src="images/common/gmail-loader.gif" alt="<?php echo $this->_tpl_vars['LANG']['loading']; ?>
 ..." /> <?php echo $this->_tpl_vars['LANG']['loading']; ?>
 ...
</div>


<?php if ($this->_tpl_vars['first_run_wizard'] == true): ?>

        <br />
        <br />
        <span class="welcome">
            <?php echo $this->_tpl_vars['LANG']['before_starting']; ?>

        </span>
        <br />
        <br />
        <br />
        <table class="buttons" align="center">
    <?php if ($this->_tpl_vars['billers'] == null): ?>
        <tr>
                <td>
                     <?php echo $this->_tpl_vars['LANG']['setup_as_biller']; ?>
&nbsp;  
                </td>
                <td>
                    <a href="./index.php?module=billers&amp;view=add" class="positive">
                        <img src="./images/common/user_add.png" alt="" />
                        <?php echo $this->_tpl_vars['LANG']['add_new_biller']; ?>

                    </a>
                </td>
        </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['customers'] == null): ?>
            <tr>
                <td>
                     <?php echo $this->_tpl_vars['LANG']['setup_add_customer']; ?>
&nbsp;  
                </td>
                <td>
                    <a href="./index.php?module=customers&amp;view=add" class="positive">
                        <img src="./images/common/vcard_add.png" alt="" />
                        <?php echo $this->_tpl_vars['LANG']['customer_add']; ?>

                    </a>
                </td>
            </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['products'] == null): ?>
            <tr>
                <td>
                     <?php echo $this->_tpl_vars['LANG']['setup_add_products']; ?>
&nbsp;  
                </td>
                <td>
                    <a href="./index.php?module=products&amp;view=add" class="positive">
                        <img src="./images/common/cart_add.png" alt="" />
                        <?php echo $this->_tpl_vars['LANG']['add_new_product']; ?>

                    </a>
                </td>
            </tr>

    <?php endif; ?>
    <?php if ($this->_tpl_vars['taxes'] == null): ?>
            <tr>
                <td>
                     <?php echo $this->_tpl_vars['LANG']['setup_add_taxrate']; ?>
&nbsp;  
                </td>
                <td>
                    <a href="index.php?module=tax_rates&amp;view=add" class="positive">
                        <img src="./images/common/money_delete.png" alt="" />
                        <?php echo $this->_tpl_vars['LANG']['add_new_tax_rate']; ?>

                    </a>
                </td>
            </tr>

    <?php endif; ?>
    <?php if ($this->_tpl_vars['preferences'] == null): ?>
            <tr>
                <td>
                     <?php echo $this->_tpl_vars['LANG']['setup_add_inv_pref']; ?>
&nbsp;  
                </td>
                <td>
                    </a>
                    <a href="./index.php?module=preferences&amp;view=add" class="positive">
                        <img src="./images/common/page_white_edit.png" alt="" />
                        <?php echo $this->_tpl_vars['LANG']['add_new_preference']; ?>

                    </a>
                </td>
            </tr>


    <?php endif; ?>
                </td>
            </tr>
            </table>
        <br />

<?php else: ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['path'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table align="left">
	<tr>
		<td colspan="3">
		<table id="itemtable">
			<tbody id="itemtable-tbody">
			<tr>
				<td class="details_screen"></td>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['quantity']; ?>
</td>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['item']; ?>
</td>
				<?php unset($this->_sections['tax_header']);
$this->_sections['tax_header']['name'] = 'tax_header';
$this->_sections['tax_header']['loop'] = is_array($_loop=$this->_tpl_vars['defaults']['tax_per_line_item']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tax_header']['show'] = true;
$this->_sections['tax_header']['max'] = $this->_sections['tax_header']['loop'];
$this->_sections['tax_header']['step'] = 1;
$this->_sections['tax_header']['start'] = $this->_sections['tax_header']['step'] > 0 ? 0 : $this->_sections['tax_header']['loop']-1;
if ($this->_sections['tax_header']['show']) {
    $this->_sections['tax_header']['total'] = $this->_sections['tax_header']['loop'];
    if ($this->_sections['tax_header']['total'] == 0)
        $this->_sections['tax_header']['show'] = false;
} else
    $this->_sections['tax_header']['total'] = 0;
if ($this->_sections['tax_header']['show']):

            for ($this->_sections['tax_header']['index'] = $this->_sections['tax_header']['start'], $this->_sections['tax_header']['iteration'] = 1;
                 $this->_sections['tax_header']['iteration'] <= $this->_sections['tax_header']['total'];
                 $this->_sections['tax_header']['index'] += $this->_sections['tax_header']['step'], $this->_sections['tax_header']['iteration']++):
$this->_sections['tax_header']['rownum'] = $this->_sections['tax_header']['iteration'];
$this->_sections['tax_header']['index_prev'] = $this->_sections['tax_header']['index'] - $this->_sections['tax_header']['step'];
$this->_sections['tax_header']['index_next'] = $this->_sections['tax_header']['index'] + $this->_sections['tax_header']['step'];
$this->_sections['tax_header']['first']      = ($this->_sections['tax_header']['iteration'] == 1);
$this->_sections['tax_header']['last']       = ($this->_sections['tax_header']['iteration'] == $this->_sections['tax_header']['total']);
?>
					<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['tax']; ?>
 <?php if ($this->_tpl_vars['defaults']['tax_per_line_item'] > 1): ?><?php echo ((is_array($_tmp=$this->_sections['tax_header']['index']+1)) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php endif; ?> </td>
				<?php endfor; endif; ?>
				<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['unit_price']; ?>
</td>
			</tr>
			</tbody>
	
	        <?php unset($this->_sections['line']);
$this->_sections['line']['name'] = 'line';
$this->_sections['line']['start'] = (int)0;
$this->_sections['line']['loop'] = is_array($_loop=$this->_tpl_vars['dynamic_line_items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['line']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['line']['show'] = true;
$this->_sections['line']['max'] = $this->_sections['line']['loop'];
if ($this->_sections['line']['start'] < 0)
    $this->_sections['line']['start'] = max($this->_sections['line']['step'] > 0 ? 0 : -1, $this->_sections['line']['loop'] + $this->_sections['line']['start']);
else
    $this->_sections['line']['start'] = min($this->_sections['line']['start'], $this->_sections['line']['step'] > 0 ? $this->_sections['line']['loop'] : $this->_sections['line']['loop']-1);
if ($this->_sections['line']['show']) {
    $this->_sections['line']['total'] = min(ceil(($this->_sections['line']['step'] > 0 ? $this->_sections['line']['loop'] - $this->_sections['line']['start'] : $this->_sections['line']['start']+1)/abs($this->_sections['line']['step'])), $this->_sections['line']['max']);
    if ($this->_sections['line']['total'] == 0)
        $this->_sections['line']['show'] = false;
} else
    $this->_sections['line']['total'] = 0;
if ($this->_sections['line']['show']):

            for ($this->_sections['line']['index'] = $this->_sections['line']['start'], $this->_sections['line']['iteration'] = 1;
                 $this->_sections['line']['iteration'] <= $this->_sections['line']['total'];
                 $this->_sections['line']['index'] += $this->_sections['line']['step'], $this->_sections['line']['iteration']++):
$this->_sections['line']['rownum'] = $this->_sections['line']['iteration'];
$this->_sections['line']['index_prev'] = $this->_sections['line']['index'] - $this->_sections['line']['step'];
$this->_sections['line']['index_next'] = $this->_sections['line']['index'] + $this->_sections['line']['step'];
$this->_sections['line']['first']      = ($this->_sections['line']['iteration'] == 1);
$this->_sections['line']['last']       = ($this->_sections['line']['iteration'] == $this->_sections['line']['total']);
?>
		<?php $this->assign('lineNumber', $this->_sections['line']['index']); ?> 
				<tbody class="line_item" id="row<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
">
					<tr>
						<td>
							<?php if ($this->_sections['line']['index'] == '0'): ?>
							<a 
								href="#" 
								class="trash_link"
								id="trash_link<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
								title="<?php echo ((is_array($_tmp=$this->_tpl_vars['LANG']['cannot_delete_first_row'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
							>
								<img 
									id="trash_image<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
									src="./images/common/blank.gif"
									height="16px"
									width="16px"
									title="<?php echo $this->_tpl_vars['LANG']['cannot_delete_first_row']; ?>
"
									alt=""
								 />
							</a>
							<?php endif; ?>
							<?php if ($this->_sections['line']['index'] != 0): ?>
														<!-- onclick="delete_row(<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
);" --> 
							<a 
								id="trash_link<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
								class="trash_link"
								title="<?php echo $this->_tpl_vars['LANG']['delete_row']; ?>
" 
								rel="<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
								href="#" 
								style="display: inline;"
							>
								<img src="./images/common/delete_item.png" alt="" />
							</a>
							<?php endif; ?>
						</td>
						<td>
							<input 
                                type="text" 
                                <?php if ($this->_sections['line']['index'] == '0'): ?> 
                                    class="validate[required]" 
                                <?php endif; ?> 
                                name="quantity<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" 
                                id="quantity<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="5" 
								<?php if ($_GET['quantity'][$this->_tpl_vars['lineNumber']]): ?>
								    value="<?php echo $_GET['quantity'][$this->_tpl_vars['lineNumber']]; ?>
"
                                <?php endif; ?>
                                />
						</td>
						<td>
										
					<?php if ($this->_tpl_vars['products'] == null): ?>
						<p><em><?php echo $this->_tpl_vars['LANG']['no_products']; ?>
</em></p>
					<?php else: ?>
						<select 
							id="products<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
							name="products<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
							rel="<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
							class="<?php if ($this->_sections['line']['index'] == '0'): ?>validate[required]<?php endif; ?> product_change"						
                        >
							<option value=""></option>
						<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
							<option 
								<?php if ($this->_tpl_vars['product']['id'] == $_GET['product'][$this->_tpl_vars['lineNumber']]): ?>
								    value="<?php echo $_GET['product'][$this->_tpl_vars['lineNumber']]; ?>
"
								    selected
								<?php else: ?>
								    value="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
								<?php endif; ?>
							>
								<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

							</option>
						<?php endforeach; endif; unset($_from); ?>
						</select>
					<?php endif; ?>
						</td>
						<?php unset($this->_sections['tax']);
$this->_sections['tax']['name'] = 'tax';
$this->_sections['tax']['start'] = (int)0;
$this->_sections['tax']['loop'] = is_array($_loop=$this->_tpl_vars['defaults']['tax_per_line_item']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tax']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['tax']['show'] = true;
$this->_sections['tax']['max'] = $this->_sections['tax']['loop'];
if ($this->_sections['tax']['start'] < 0)
    $this->_sections['tax']['start'] = max($this->_sections['tax']['step'] > 0 ? 0 : -1, $this->_sections['tax']['loop'] + $this->_sections['tax']['start']);
else
    $this->_sections['tax']['start'] = min($this->_sections['tax']['start'], $this->_sections['tax']['step'] > 0 ? $this->_sections['tax']['loop'] : $this->_sections['tax']['loop']-1);
if ($this->_sections['tax']['show']) {
    $this->_sections['tax']['total'] = min(ceil(($this->_sections['tax']['step'] > 0 ? $this->_sections['tax']['loop'] - $this->_sections['tax']['start'] : $this->_sections['tax']['start']+1)/abs($this->_sections['tax']['step'])), $this->_sections['tax']['max']);
    if ($this->_sections['tax']['total'] == 0)
        $this->_sections['tax']['show'] = false;
} else
    $this->_sections['tax']['total'] = 0;
if ($this->_sections['tax']['show']):

            for ($this->_sections['tax']['index'] = $this->_sections['tax']['start'], $this->_sections['tax']['iteration'] = 1;
                 $this->_sections['tax']['iteration'] <= $this->_sections['tax']['total'];
                 $this->_sections['tax']['index'] += $this->_sections['tax']['step'], $this->_sections['tax']['iteration']++):
$this->_sections['tax']['rownum'] = $this->_sections['tax']['iteration'];
$this->_sections['tax']['index_prev'] = $this->_sections['tax']['index'] - $this->_sections['tax']['step'];
$this->_sections['tax']['index_next'] = $this->_sections['tax']['index'] + $this->_sections['tax']['step'];
$this->_sections['tax']['first']      = ($this->_sections['tax']['iteration'] == 1);
$this->_sections['tax']['last']       = ($this->_sections['tax']['iteration'] == $this->_sections['tax']['total']);
?>
		                    		<?php $this->assign('taxNumber', $this->_sections['tax']['index']); ?> 
						<td>				                				                
							<select 
								id="tax_id[<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_sections['tax']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
]"
								name="tax_id[<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
][<?php echo ((is_array($_tmp=$this->_sections['tax']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
]"
							>
							<option value=""></option>
							<?php $_from = $this->_tpl_vars['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tax']):
?>
								<option 
								    <?php if ($this->_tpl_vars['tax']['tax_id'] == $_GET['tax'][$this->_tpl_vars['lineNumber']][$this->_tpl_vars['taxNumber']]): ?>
									value="<?php echo $_GET['tax'][$this->_tpl_vars['lineNumber']][$this->_tpl_vars['taxNumber']]; ?>
"
									selected
								    <?php else: ?>
								       value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"
								    <?php endif; ?>
								>
								    <?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

								</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
						</td>
						<?php endfor; endif; ?>
						<td>
							<input 
								id="unit_price<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" 
								name="unit_price<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" 
								size="7"
								<?php if ($_GET['unit_price'][$this->_tpl_vars['lineNumber']]): ?>
								    value="<?php echo $_GET['unit_price'][$this->_tpl_vars['lineNumber']]; ?>
"
								<?php else: ?>
								   value=""
								<?php endif; ?>
                                <?php if ($this->_sections['line']['index'] == '0'): ?> class="validate[required]" <?php endif; ?>
							/>
						</td>	
					</tr>
							
					<tr class="note">
							<td>
							</td>
							<td colspan="4">
								<textarea input type="text" class="note" name="description<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" id="description<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" rows="3" cols=3 WRAP=nowrap></textarea>
								
								</td>
					</tr>
				</tbody>
	        <?php endfor; endif; ?>
		</table>
		</td>
	</tr>
	<tr>
		<td>
			<table class="buttons" align="left">
				<tr>
					<td>
												<a 
							href="#" 
							class="add_line_item"
						>
							<img 
								src="./images/common/add.png"
								alt=""
							/>
							<?php echo $this->_tpl_vars['LANG']['add_new_row']; ?>

						</a>
				
					</td>
					<td>
					<a href='#' class="show-note" onclick="javascript: $('.note').show();$('.show-note').hide();">
						<img src="./images/common/page_white_add.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
" alt="" /><?php echo $this->_tpl_vars['LANG']['show_details']; ?>
</a>
					<a href='#' class="note" onclick="javascript: $('.note').hide();$('.show-note').show();">
						<img src="./images/common/page_white_delete.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
" alt="" /><?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
</a>
					</td>
				</tr>
		 </table>
		</td>
	</tr>
			<?php echo $this->_tpl_vars['show_custom_field']['1']; ?>

			<?php echo $this->_tpl_vars['show_custom_field']['2']; ?>

			<?php echo $this->_tpl_vars['show_custom_field']['3']; ?>

			<?php echo $this->_tpl_vars['show_custom_field']['4']; ?>

				<tr>
	        <td colspan="1" class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
	</tr>
	
	<tr>
		<td colspan="4">
			<textarea input type="text" class="editor" name="note" rows="5" cols="50" wrap="nowrap">
				<?php echo $_GET['note']; ?>

			</textarea>
		</td>
	</tr>
	</tr>
	
	<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['inv_pref']; ?>

	&nbsp; 
	&nbsp; 
	<?php if ($this->_tpl_vars['preferences'] == null): ?>
		<p><em><?php echo $this->_tpl_vars['LANG']['no_preferences']; ?>
</em></p>
	<?php else: ?>
		<select name="preference_id">
		<?php $_from = $this->_tpl_vars['preferences']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['preference']):
?>
			<option <?php if ($this->_tpl_vars['preference']['pref_id'] == $this->_tpl_vars['defaults']['preference']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
	<?php endif; ?>
	
	</td>
	</tr>	
	<tr>
		<td class=""> 
			<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_invoice_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['want_more_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /> <?php echo $this->_tpl_vars['LANG']['want_more_fields']; ?>
</a>
		</td>
	</tr>

</table>
</td>
</tr>
<tr>
<td>
<table class="buttons" align="center">
	<tr>
		<td>
		<button type="submit" class="invoice_save positive" name="submit" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['save']; ?>

            </button>
            
		</td>
		<td>
		<input type="hidden" id="max_items" name="max_items" value="<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" />
        	<input type="hidden" name="type" value="2" />
        	
            <a href="./index.php?module=invoices&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
</table>
</table>

</form>
<?php endif; ?>