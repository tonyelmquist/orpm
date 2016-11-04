<?php /* Smarty version 2.6.18, created on 2016-11-02 08:58:47
         compiled from ../templates/default/auth/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'outhtml', '../templates/default/auth/login.tpl', 13, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Simple Invoices - Login</title>
<link rel="stylesheet" type="text/css" href="./templates/default/css/login.css" />
</head>
<body class="login" >
<div class="Container">
<?php if ($this->_tpl_vars['errorMessage']): ?>
<p align="center"><strong><font color="#990000"><?php echo ((is_array($_tmp=$this->_tpl_vars['errorMessage'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</font></strong><br /><br /></p>
<?php endif; ?>
	<div id="Dialog">
		<center>
            <h1><?php echo $this->_tpl_vars['LANG']['simple_invoices']; ?>
</h1>
		<form action="" method="post" id="frmLogin" name="frmLogin">
	        <input type="hidden" name="action" value="login" />
		<dl>
        <table>
  		<tr>
            <td>
                <?php echo $this->_tpl_vars['LANG']['email']; ?>
:
            </td>
            <td>
  		        <input name="user" size="25" type="text" title="user" value="" />
            </td>
        </tr>       
  		<tr>
            <td>
                <?php echo $this->_tpl_vars['LANG']['password']; ?>
:
            </td>
            <td>
  		        <input name="pass" size="25" type="password" title="password" value="" />
            </td>
        </tr>       
  		<tr>
            <td>
            </td>
            <td>
                <input type="submit" value="login" />
            </td>
        </tr>       
        </table>
		</form>
        </center>
        <br/>
	</div>
    <br/>
        <a href="http://www.simpleinvoices.org"><?php echo $this->_tpl_vars['LANG']['simple_invoices_powered_by']; ?>
</a>
</div>

<script language="JavaScript">
	<!--
	document.frmLogin.user.focus();
	//-->
</script>

</body>
</html>