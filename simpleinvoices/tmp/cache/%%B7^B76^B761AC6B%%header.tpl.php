<?php /* Smarty version 2.6.18, created on 2016-10-27 12:55:02
         compiled from ../templates/default/header.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<!DOCTYPE html
		PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $this->_tpl_vars['LANG']['simple_invoices']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta name="robots" content="noindex, nofollow" />
	<link rel="shortcut icon" href="./images/common/favicon.ico" />

<?php echo '
	<script type="text/javascript" src="./include/jquery/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="./include/jquery/jquery.init.js"></script>

	<link rel="stylesheet" type="text/css" href="./templates/default/css/jquery-ui/default/default.dialog.css" media="all" />
	<link rel="stylesheet" type="text/css" href="./templates/default/css/print.css" media="print" />
	<!-- jQuery Files -->
	<script type="text/javascript" src="./include/jquery/jquery-ui-personalized-1.6rc2.packed.js"></script>	
	<script type="text/javascript" src="./include/jquery/cluetip/jquery.hoverIntent.minified.js"></script>
	<script type="text/javascript" src="./include/jquery/cluetip/jquery.cluetip.js"></script>
	<script type="text/javascript" src="./include/jquery/jquery.flexigrid.1.0b3.pack.js"></script>
	'; ?>
<?php echo $this->_tpl_vars['extension_jquery_files']; ?>
<?php echo '
	<script type="text/javascript" src="./include/jquery/jquery.plugins.js"></script>
	<script type="text/javascript" src="./include/jquery/wysiwyg/wysiwyg.modified.packed.js"></script>
	<script type="text/javascript" src="./include/jquery/jquery.livequery.pack.js"></script>
	'; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../include/jquery/jquery.functions.js.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../include/jquery/jquery.conf.js.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php echo '
	<link rel="stylesheet" type="text/css" href="./templates/default/css/jquery-ui/tab-screen.css" media="all" />
	<link rel="stylesheet" type="text/css" href="./templates/default/css/jquery-ui/tab_menu.css" media="all" />
	<link rel="stylesheet" type="text/css" href="./templates/default/css/jquery-ui/tab.css" media="all" />
	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="./extensions/tab_menu/templates/default/css/iehacks.css" media="all" />
	<![endif]-->

	<!--<script type="text/javascript" src="./include/jquery/jquery.conf.js.tpl"></script>-->
	<link rel="stylesheet" type="text/css" href="./templates/default/css/flexigrid.css" />
	<link rel="stylesheet" type="text/css" href="./include/jquery/wysiwyg/wysiwyg.css" />
	<link rel="stylesheet" type="text/css" href="./include/jquery/jquery.plugins.css" title="default" media="screen" />
	<link rel="stylesheet" type="text/css" href="./include/jquery/rte/rte.css" />	
	<link rel="stylesheet" type="text/css" href="./include/jquery/cluetip/jquery.cluetip.css" />
	<link rel="stylesheet" type="text/css" href="./templates/default/css/jquery-ui/default.css" media="all" />
	<link rel="stylesheet" type="text/css" href="./templates/default/css/phpreports.css" media="all"/>
	'; ?>

	<?php if ($this->_tpl_vars['config']->debug->level == 'All'): ?>
	<link rel="stylesheet" type="text/css" href="./library/blackbirdjs/blackbird.css" />	
	<script type="text/javascript" src="./library/blackbirdjs/blackbird.js"></script>
	<?php endif; ?>
	<?php echo '
	<script type="text/javascript" src="./include/jquery/jquery.validationEngine.js"></script>
    '; ?>


</head>
<body>
<div class="si_grey_background"></div>
