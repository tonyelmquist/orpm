<?php /* Smarty version 2.6.18, created on 2016-10-27 13:30:09
         compiled from ../templates/invoices/default/template.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlsafe', '../templates/invoices/default/template.tpl', 4, false),array('modifier', 'htmlsafe', '../templates/invoices/default/template.tpl', 5, false),array('modifier', 'siLocal_number', '../templates/invoices/default/template.tpl', 65, false),array('modifier', 'siLocal_number_trim', '../templates/invoices/default/template.tpl', 213, false),array('modifier', 'outhtml', '../templates/invoices/default/template.tpl', 309, false),array('function', 'merge_address', '../templates/invoices/default/template.tpl', 109, false),array('function', 'print_if_not_null', '../templates/invoices/default/template.tpl', 118, false),array('function', 'inv_itemised_cf', '../templates/invoices/default/template.tpl', 231, false),array('function', 'do_tr', '../templates/invoices/default/template.tpl', 232, false),array('function', 'online_payment_link', '../templates/invoices/default/template.tpl', 442, false),)), $this); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['css'])) ? $this->_run_mod_handler('urlsafe', true, $_tmp) : urlsafe($_tmp)); ?>
" media="all">
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['number_short']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['index_id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</title>
</head>
<body>
<br />
<div id="container">
	<div id="header">
	</div>

	<table width="100%" align="center">
		<tr>
			<td colspan="5"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['logo'])) ? $this->_run_mod_handler('urlsafe', true, $_tmp) : urlsafe($_tmp)); ?>
" border="0" hspace="0" align="left"></td>
			<th align="right"><span class="font1"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</span></th>
		</tr>
		<tr>
			<td colspan="6" class="tbl1-top">&nbsp;</td>
		</tr>
	</table>
	
	<!-- Summary - start -->

	<table class="right">
		<tr>
				<td class="col1 tbl1-bottom" colspan="4" ><b><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['summary']; ?>
</b></td>
		</tr>
		<tr>
				<td class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['number_short']; ?>
:</td>
				<td class="" align="right" colspan="3"><?php echo $this->_tpl_vars['invoice']['index_id']; ?>
</td>
		</tr>
		<tr>
				<td nowrap class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['date']; ?>
:</td>
				<td class="" align="right" colspan="3"><?php echo $this->_tpl_vars['invoice']['date']; ?>
</td>
		</tr>
	<!-- Show the Invoice Custom Fields if valid -->
		<?php if ($this->_tpl_vars['invoice']['custom_field1'] != null): ?>
		<tr>
				<td nowrap class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['invoice_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
				<td class="" align="right" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['invoice']['custom_field2'] != null): ?>
		<tr>
				<td nowrap class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['invoice_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
				<td class="" align="right"  colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['invoice']['custom_field3'] != null): ?>
		<tr>
				<td nowrap class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['invoice_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
				<td class="" align="right" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['invoice']['custom_field4'] != null): ?>
		<tr>
				<td nowrap class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabels']['invoice_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
:</td>
				<td class="" align="right" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>

		<tr>
				<td class="" ><?php echo $this->_tpl_vars['LANG']['total']; ?>
: </td>
				<td class="" align="right" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		</tr>
		<tr>
				<td class=""><?php echo $this->_tpl_vars['LANG']['paid']; ?>
:</td>
				<td class="" align="right" colspan="3" ><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['paid'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		</tr>
		<tr>
				<td nowrap class=""><?php echo $this->_tpl_vars['LANG']['owing']; ?>
:</td>
				<td class="" align="right" colspan="3" ><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['owing'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
		</tr>

	</table>
	<!-- Summary - end -->
	
	
	<table class="left">

    <!-- Biller section - start -->
        <tr>
                <td class="tbl1-bottom col1" border=1 cellpadding=2 cellspacing=1><b><?php echo $this->_tpl_vars['LANG']['biller']; ?>
:</b></td>
				<td class="col1 tbl1-bottom" border=1 cellpadding=2 cellspacing=1 colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
        </tr> 

        <?php if ($this->_tpl_vars['biller']['street_address'] != null): ?>
		<tr>
                <td class=''><?php echo $this->_tpl_vars['LANG']['address']; ?>
:</td>
				<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['biller']['street_address2'] != null): ?>
			<?php if ($this->_tpl_vars['biller']['street_address'] == null): ?>
		<tr>
                <td class=''><?php echo $this->_tpl_vars['LANG']['address']; ?>
:</td>
				<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>   
			<?php endif; ?>
			<?php if ($this->_tpl_vars['biller']['street_address'] != null): ?>
		<tr>
                <td class=''></td>
				<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
        </tr>   
			<?php endif; ?>
        <?php endif; ?>

		<?php echo smarty_function_merge_address(array('field1' => $this->_tpl_vars['biller']['city'],'field2' => $this->_tpl_vars['biller']['state'],'field3' => $this->_tpl_vars['biller']['zip_code'],'street1' => $this->_tpl_vars['biller']['street_address'],'street2' => $this->_tpl_vars['biller']['street_address2'],'class1' => "",'class2' => "",'colspan' => '3'), $this);?>


		<?php if ($this->_tpl_vars['biller']['country'] != null): ?>
		<tr>
				<td class=''></td>
				<td class='' colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
		</tr>
       	<?php endif; ?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['phone_short'],'field' => $this->_tpl_vars['biller']['phone'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['fax'],'field' => $this->_tpl_vars['biller']['fax'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['mobile_short'],'field' => $this->_tpl_vars['biller']['mobile_phone'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['email'],'field' => $this->_tpl_vars['biller']['email'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	
	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['biller_cf1'],'field' => $this->_tpl_vars['biller']['custom_field1'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['biller_cf2'],'field' => $this->_tpl_vars['biller']['custom_field2'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['biller_cf3'],'field' => $this->_tpl_vars['biller']['custom_field3'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['biller_cf4'],'field' => $this->_tpl_vars['biller']['custom_field4'],'class1' => '','class2' => '','colspan' => '3'), $this);?>


		<tr>
				<td class="" colspan="4"> </td>
		</tr>

	<!-- Biller section - end -->

		<tr>
			<td colspan="4"><br /></td>
		</tr>

	<!-- Customer section - start -->
	<tr>
			<td class="tbl1-bottom col1" ><b><?php echo $this->_tpl_vars['LANG']['customer']; ?>
:</b></td>
			<td class="tbl1-bottom col1" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>

        <?php if ($this->_tpl_vars['customer']['attention'] != null): ?>
    <tr>
            <td class=''><?php echo $this->_tpl_vars['LANG']['attention_short']; ?>
:</td>
			<td align=left class='' colspan="3" ><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['attention'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
                </tr>
       <?php endif; ?>
        <?php if ($this->_tpl_vars['customer']['street_address'] != null): ?>
    <tr >
            <td class=''><?php echo $this->_tpl_vars['LANG']['address']; ?>
:</td>
			<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
    </tr>   
        <?php endif; ?>
        <?php if ($this->_tpl_vars['customer']['street_address2'] != null): ?>
                <?php if ($this->_tpl_vars['customer']['street_address'] == null): ?>
    <tr>
            <td class=''><?php echo $this->_tpl_vars['LANG']['address']; ?>
:</td>
			<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
    </tr>   
                <?php endif; ?>
                <?php if ($this->_tpl_vars['customer']['street_address'] != null): ?>
    <tr>
			<td class=''></td>
			<td class='' align=left colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
    </tr>   
                <?php endif; ?>
        <?php endif; ?>
		
		<?php echo smarty_function_merge_address(array('field1' => $this->_tpl_vars['customer']['city'],'field2' => $this->_tpl_vars['customer']['state'],'field3' => $this->_tpl_vars['customer']['zip_code'],'street1' => $this->_tpl_vars['customer']['street_address'],'street2' => $this->_tpl_vars['customer']['street_addtess2'],'class1' => "",'class2' => "",'colspan' => '3'), $this);?>


         <?php if ($this->_tpl_vars['customer']['country'] != null): ?>
    <tr>
            <td class=''></td>
			<td class='' colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
    </tr>
        <?php endif; ?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['phone_short'],'field' => $this->_tpl_vars['customer']['phone'],'class1' => '','class2' => 't','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['fax'],'field' => $this->_tpl_vars['customer']['fax'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['mobile_short'],'field' => $this->_tpl_vars['customer']['mobile_phone'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['LANG']['email'],'field' => $this->_tpl_vars['customer']['email'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	
	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['customer_cf1'],'field' => $this->_tpl_vars['customer']['custom_field1'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['customer_cf2'],'field' => $this->_tpl_vars['customer']['custom_field2'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['customer_cf3'],'field' => $this->_tpl_vars['customer']['custom_field3'],'class1' => '','class2' => '','colspan' => '3'), $this);?>

	<?php echo smarty_function_print_if_not_null(array('label' => $this->_tpl_vars['customFieldLabels']['customer_cf4'],'field' => $this->_tpl_vars['customer']['custom_field4'],'class1' => '','class2' => '','colspan' => '3'), $this);?>


		<tr>
			<td class="" colspan="4"></td>
		</tr>
	</table>

	<!-- Customer section - end -->

	<table class="left" width="100%">
		<tr>
			<td colspan="6"><br /></td>
		</tr>

	<?php if ($this->_tpl_vars['invoice']['type_id'] == 2): ?>
					<tr>
				<td class="tbl1-bottom col1"><b><?php echo $this->_tpl_vars['LANG']['quantity_short']; ?>
</b></td>
				<td class="tbl1-bottom col1" colspan="3"><b><?php echo $this->_tpl_vars['LANG']['item']; ?>
</b></td>
				<td class="tbl1-bottom col1" align="right"><b><?php echo $this->_tpl_vars['LANG']['Unit_Cost']; ?>
</b></td>
				<td class="tbl1-bottom col1" align="right"><b><?php echo $this->_tpl_vars['LANG']['Price']; ?>
</b></td>
			</tr>
			
				<?php $_from = $this->_tpl_vars['invoiceItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoiceItem']):
?>

			<tr class="" >
				<td class=""><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['quantity'])) ? $this->_run_mod_handler('siLocal_number_trim', true, $_tmp) : siLocal::number_trim($_tmp)); ?>
</td>
				<td class="" colspan="3"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				<td class="" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['unit_price'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
				<td class="" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['gross_total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
			</tr>
			<?php if ($this->_tpl_vars['invoiceItem']['description'] != null): ?>
			<tr class="">
				<td class=""></td>
				<td class="" colspan="5"><?php echo $this->_tpl_vars['LANG']['description']; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
			</tr>
			<?php endif; ?>
			
            <tr class="tbl1-bottom">
                <td class=""></td>
				<td class="" colspan="5">
					<table width="100%">
						<tr>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf1'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field1']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 1,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf2'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field2']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 2,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf3'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field3']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 3,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf4'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field4']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 4,'class' => "blank-class"), $this);?>

 
						</tr>
					</table>
                </td>
            </tr>
             	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

	<?php if ($this->_tpl_vars['invoice']['type_id'] == 3): ?>
			<tr class="tbl1-bottom col1">
				<td class="tbl1-bottom "><b><?php echo $this->_tpl_vars['LANG']['quantity_short']; ?>
</b></td>
				<td colspan="3" class=" tbl1-bottom"><b><?php echo $this->_tpl_vars['LANG']['item']; ?>
</b></td>
				<td align="right" class=" tbl1-bottom"><b><?php echo $this->_tpl_vars['LANG']['Unit_Cost']; ?>
</b></td>
				<td align="right" class=" tbl1-bottom  "><b><?php echo $this->_tpl_vars['LANG']['Price']; ?>
</b></td>
			</tr>
		
			<?php $_from = $this->_tpl_vars['invoiceItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoiceItem']):
?>
	
			<tr class=" ">
				<td class="" ><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['quantity'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
				<td><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['product']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
				<td class="" colspan="4"></td>
			</tr>
			
						
            <tr>       
                <td class=""></td>
				<td class="" colspan="5">
                    <table width="100%">
                        <tr>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf1'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field1']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 1,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf2'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field2']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 2,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf3'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field3']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 3,'class' => "blank-class"), $this);?>

					<?php echo smarty_function_inv_itemised_cf(array('label' => $this->_tpl_vars['customFieldLabels']['product_cf4'],'field' => $this->_tpl_vars['invoiceItem']['product']['custom_field4']), $this);?>

					<?php echo smarty_function_do_tr(array('number' => 4,'class' => "blank-class"), $this);?>


                        </tr>
                    </table>
                </td>
            </tr>
	
			<tr class="">
				<td class=""></td>
				<td class="" colspan="5"><i><?php echo $this->_tpl_vars['LANG']['description']; ?>
: </i><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['description'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
			</tr>
			<tr class="">
				<td class="" ></td>
				<td class=""></td>
				<td class=""></td>
				<td class=""></td>
				<td align="right" class=""><?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['unit_price'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
				<td align="right" class=""><?php echo $this->_tpl_vars['preference']['pref_currency_sign']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
	
	<?php if ($this->_tpl_vars['invoice']['type_id'] == 1): ?>
		    <table class="left" width="100%">

                <tr class="col1" >
                    <td class="tbl1-bottom col1" colspan="6"><b><?php echo $this->_tpl_vars['LANG']['description']; ?>
</b></td>
                </tr>
                
          <?php $_from = $this->_tpl_vars['invoiceItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['invoiceItem']):
?>

			    <tr class="">
                    <td class="t" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoiceItem']['description'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
                </tr>

		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

<?php if (( $this->_tpl_vars['invoice']['type_id'] == 2 && $this->_tpl_vars['invoice']['note'] != "" ) || ( $this->_tpl_vars['invoice']['type_id'] == 3 && $this->_tpl_vars['invoice']['note'] != "" )): ?>

		<tr>
			<td class="" colspan="6"><br /></td>
		</tr>
		<tr>
			<td class="" colspan="6" align="left"><b><?php echo $this->_tpl_vars['LANG']['notes']; ?>
:</b></td>
		</tr>
		<tr>
			<td class="" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['note'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</td>
		</tr>

<?php endif; ?>

	<tr class="">
		<td class="" colspan="6" ><br /></td>
	</tr>

    	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 0): ?>
	<tr>
        <td colspan="2"></td>
		<td colspan="3" align="right"><?php echo $this->_tpl_vars['LANG']['sub_total']; ?>
&nbsp;</td>
		<td colspan="1" align="right"><?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?><u><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
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
    	
    	<tr>
	        <td colspan="2"></td>
			<td colspan="3" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['tax_grouped'][$this->_sections['line']['index']]['tax_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
&nbsp;</td>
			<td colspan="1" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['tax_grouped'][$this->_sections['line']['index']]['tax_amount'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</td>
	    </tr>
	    <?php endif; ?>
	    
	<?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?>
	<tr>
        <td colspan="2"></td>
		<td colspan="3" align="right"><?php echo $this->_tpl_vars['LANG']['tax_total']; ?>
&nbsp;</td>
		<td colspan="1" align="right"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total_tax'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</u></td>
    </tr>
    <?php endif; ?>
	<?php if ($this->_tpl_vars['invoice_number_of_taxes'] > 1): ?>
	<tr>
		<td colspan="6"><br /></td>
	</tr>
    <?php endif; ?>
    <tr>
        <td colspan="2"></td>
		<td colspan="3" align="right"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_wording'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo $this->_tpl_vars['LANG']['amount']; ?>
&nbsp;</b></td>
		<td colspan="1" align="right"><span class="double_underline"><u><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_currency_sign'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['invoice']['total'])) ? $this->_run_mod_handler('siLocal_number', true, $_tmp) : siLocal::number($_tmp)); ?>
</u></span></td>
    </tr>
    	<tr>
		<td colspan="6"><br /><br /></td>
	</tr>
	
	<!-- invoice details section - start -->

	<tr>
		<td class="tbl1-bottom col1" colspan="6"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_detail_heading'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</b></td>
	</tr>
	<tr>
		<td class="" colspan="6"><i><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_detail_line'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</i></td>
	</tr>
	<tr>
		<td class="" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_method'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line1_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td class="" colspan="6"><?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['preference']['pref_inv_payment_line2_value'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</td>
	</tr>
	<tr>
		<td><br /></td>
	</tr>
	<tr>
		<td colspan="6"><div style="font-size:8pt;" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['footer'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</div></td>
	</tr>
	<tr>
		<td>
			<?php echo smarty_function_online_payment_link(array('type' => $this->_tpl_vars['preference']['include_online_payment'],'business' => $this->_tpl_vars['biller']['paypal_business_name'],'item_name' => $this->_tpl_vars['invoice']['index_name'],'invoice' => $this->_tpl_vars['invoice']['id'],'amount' => $this->_tpl_vars['invoice']['total'],'currency_code' => $this->_tpl_vars['preference']['currency_code'],'link_wording' => $this->_tpl_vars['LANG']['paypal_link'],'notify_url' => $this->_tpl_vars['biller']['paypal_notify_url'],'return_url' => $this->_tpl_vars['biller']['paypal_return_url'],'domain_id' => $this->_tpl_vars['invoice']['domain_id'],'include_image' => true), $this);?>


		</td>
	</tr>

	<!-- invoice details section - end -->

</table>

<div id="footer"></div>

</div>

</body>
</html>