<?php
/*
 Including the following files allows us to use many shortcut
 functions provided by AppGini. Here, we'll be using the
 following functions:
 makeSafe()
 protect against malicious SQL injection attacks
 sql()
 connect to the database and execute a SQL query
 db_fetch_assoc()
 same as PHP built-in mysqli_fetch_assoc() function
 */
$curr_dir = dirname(__FILE__);
include("{$curr_dir}/defaultLang.php");
include("{$curr_dir}/language.php");
include("{$curr_dir}/lib.php");

include_once("$currDir/header.php"); //integrate appearance - header

/* receive calling parameters */
$table = $_REQUEST['table'];
$ids = $_REQUEST['ids']; /* this is an array of IDs */

/* grant access to all users who have access to the selected table - confirm */
//$table_from = get_sql_from('$table'); //AppGini function to select data from selected table
//if (!$table_from) exit(error_message('Access denied!', false));

/* a comma-separated list of IDs to use in the query */
$cs_ids = '';
foreach($ids as $id){
	$cs_ids .= "'" . makeSafe($id) . "',";
}
$cs_ids = substr($cs_ids, 0, -1); /* remove last comma */

/* retrieve the records and display mail labels */
$res = sql( "select * from applicants_and_tenants " .
		"where id in ({$cs_ids})", $eo);
while($row = db_fetch_assoc($res)){
	?>
		<b><?php echo $row['last_name']; ?></b><br>
		<?php echo $row['first_name']; ?><br>
		<?php echo $row['email']; ?><br>
		<?php echo $row['phone']; ?><br>
		<?php echo $row['birth_date']; ?><br>
		<?php echo $row['status']; ?><br>
		<br>
		<hr>
		<?php
	}
	
include_once("$currDir/footer.php"); //integrate appearance - footer
