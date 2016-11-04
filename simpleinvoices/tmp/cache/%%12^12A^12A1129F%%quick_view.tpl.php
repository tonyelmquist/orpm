<?php /* Smarty version 2.6.18, created on 2016-10-28 08:53:43
         compiled from ../templates/default/invoices/quick_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/invoices/quick_view.tpl', 26, false),array('modifier', 'urlencode', '../templates/default/invoices/quick_view.tpl', 26, false),array('modifier', 'outhtml', '../templates/default/invoices/quick_view.tpl', 214, false),array('modifier', 'siLocal_number_trim', '../templates/default/invoices/quick_view.tpl', 261, false),array('modifier', 'siLocal_number', '../templates/default/invoices/quick_view.tpl', 263, false),array('modifier', 'truncate', '../templates/default/invoices/quick_view.tpl', 272, false),array('modifier', 'count_characters', '../templates/default/invoices/quick_view.tpl', 346, false),)), $this); ?>

<div class="align_center">
	<br />


	<!--Actions heading - start-->
	<span class="welcome">
			<a title="<?php echo $this->_tpl_vars['LANG']['print_preview_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=export&amp;view=invoice&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;format=print"><img src='images/common/printer.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['print_preview']; ?>
</a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['edit']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=invoices&amp;view=details&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;action=view"><img src='images/common/edit.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['edit']; ?>
</a>
			 &nbsp;&nbsp; 
			 <a title="<?php echo $this->_tpl_vars['LANG']['process_payment_for']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=payments&amp;view=process&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;op=pay_selected_invoice"><img src='images/common/money_dollar.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['process_payment']; ?>
 </a>
             <?php if ($this->_tpl_vars['eway_pre_check'] == 'true'): ?>
			 &nbsp;&nbsp; 
			 <a title="<?php echo $this->_tpl_vars['LANG']['process_payment_for']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=payments&amp;view=eway&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><img src='images/common/money_dollar.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['process_payment_via_eway']; ?>
 </a>
             <?php endif; ?>
			 &nbsp;&nbsp; 
			 <!-- EXPORT TO PDF -->
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_pdf_tooltip']; ?>
" href="index.php?module=export&amp;view=invoice&amp;id=<?php echo $this->_tpl_vars['invoice']['id']; ?>
&amp;format=pdf"><img src='images/common/page_white_acrobat.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_pdf']; ?>
</a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_xls_tooltip']; ?>
 .<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->export->spreadsheet)) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['format_tooltip']; ?>
" href="index.php?module=export&amp;view=invoice&amp;id=<?php echo $this->_tpl_vars['invoice']['id']; ?>
&amp;format=file&amp;filetype=<?php echo ((is_array($_tmp=$this->_tpl_vars['spreadsheet'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><img src='images/common/page_white_excel.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_as']; ?>
 .<?php echo ((is_array($_tmp=$this->_tpl_vars['spreadsheet'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo $this->_tpl_vars['preference']['pref_inv_wording']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['export_doc_tooltip']; ?>
 .<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->export->wordprocessor)) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['format_tooltip']; ?>
" href="index.php?module=export&amp;view=invoice&amp;id=<?php echo $this->_tpl_vars['invoice']['id']; ?>
&amp;format=file&amp;filetype=<?php echo ((is_array($_tmp=$this->_tpl_vars['wordprocessor'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><img src='images/common/page_white_word.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['export_as']; ?>
 .<?php echo ((is_array($_tmp=$this->_tpl_vars['wordprocessor'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 </a>
			 &nbsp;&nbsp; 
			<a title="<?php echo $this->_tpl_vars['LANG']['email']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=invoices&amp;view=email&amp;stage=1&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><img src='images/common/mail-message-new.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['email']; ?>
</a>
			<?php if ($this->_tpl_vars['defaults']['delete'] == '1'): ?> 
			 &nbsp;&nbsp; 
				<a title="<?php echo $this->_tpl_vars['LANG']['delete']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" href="index.php?module=invoices&amp;view=delete&amp;stage=1&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><img src='images/common/delete.png' class='action' />&nbsp;<?php echo $this->_tpl_vars['LANG']['delete']; ?>
</a>
			<?php endif; ?>
	</span>
</div>
<!--Actions heading - start-->
<br />
<br />
<!-- #PDF end -->

	<table align="center">
	<!-- Invoice Summary section -->

	<tr class="details_screen">
		<td class="details_screen"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['summary']; ?>
:</b></td><td colspan="5" align="right" class="details_screen align_right"><a href='#' class="show-summary" onclick="$('.summary').show();$('.show-summary').hide();"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
" /></a><a href='#' class="summary" onclick="$('.summary').hide();$('.show-summary').show();"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
" /></a> </td>
	</tr>
	<tr class="details_screen summary">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['number_short']; ?>
:</td><td colspan="5" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr class="details_screen summary">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['date']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['date'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<?php echo $this->_tpl_vars['customField']['1']; ?>

	<?php echo $this->_tpl_vars['customField']['2']; ?>

	<?php echo $this->_tpl_vars['customField']['3']; ?>

	<?php echo $this->_tpl_vars['customField']['4']; ?>


	<tr>	
		<td><br /></td>
	</tr>
	<!-- Biller section -->

	<tr class="details_screen">
		<td class="details_screen"><b><?php echo $this->_tpl_vars['LANG']['biller']; ?>
:</b></td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td colspan="2" class="details_screen align_right"><a href='#' class="show-biller" onclick="$('.biller').show();$('.show-biller').hide();"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
" /></a><a href='#' class="biller" onclick="$('.biller').hide();$('.show-biller').show();"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
" /></a></td>
	</tr>
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street2']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
:</td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone_short']; ?>
:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
, <?php echo $this->_tpl_vars['LANG']['zip']; ?>
:</td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['zip_cod'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['mobile_short']; ?>
:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
:</td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['biller_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['biller_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['biller_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen biller">
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['biller_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	
	<tr>
		<td colspan="5"><br /></td>
	</tr>	
	
	<!-- Customer section -->
	<tr class="details_screen">
		<td class="details_screen"><b><?php echo $this->_tpl_vars['LANG']['customer']; ?>
:</b></td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td colspan="2" class="details_screen align_right"><a href='#' class="show-customer" <?php echo ' onclick="$(\'.customer\').show(); $(\'.show-customer\').hide(); '; ?>
"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
"/></a> <a href='#' class="customer" <?php echo ' onclick="$(\'.customer\').hide(); $(\'.show-customer\').show(); '; ?>
"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
" /></a></td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['attention_short']; ?>
:</td>
		<td class="details_screen" colspan="5" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['attention'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
,</td>
	</tr>
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
:</td>
		<td class="details_screen" colspan="5" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street2']; ?>
:</td>
		<td class="details_screen" colspan="5" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
:</td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen">Ph:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
, ZIP:</td>
		<td colspan="3" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['zip_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
:</td>
		<td class="details_screen" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td class="details_screen">Mobile:</td>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
:</td>
		<td class="details_screen"colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabels']['customer_cf1']; ?>
:</td>
		<td colspan="5" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabels']['customer_cf2']; ?>
:</td>
		<td colspan="5" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabels']['customer_cf3']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
	<tr class="details_screen customer">
		<td class="details_screen"><?php echo $this->_tpl_vars['customFieldLabels']['customer_cf4']; ?>
:</td>
		<td class="details_screen" colspan="5"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>	
			
<?php if ($this->_tpl_vars['invoice']['type_id'] == 1): ?>

	        <tr>
	                <td colspan="6"><br /></td>
        	</tr>
	        <tr>
        	        <td colspan="6"><b><?php echo $this->_tpl_vars['LANG']['description']; ?>
</b></td>
	        </tr>
	        <tr>
	                <td colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItems']['0']['description'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
        	</tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['invoice']['type_id'] == 2 || $this->_tpl_vars['invoice']['type_id'] == 3): ?>

        <tr>
                <td colspan="6"><br /></td>
        </tr>
		<tr>
		<td colspan="6">
		<table width="100%"> 
	
	<?php if ($this->_tpl_vars['invoice']['type_id'] == 2): ?>

            <tr>
                    <td colspan="6" class="details_screen align_right"><a href='#' class="show-itemised" onclick="$('.itemised').show();$('.show-itemised').hide();"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
"/></a><a href='#' class="itemised" onclick="$('.itemised').hide();$('.show-itemised').show();"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
"/></a></td>
            </tr>
			<tr>
        		    <td><b><?php echo $this->_tpl_vars['LANG']['quantity_short']; ?>
</b></td>
					<td colspan="2"><b><?php echo $this->_tpl_vars['LANG']['item']; ?>
</b></td>
					<td style="text-align:right"><b><?php echo $this->_tpl_vars['LANG']['Unit_Cost']; ?>
</b></td>
					<td style="text-align:right"><b><?php echo $this->_tpl_vars['LANG']['Price']; ?>
</b></td>
		    </tr>
		    
	<?php endif; ?>


    <?php if ($this->_tpl_vars['invoice']['type_id'] == 3): ?>

			<tr>
					<td colspan="6" class="details_screen align_right"><a href='#' class="show-consulting" onclick="$('.consulting').show();$('.show-consulting').hide();"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
"/></a><a href='#' class="consulting" onclick="$('.consulting').hide();$('.show-consulting').show();"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
"/></a></td>
        	</tr>
			<tr>
               	 	<td><b><?php echo $this->_tpl_vars['LANG']['quantity_short']; ?>
</b></td>
					<td colspan="2"><b><?php echo $this->_tpl_vars['LANG']['item']; ?>
</b></td>
					<td style="text-align:right"><b><?php echo $this->_tpl_vars['LANG']['Unit_Cost']; ?>
</b></td>
					<td style="text-align:right"><b><?php echo $this->_tpl_vars['LANG']['Price']; ?>
</b></td>
	        </tr>
    <?php endif; ?>


<?php $_from = $this->_tpl_vars['invoiceItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoiceItem']):
?>
			
		<?php if ($this->_tpl_vars['invoice']['type_id'] == 2): ?>
	
			<tr>
	                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['quantity'])) ? $this->_run_mod_handler('siLocal_number_trim', true, $_tmp) : siLocal::number_trim($_tmp)); ?>
</td>
					<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
					<td style="text-align:right"><?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['unit_price'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
					<td style="text-align:right"><?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['gross_total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
	        </tr>
	        
	        <?php if ($this->_tpl_vars['invoiceItem']['description'] != null): ?>
				<tr class="show-itemised" >
					<td>
					</td>	
					<td colspan="5" class="">
						<?php echo $this->_tpl_vars['LANG']['description']; ?>
: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['invoiceItem']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)))) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

					</td>
				</tr>
				<tr class="itemised" >	
					<td colspan="6" class="details_screen">
						<?php echo $this->_tpl_vars['LANG']['description']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				</tr>
			<?php endif; ?>
	        

			<tr class="itemised">       
				<td colspan="6">
					<table width=100%>
						<tr>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
						</tr>
						<tr>       
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
						</tr>
					</table>
				</td>
			</tr>
			 			
	<?php endif; ?>	
	

	<?php if ($this->_tpl_vars['invoice']['type_id'] == 3): ?>

			<tr>
	            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['quantity'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
				<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				<td style="text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['unit_price'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
				<td style="text-align:right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['gross_total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>

			</tr>
			<tr  class="consulting" >	
				<td colspan="6">
					<table width="100%">
						<tr>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
						</tr>
						<tr>       
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
							<td width="50%" class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['product_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
						</tr>
					</table>
				</td>
	<!--		<td></td><td colspan="6" class="details_screen consulting"><?php echo ((is_array($_tmp=$this->_tpl_vars['prod_custom_field_label1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['prod_custom_field_label2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['prod_custom_field_label3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['prod_custom_field_label4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['product']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td> -->
			</tr>
		 

	<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<!-- we are still in the itemised or consulting loop -->
		</table>
		</td>
		</tr>

		<?php if (( $this->_tpl_vars['invoice']['note'] != null )): ?>
		<tr>
				<td colspan="6">&nbsp;</td>
		</tr>
		<tr class="details_screen">
			<td colspan="5"><b><?php echo $this->_tpl_vars['LANG']['notes']; ?>
:</b></td>
				<?php if (( ((is_array($_tmp=$this->_tpl_vars['invoice']['note'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true)) > 25 )): ?>
					<td class="details_screen align_right"><a href='#' class="show-notes" onclick="$('.notes').show();$('.show-notes').hide();"><img src="./images/common/magnifier_zoom_in.png" title="<?php echo $this->_tpl_vars['LANG']['show_details']; ?>
" /></a><a href='#' class="notes" onclick="$('.notes').hide();$('.show-notes').show();"><img src="./images/common/magnifier_zoom_out.png" title="<?php echo $this->_tpl_vars['LANG']['hide_details']; ?>
" /></a></td>
				<?php endif; ?>						
		</tr>
			<!-- if hide detail click - the stripped note will be displayed -->
		<tr class="show-notes details_screen">
				<td colspan="6"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['invoice']['note'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...", true) : smarty_modifier_truncate($_tmp, 25, "...", true)))) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
		</tr>
			<!-- if show detail click - the full note will be displayed -->
		<tr class="notes details_screen">
				<td colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['note'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>
<?php endif; ?> 
		<tr>
				<td colspan="6">&nbsp;</td>
		</tr>
    	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 0): ?>
	<tr class="details_screen">
        <td colspan="3"></td>
		<td colspan="2" class="align_right"><?php echo $this->_tpl_vars['LANG']['sub_total']; ?>
&nbsp;</td>
		<td colspan="1" class="align_right"><?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?><u><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['gross'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?></u><?php endif; ?></td>
    </tr>
    <?php endif; ?>
	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?>
	        <tr>
        	        <td colspan="6"><br /></td>
	        </tr>
    <?php endif; ?>
    <?php unset($this->_sections['line']);
$this->_sections['line']['name'] = 'line';
$this->_sections['line']['start'] = (int)0;
$this->_sections['line']['loop'] = is_array($_loop=$this->_tpl_vars['invoice']['tax_grouped']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    	<?php if (( $this->_tpl_vars['invoice']['tax_grouped'][$this->_sections['line']['index']]['tax_amount'] != '0' )): ?>
    	
    	<tr class="details_screen">
	        <td colspan="3"></td>
			<td colspan="2" class="align_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['tax_grouped'][$this->_sections['line']['index']]['tax_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
&nbsp;</td>
			<td colspan="1" class="align_right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['tax_grouped'][$this->_sections['line']['index']]['tax_amount'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
	    </tr>
	    <?php endif; ?>
	    
	<?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?>
	<tr class="details_screen">
        <td colspan="3"></td>
		<td colspan="2" class="align_right"><?php echo $this->_tpl_vars['LANG']['tax_total']; ?>
&nbsp;</td>
		<td colspan="1" class="align_right"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total_tax'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</u></td>
    </tr>
    <?php endif; ?>
	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?>
	<tr>
		<td colspan="6"><br /></td>
	</tr>
    <?php endif; ?>
    <tr class="details_screen">
        <td colspan="3"></td>
		<td colspan="2" class="align_right"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['amount']; ?>
&nbsp;</b></td>
		<td colspan="1" class="align_right"><span class="double_underline"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</span></td>
    </tr>
    </table>

<br /><br />
	<table align="center">
	<tr class="details_screen">
		<td class="details_screen" colspan="16">
		<?php echo $this->_tpl_vars['LANG']['financial_status']; ?>

		</td>
	</tr>
	<tr class="account">
		<td class="account" colspan="8"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		<td width=5%></td>
		<td class="columnleft" width="5%"></td>
		<td class="account" colspan="6"><a href="index.php?module=customers&amp;view=details&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&amp;action=view"><?php echo $this->_tpl_vars['LANG']['customer_account']; ?>
</a></td>
	</tr>
	<tr>
		<td class="account"><?php echo $this->_tpl_vars['LANG']['total']; ?>
:</td>
		<td class="account"><?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		<td class="account"><a href="index.php?module=payments&amp;view=manage&amp;id=<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['LANG']['paid']; ?>
:</a></td>
		<td class="account"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['paid'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		<td class="account"><?php echo $this->_tpl_vars['LANG']['owing']; ?>
:</td>
		<td class="account"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</u></td>
		<td class="account"><?php echo $this->_tpl_vars['LANG']['age']; ?>
:</td>
		<td class="account" nowrap><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice_age'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 
		<a class="cluetip" href="#"	rel="index.php?module=documentation&amp;view=view&amp;page=help_age" title="<?php echo $this->_tpl_vars['LANG']['age']; ?>
"><img src="./images/common/help-small.png" alt="" /></a>
		</td>
		<td></td>
		<td class="columnleft"></td>
		<td class="account"><?php echo $this->_tpl_vars['LANG']['total']; ?>
:</td>
		<td class="account"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['customerAccount']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		<td class="account"><a href="index.php?module=payments&amp;view=manage&amp;c_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['LANG']['paid']; ?>
:</a></td>
		<td class="account"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['customerAccount']['paid'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
 </td>
		<td class="account"><?php echo $this->_tpl_vars['LANG']['owing']; ?>
:</td>
		<td class="account"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['customerAccount']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</u></td>
	</tr>
	</table>
<br />