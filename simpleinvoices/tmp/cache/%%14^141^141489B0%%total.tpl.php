<?php /* Smarty version 2.6.18, created on 2016-10-28 08:54:12
         compiled from ../templates/default/invoices/total.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/invoices/total.tpl', 43, false),)), $this); ?>

<form name="frmpost" action="index.php?module=invoices&amp;view=save" method="POST">
<!--
<h3><?php echo $this->_tpl_vars['LANG']['inv']; ?>
 <?php echo $this->_tpl_vars['LANG']['inv_total']; ?>
</h3>
-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['path'])."/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<tr>
<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['description']; ?>
</td>
</tr>

<tr>
	<td colspan="6" >
<textarea input type="text" class="editor" name="description" rows="10" cols="100" wrap="nowrap"></textarea></td>
</tr>

	<?php echo $this->_tpl_vars['show_custom_field']['1']; ?>

	<?php echo $this->_tpl_vars['show_custom_field']['2']; ?>

	<?php echo $this->_tpl_vars['show_custom_field']['3']; ?>

	<?php echo $this->_tpl_vars['show_custom_field']['4']; ?>

	



<tr>
	<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['gross_total']; ?>
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
    <td class="details_screen"><?php echo $this->_tpl_vars['LANG']['inv_pref']; ?>
</td>
</tr>
<tr>
	<td><input type="text" class="validate[required]" name="unit_price" size="15" /></td>
	<?php if ($this->_tpl_vars['taxes'] == null): ?>
	    <td><p><em><?php echo $this->_tpl_vars['LANG']['no_taxes']; ?>
</em></p></td>
    <?php else: ?>
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
        <td>				                				                
            <select 
                id="tax_id[0][<?php echo ((is_array($_tmp=$this->_sections['tax']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
]"
                name="tax_id[0][<?php echo ((is_array($_tmp=$this->_sections['tax']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
]"
            >
            <option value=""></option>
            <?php $_from = $this->_tpl_vars['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tax']):
?>
                <option <?php if ($this->_tpl_vars['tax']['tax_id'] == $this->_tpl_vars['defaults']['tax'] && $this->_sections['tax']['index'] == 0): ?> selected <?php endif; ?>   value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['tax']['tax_description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
        </td>
        <?php endfor; endif; ?>
    <?php endif; ?>
<td>

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
	
<tr>
	<td align="left">
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_invoice_custom_fields" title="<?php echo $this->_tpl_vars['LANG']['want_more_fields']; ?>
"><img src="./images/common/help-small.png" alt="" /> <?php echo $this->_tpl_vars['LANG']['want_more_fields']; ?>
</a>
	</td>
</tr>
<!--Add more line items while in an itemeised invoice - Get style - has problems- wipes the current values of the existing rows - not good
<tr>
<td>
<a href="?get_num_line_items=10">Add 5 more line items<a>
</tr>
-->
</table>
<!-- </div> -->
<br />
<table class="buttons" align="center">
	<tr>
		<td>
			<button type="submit" class="positive" name="submit" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
				<img class="button_img" src="./images/common/tick.png" alt="" /> 
				<?php echo $this->_tpl_vars['LANG']['save']; ?>

			</button>
            		<input type="hidden" name="max_items" value="<?php echo ((is_array($_tmp=$this->_sections['line']['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" />
			<input type="hidden" name="type" value="1" />
			<a href="./index.php?module=invoices&amp;view=manage" class="negative">
				<img src="./images/common/cross.png" alt="" />
				<?php echo $this->_tpl_vars['LANG']['cancel']; ?>

			</a>
		</td>
	</tr>
</table>

</form>