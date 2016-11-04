<?php /* Smarty version 2.6.18, created on 2016-10-27 13:28:34
         compiled from ../templates/default/statement/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/statement/index.tpl', 25, false),array('modifier', 'urlencode', '../templates/default/statement/index.tpl', 100, false),array('modifier', 'siLocal_number', '../templates/default/statement/index.tpl', 133, false),array('modifier', 'date_format', '../templates/default/statement/index.tpl', 208, false),)), $this); ?>
<center>
<h2>Statement of Invoices</h2>
</center>
<?php if ($this->_tpl_vars['menu'] != false): ?>

<?php if ($_POST['submit'] == null): ?>
<div class="welcome">
<?php else: ?>
<div class="">
<?php endif; ?>
<form name="frmpost" action="index.php?module=statement&amp;view=index" method="post">

       <table align="center">

               <tr>
                      <td class="details_screen">
                               <?php echo $this->_tpl_vars['LANG']['biller']; ?>

                       </td>
                       <td>
                           <?php if ($this->_tpl_vars['billers'] == null): ?>
                              <p><em><?php echo $this->_tpl_vars['LANG']['no_billers']; ?>
</em></p>
                           <?php else: ?>
                            <select name="biller_id">
                            <?php $_from = $this->_tpl_vars['billers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list_biller']):
?>
                            <option <?php if ($this->_tpl_vars['list_biller']['id'] == $this->_tpl_vars['biller_id']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['list_biller']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            </select>
                            <?php endif; ?>
                        </td>
                </tr>
                <tr>
                    <td class="details_screen">
                        <?php echo $this->_tpl_vars['LANG']['customer']; ?>

                    </td>
                    <td>
                        <?php if ($this->_tpl_vars['customers'] == null): ?>
                        <em><?php echo $this->_tpl_vars['LANG']['no_customers']; ?>
</em>
                        <?php else: ?>
                            <select name="customer_id">
                            <?php $_from = $this->_tpl_vars['customers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['list_customer']):
?>
                                <option <?php if ($this->_tpl_vars['list_customer']['id'] == $this->_tpl_vars['customer_id']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['list_customer']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            </select>
                        <?php endif; ?>
                    </td>
                </tr>
	<tr>
	<td class="details_screen">
		<?php echo $this->_tpl_vars['LANG']['filter_by_dates']; ?>

	</td>
	<td class="">
		<input type="checkbox" name="filter_by_date"  <?php if ($this->_tpl_vars['filter_by_date'] == 'yes'): ?> checked <?php endif; ?> value="yes">
	</td>
	</tr>
    <tr>
        <td wrap="nowrap" class="details_screen">
		<?php echo $this->_tpl_vars['LANG']['start_date']; ?>

	</td><td>
                <input type="text" class="validate[required,custom[date],length[0,10]] date-picker" size="10" name="start_date" id="date1" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
' />   
         </td>
	</tr>
	<tr>
        <td wrap="nowrap" class="details_screen"  >
		<?php echo $this->_tpl_vars['LANG']['end_date']; ?>

	</td><td>
                <input type="text" class="validate[required,custom[date],length[0,10]] date-picker" size="10" name="end_date" id="date1" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
' />   
            </td>
    </tr>
	<tr>
	<td class="details_screen">
		<?php echo $this->_tpl_vars['LANG']['show_only_unpaid_invoices']; ?>

	</td>
	<td class="">
		<input type="checkbox" name="show_only_unpaid"  <?php if ($this->_tpl_vars['show_only_unpaid'] == 'yes'): ?> checked <?php endif; ?> value="yes">
	</td>
	</tr>

<tr>
<td colspan="2"><br />
<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="submit" value="statement_report">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['run_report']; ?>

            </button>

        </td>
    </tr>
</table>
</td>
</tr>
</table>
</form>
</div>
<br />
<br />
	<?php if ($_POST['submit'] != null): ?>
	<span class="welcome">
			<a title="<?php echo $this->_tpl_vars['LANG']['print_preview_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=statement&amp;view=export&amp;biller_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['biller_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;customer_id=<?php echo $this->_tpl_vars['customer_id']; ?>
&amp;start_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;end_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;show_only_unpaid=<?php echo ((is_array($_tmp=$this->_tpl_vars['show_only_unpaid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;filter_by_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['filter_by_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=print"><img src='images/common/printer.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['print_preview']; ?>
</a>
			 &nbsp;&nbsp; 
			 <!-- EXPORT TO PDF -->
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_pdf_tooltip']; ?>
" href="index.php?module=statement&amp;view=export&amp;biller_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['biller_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;customer_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;start_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;end_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;show_only_unpaid=<?php echo ((is_array($_tmp=$this->_tpl_vars['show_only_unpaid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;filter_by_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['filter_by_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=pdf"><img src='images/common/page_white_acrobat.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_pdf']; ?>
</a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_xls_tooltip']; ?>
 .<?php echo $this->_tpl_vars['config']->export->spreadsheet; ?>
 <?php echo $this->_tpl_vars['LANG']['format_tooltip']; ?>
" href="index.php?module=statement&amp;view=export&amp;biller_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['biller_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;customer_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;start_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;end_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;show_only_unpaid=<?php echo ((is_array($_tmp=$this->_tpl_vars['show_only_unpaid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;filter_by_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['filter_by_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=file&amp;filetype=<?php echo $this->_tpl_vars['config']->export->spreadsheet; ?>
"><img src='images/common/page_white_excel.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_as']; ?>
 .<?php echo $this->_tpl_vars['config']->export->spreadsheet; ?>
</a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_doc_tooltip']; ?>
 .<?php echo $this->_tpl_vars['config']->export->wordprocessor; ?>
 <?php echo $this->_tpl_vars['LANG']['format_tooltip']; ?>
" href="index.php?module=statement&amp;view=export&amp;biller_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['biller_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;customer_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;start_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;end_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;show_only_unpaid=<?php echo ((is_array($_tmp=$this->_tpl_vars['show_only_unpaid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;filter_by_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['filter_by_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=file&amp;filetype=<?php echo $this->_tpl_vars['config']->export->wordprocessor; ?>
"><img src='images/common/page_white_word.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_as']; ?>
 .<?php echo $this->_tpl_vars['config']->export->wordprocessor; ?>
 </a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['email']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=statement&amp;view=email&amp;stage=1&amp;biller_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['biller_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;customer_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer_id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;start_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;end_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;show_only_unpaid=<?php echo ((is_array($_tmp=$this->_tpl_vars['show_only_unpaid'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;filter_by_date=<?php echo ((is_array($_tmp=$this->_tpl_vars['filter_by_date'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=file"><img src='images/common/mail-message-new.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['email']; ?>
</a>
	</span>
	<br />
	<br />
	<br />
	<?php endif; ?>

<?php endif; ?>
<?php if ($_POST['submit'] != null || $this->_tpl_vars['view'] == export): ?>

<?php if ($this->_tpl_vars['menu'] == false): ?>
<hr />
<br />
<?php endif; ?>
<table width="100%">
<tr>
	<td width="75%" align="left">
		<strong><?php echo $this->_tpl_vars['LANG']['biller']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['biller_details']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <br />
		<strong><?php echo $this->_tpl_vars['LANG']['customer']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['customer_details']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <br />
		<br />	
		<br />	
	</td>
	<td width="25%">
		<strong><?php echo $this->_tpl_vars['LANG']['statement_summary']; ?>
:</strong><br />
		<strong><?php echo $this->_tpl_vars['LANG']['total']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 <br />
		<strong><?php echo $this->_tpl_vars['LANG']['owing']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 <br />
		<strong><?php echo $this->_tpl_vars['LANG']['paid']; ?>
:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['paid'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 <br />
	</td>
</tr>
</table>
<br />
<br />
<?php if ($this->_tpl_vars['filter_by_date'] == 'yes'): ?> 
<div class="align_left"><strong><?php echo $this->_tpl_vars['LANG']['statement_for_the_period']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['to_lowercase']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['end_date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</strong></div>
<br />
<?php endif; ?>

<table align="center" width="100%">
    <tr>
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['id']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['date']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['biller']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['customer']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['total']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td  class="details_screen">
            <b><?php echo $this->_tpl_vars['LANG']['paid']; ?>
</b>
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen" align='right'>
            <b><?php echo $this->_tpl_vars['LANG']['owing']; ?>
</b>
        </td>
	</tr>
 <?php unset($this->_sections['invoice']);
$this->_sections['invoice']['name'] = 'invoice';
$this->_sections['invoice']['loop'] = is_array($_loop=$this->_tpl_vars['invoices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['invoice']['show'] = true;
$this->_sections['invoice']['max'] = $this->_sections['invoice']['loop'];
$this->_sections['invoice']['step'] = 1;
$this->_sections['invoice']['start'] = $this->_sections['invoice']['step'] > 0 ? 0 : $this->_sections['invoice']['loop']-1;
if ($this->_sections['invoice']['show']) {
    $this->_sections['invoice']['total'] = $this->_sections['invoice']['loop'];
    if ($this->_sections['invoice']['total'] == 0)
        $this->_sections['invoice']['show'] = false;
} else
    $this->_sections['invoice']['total'] = 0;
if ($this->_sections['invoice']['show']):

            for ($this->_sections['invoice']['index'] = $this->_sections['invoice']['start'], $this->_sections['invoice']['iteration'] = 1;
                 $this->_sections['invoice']['iteration'] <= $this->_sections['invoice']['total'];
                 $this->_sections['invoice']['index'] += $this->_sections['invoice']['step'], $this->_sections['invoice']['iteration']++):
$this->_sections['invoice']['rownum'] = $this->_sections['invoice']['iteration'];
$this->_sections['invoice']['index_prev'] = $this->_sections['invoice']['index'] - $this->_sections['invoice']['step'];
$this->_sections['invoice']['index_next'] = $this->_sections['invoice']['index'] + $this->_sections['invoice']['step'];
$this->_sections['invoice']['first']      = ($this->_sections['invoice']['iteration'] == 1);
$this->_sections['invoice']['last']       = ($this->_sections['invoice']['iteration'] == $this->_sections['invoice']['total']);
?>
    <?php if ($this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['preference'] != $this->_tpl_vars['invoices'][$this->_sections['invoice']['index_prev']]['preference'] && $this->_sections['invoice']['index'] != 0): ?>   
        <tr><td><br /></td></tr>
    <?php endif; ?>
    <tr>
        <td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['index'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['preference'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['index_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%e %h %Y") : smarty_modifier_date_format($_tmp, "%e %h %Y")); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['biller'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['customer'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['invoice_total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['INV_PAID'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen" align='right'>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['invoices'][$this->_sections['invoice']['index']]['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>

        </td>
	</tr>
 <?php endfor; endif; ?>
    <tr>
        <td class="details_screen">
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
	    -----<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen">
	    -----<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['paid'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>

        </td>
        <td>
            &nbsp;
            &nbsp;
        </td>
        <td class="details_screen" align='right'>
	    -----<br />
            <?php echo ((is_array($_tmp=$this->_tpl_vars['statement']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>

        </td>
	</tr>
 </table>
<?php endif; ?>