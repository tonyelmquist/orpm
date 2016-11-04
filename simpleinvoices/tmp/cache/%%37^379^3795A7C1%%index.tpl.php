<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:03
         compiled from ../templates/default/install/index.tpl */ ?>
<img src="images/common/simple_invoices_logo.jpg"/>
<br/>
<br/>

<table align="center">
<tr><td>
<div id="money" class="ui-tabs-panel" style="">
    <ul class="subnav">
        <li>
            <a class="active" href="index.php?module=install&view=index">Simple Invoices installer</a>
        </li>
        <li>
            <a class="active active_subpage" href="index.php?module=install&view=structire">Step 1: Install Database</a>
        </li>
        <li>
            <a href="index.php?module=install&view=essential">Step 2: Import essentail data</a>
        </li>
        <li>
            <a href="index.php?module=install&view=sample_data">Step 3: Import sample data</a>
        </li>
    </ul>
</div>
</td></tr>
</table>
<br />
<br />
<table align="center">
<tr>
<td colspan="2">
<b>To install Simple Invoices please:</b>
<br />
            <br />1. Create a blank MySQL database
            <br />2. Enter the correct database connection details in the config/config.ini file
            <br />3. Review the connection details below and if correct click the 'Install Database' button
<br />
<br />
<b>Database</b>
<br />
</td>
</tr>
<tr>
    <td>Host:</td><td><?php echo $this->_tpl_vars['config']->database->params->host; ?>
</td>
</tr>
<tr>
    <td>Database:</td><td><?php echo $this->_tpl_vars['config']->database->params->dbname; ?>
</td>
</tr>
<tr>
    <td>Username:</td><td><?php echo $this->_tpl_vars['config']->database->params->username; ?>
</td>
</tr>
<tr>
    <td>Password:</td><td>**********</td>
</tr>
</table>
<br />
<table class="buttons" align="center">
    <tr>
        <td>
        
            <a href="./index.php?module=install&amp;view=structure" class="positive">
                <img src="./images/common/tick.png" alt="" />
                Install Database
            </a>
    
        </td>
    </tr>
</table>
<br />
<br />
<br />
<strong>Note:</strong>
If you have any problems or queries re installation
please refer to <a href="http://www.simpleinvoices.org/install" target="blank">install</a> documenation on the website
<br />
 -> <a href="http://www.simpleinvoices.org/install" target="blank">http://www.simpleinvoices.org/install</a>