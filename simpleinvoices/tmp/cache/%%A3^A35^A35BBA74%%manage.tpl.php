<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:48
         compiled from ../templates/default/invoices/manage.tpl */ ?>

<table class="buttons" align="center">
    <tr>
        <td>

            <a href="index.php?module=invoices&amp;view=itemised" class="positive">
                <img src="./images/common/add.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['new_invoice']; ?>

            </a>

        </td>
    </tr>
</table>

<?php if ($this->_tpl_vars['number_of_invoices']['count'] == 0): ?>
	
	<br />
	<br />
	<span class="welcome"><?php echo $this->_tpl_vars['LANG']['no_invoices']; ?>
</span>
	<br />
	<br />
	<br />
	<br />
<?php else: ?>


    <br />
    <span class="welcome">
       <?php echo $this->_tpl_vars['LANG']['filters']; ?>
:
    <a href="index.php?module=invoices&amp;view=manage&amp;having=money_owed"><?php echo $this->_tpl_vars['LANG']['due']; ?>
</a> : 
    <a href="index.php?module=invoices&amp;view=manage&amp;having=paid"><?php echo $this->_tpl_vars['LANG']['paid']; ?>
</a> : 
    <a href="index.php?module=invoices&amp;view=manage&amp;having=draft"><?php echo $this->_tpl_vars['LANG']['draft']; ?>
</a> : 
    <a href="index.php?module=invoices&amp;view=manage&amp;having=real"><?php echo $this->_tpl_vars['LANG']['real']; ?>
</a> : 
    <a href="index.php?module=invoices&amp;view=manage"><?php echo $this->_tpl_vars['LANG']['all']; ?>
</a> 

   </span>
    <br />
    <br />
	<br />
	<table id="manageGrid" style="display:none"></table>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/invoices/manage.js.php', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


	<div id="export_dialog" class="flora" title="Export">

		<table class="buttons">
			<tr>
				<td>

					<a
				     	title='<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo $this->_tpl_vars['LANG']['export_pdf_tooltip']; ?>
'
						class='export_pdf export_window' 
					>
						<img src="./images/common/page_white_acrobat.png" alt="" />
						<?php echo $this->_tpl_vars['LANG']['export_pdf']; ?>

					</a>
				  </td>
			</tr>
			<tr>
				<td>  
					
					<a 
						title='<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo $this->_tpl_vars['LANG']['export_xls_tooltip']; ?>
 .<?php echo $this->_tpl_vars['config']->export->spreadsheet; ?>
' 
						class='export_xls export_window'
				   >
						<img src="./images/common/page_white_excel.png" alt="" />
						<?php echo $this->_tpl_vars['LANG']['export_xls']; ?>

					</a>
					</td>
			</tr>
			<tr>
				<td>    
			
				   <a 
						title='<?php echo $this->_tpl_vars['LANG']['export_tooltip']; ?>
 <?php echo $this->_tpl_vars['LANG']['export_doc_tooltip']; ?>
 .<?php echo $this->_tpl_vars['config']->export->wordprocessor; ?>
'
						class='export_doc export_window' 
				   >
						<img src="./images/common/page_white_word.png" alt="" />
						<?php echo $this->_tpl_vars['LANG']['export_doc']; ?>

					</a>
				</td>
			</tr>
		</table>
	</div>
<?php endif; ?>
