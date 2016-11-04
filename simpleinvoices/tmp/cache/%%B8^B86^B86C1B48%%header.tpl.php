<?php /* Smarty version 2.6.18, created on 2016-10-28 08:52:12
         compiled from ../templates/default/invoices//header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/invoices//header.tpl', 45, false),array('modifier', 'date_format', '../templates/default/invoices//header.tpl', 79, false),)), $this); ?>
<br />

    <span class="welcome">
      <a href="index.php?module=invoices&amp;view=itemised"><img class="action" src="./images/common/edit.png"/>&nbsp;<?php echo $this->_tpl_vars['LANG']['itemised_style']; ?>
</a>
			 &nbsp;&nbsp; 
       <a href="index.php?module=invoices&amp;view=total"><img class="action" src="./images/common/page_white_edit.png"/>&nbsp;<?php echo $this->_tpl_vars['LANG']['total_style']; ?>
</a>
			 &nbsp;&nbsp; 
	   <a class="cluetip" href="#" rel="index.php?module=documentation&amp;view=view&amp;page=help_invoice_types" title="<?php echo $this->_tpl_vars['LANG']['invoice_type']; ?>
">
			<img class="action" src="./images/common/help-small.png" alt="" />
	   </a>
    </span>
<br />
<br />
<br />

<input type="hidden" name="action" value="insert" />
<table align="center">
<tr>
<td>
       <table align="left">

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
    foreach ($_from as $this->_tpl_vars['biller']):
?>
                            <option <?php if ($this->_tpl_vars['biller']['id'] == $this->_tpl_vars['defaults']['biller']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['biller']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
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
    foreach ($_from as $this->_tpl_vars['customer']):
?>
                                <option <?php if ($this->_tpl_vars['customer']['id'] == $this->_tpl_vars['defaultCustomerID']): ?> selected <?php endif; ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['id'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['customer']['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                            </select>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr wrap="nowrap">
                        <td class="details_screen"><?php echo $this->_tpl_vars['LANG']['date_formatted']; ?>
</td>
                        <td wrap="nowrap">
                            <input 
				type="text" 
				class="validate[required,custom[date],length[0,10]] date-picker" 
				size="10" 
				name="date" 
				id="date1" 
				<?php if ($_GET['date']): ?>
				    value="<?php echo $_GET['date']; ?>
"
				<?php else: ?>
                                    value='<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
' 
                                <?php endif; ?>
			    />   
                        </td>
                </tr>
       </table>
        </td></tr>
       <tr><td>