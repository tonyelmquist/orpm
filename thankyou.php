<?php
$currDir = dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
include("$currDir/lib.php");

include_once("$currDir/header.php");

/* grant access to all users who have access to the applicants_and_tenants table*/
$tenant_from = get_sql_from('applicants_and_tenants'); //AppGini function to select data from applicants_and_tenants table
if (!$tenant_from) exit(error_message('Access denied!', false));

?>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Email Confirmation</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

	<div class="contact-form success-section">
        <h2>Email Confirmation</h2>

		<?php if ($_REQUEST['success']):?>
			<div class="alert alert-success">
				<?php echo $_REQUEST['success'];?>
			</div>
		<?php endif;?>
        <div id='msg_submitting'><h2>Submitting ...</h2></div>
        <div id='msg_submitted'><h2>Thank you !<br> Your Email was sent Successfully.</h2></div>
	</div>

	<!-- JavaScript Files -->
  <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>-->
    <!-- End JavaScript Files -->

</body>
</html>

<?php
include_once("$currDir/footer.php");
?>