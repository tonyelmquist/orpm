<?php /* Smarty version 2.6.18, created on 2016-10-27 13:28:21
         compiled from ../templates/default/reports/index.tpl */ ?>
<!-- Welcome message - end -->
<!-- Do stuff menu  - start -->
<br />
<table align="center">
<tr>
<td>

<h2><?php echo $this->_tpl_vars['LANG']['statements']; ?>
<a name="statement" href=""></a></h2>
<table class="buttons" >
    <tr>
        <td>
            <a href="index.php?module=statement&view=index" class="">
                <img src="./images/famfam/money.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['statement_of_invoices']; ?>

            </a>
        </td>
    </tr>
</table>
<br />
<h2><?php echo $this->_tpl_vars['LANG']['sales']; ?>
<a name="sales" href=""></a></h2>
<table class="buttons" >
    <tr>
        <td>
            <a href="index.php?module=reports&view=report_sales_total" class="">
                <img src="./images/famfam/money.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['total_sales']; ?>

            </a>
            <a href="index.php?module=reports&view=report_sales_by_periods" class="">
                <img src="./images/famfam/money.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['monthly_sales_per_year']; ?>

            </a>
            <a href="index.php?module=reports&view=report_sales_customers_total" class="">
                <img src="./images/famfam/money.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['sales_by_customers']; ?>
 
            </a>                              </td>
    </tr>
</table>
<?php if ($this->_tpl_vars['defaults']['inventory'] == '1'): ?>
    <br />
    <h2><?php echo $this->_tpl_vars['LANG']['profit']; ?>
</h2>
    <table class="buttons" >
        <tr>
            <td>

                <a href="index.php?module=reports&view=report_invoice_profit" class="">
                    <img src="./images/famfam/money.png" alt="" />
                    <?php echo $this->_tpl_vars['LANG']['profit_per_invoice']; ?>

                </a>
                

            </td>
        </tr>
    </table>
<?php endif; ?>
<br />
<h2><?php echo $this->_tpl_vars['LANG']['tax']; ?>
</h2>
<table class="buttons" >
    <tr>
        <td>

            <a href="index.php?module=reports&view=report_tax_total" class="">
                <img src="./images/famfam/money_delete.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['total_taxes']; ?>

            </a>
            

        </td>
    </tr>
</table>
<br />

<h2><?php echo $this->_tpl_vars['LANG']['products']; ?>
</h2>
<table class="buttons" >
    <tr>
        <td>

            <a href="index.php?module=reports&view=report_products_sold_total" class="">
                <img src="./images/famfam/cart.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['product_sales']; ?>

            </a>

            <a href="index.php?module=reports&view=report_products_sold_by_customer" class="">
                <img src="./images/famfam/cart.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['products_by_customer']; ?>

            </a>            

        </td>
    </tr>
</table>
<br />

<h2><?php echo $this->_tpl_vars['LANG']['biller_sales']; ?>
</h2>
<table class="buttons" >
    <tr>
        <td>

            <a href="index.php?module=reports&view=report_biller_total" class="">
                <img src="./images/famfam/user_suit.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['biller_sales']; ?>

            </a>

            <a href="index.php?module=reports&view=report_biller_by_customer" class="">
                <img src="./images/famfam/user_suit.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['biller_sales_by_customer_totals']; ?>
             </a>            

        </td>
    </tr>
</table>
<br />

		


<h2><?php echo $this->_tpl_vars['LANG']['debtors']; ?>
</h2>
<table class="buttons" >
    <tr>
        <td>
             <a href="index.php?module=reports&view=report_debtors_by_amount" class="">
                <img src="./images/famfam/vcard.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['debtors_by_amount_owed']; ?>

            </a>
    
    
           <a href="index.php?module=reports&view=report_debtors_by_aging" class="">
                <img src="./images/famfam/vcard.png" alt="" />
                 <?php echo $this->_tpl_vars['LANG']['debtors_by_aging_periods']; ?>

            </a>
            
             <a href="index.php?module=reports&view=report_debtors_owing_by_customer" class="">
                <img src="./images/famfam/vcard.png" alt="" />
                 <?php echo $this->_tpl_vars['LANG']['total_owed_per_customer']; ?>

            </a>
    
    
           <a href="index.php?module=reports&view=report_debtors_aging_total" class="">
                <img src="./images/famfam/vcard.png" alt="" />
                 <?php echo $this->_tpl_vars['LANG']['total_by_aging_periods']; ?>

            </a>
        </td>
    </tr>

 
</table>
<br />

<h2><?php echo $this->_tpl_vars['LANG']['Other']; ?>
</h2>
<table class="buttons" >
    <tr>
        <td>

            <a href="index.php?module=reports&view=database_log" class="">
                <img src="./images/famfam/database.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['database_log']; ?>

            </a>

        </td>
    </tr>
</table>


</td>
</tr>
</table>
<br />