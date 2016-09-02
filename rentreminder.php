<?php
$currDir = dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
include("$currDir/lib.php");

include_once("$currDir/header.php");

/* receive calling parameters */
$table = $_REQUEST['table'];
$ids = $_REQUEST['ids']; /* this is an array of IDs */

//var_dump($table);
//var_dump($ids);

/* a comma-separated list of IDs to use in the query */
$cs_ids = '';
foreach($ids as $id){
	$cs_ids .= "'" . makeSafe($id) . "',";
}
$cs_ids = substr($cs_ids, 0, -1); /* remove last comma */

//var_dump($cs_ids);

/* retrieve the records and display mail labels */
$items = array();
$res = sql( "select * from {$table} " .
			"where id in ({$cs_ids})", $eo);
while($row = db_fetch_assoc($res)){
	$items[] = $row;
	}
//var_dump($items);
// print_r("item 1 last name");
// print_r($items['1']['last_name']);

//Email implode
$emails_array= array();
foreach ($items as $item) {
	$emails_array[] = $item['email'];
}
$emails= implode(", ", $emails_array);
//var_dump($emails);

//Name implode
$names_array= array();
foreach ($items as $item) {
	$names_array[] = $item['first_name'];
}
$names= implode(", ", $names_array);
//var_dump($names);

//Phone implode
$phones_array= array();
foreach ($items as $item) {
	$phones_array[] = $item['phone'];
}
$phones= implode(", ", $phones_array);
//var_dump($phones);

$message = "Hey there.";

?>

<html>
<head>
	<meta charset="UTF-8" />
	<title>Rental Reminder Form</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

	<div class="contact-form">
        <h2>Rental Reminder Form</h2>
		<form id="contact-form" method="POST" action="form-to-email.php">

			<div class="control-group">
				<label>Your Name</label>
	<input class="fullname" type="text" name="fullname" value="<?php echo $names; ?>"/>
			</div>

			<div class="control-group">
				<label>Email</label>
	<input class="email" type="text" name="email" value="<?php echo $emails; ?>"/>
			</div>

			<div class="control-group">
				<label>Phone (optional)</label>
	<input class="phone" type="text" name="phone" value="<?php echo $phones; ?>"/>
			</div>

			<div class="control-group">
				<label>Message</label>
	<textarea class="message" name="message" value="<?php echo $message; ?>"></textarea>
			</div>

			<div id="errors"></div>

			<div class="control-group no-margin">
				<input type="submit" name="submit" value="Send" id="submit" />
			</div>

		</form>
        <div id='msg_submitting'><h2>Submitting ...</h2></div>
        <div id='msg_submitted'><h2>Thank you !<br> Your Email was sent Successfully.</h2></div>
	</div>

	<!-- JavaScript Files -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- End JavaScript Files -->

</body>
</html>

<?php
include_once("$currDir/footer.php");
?>