<?php
	$curr_dir = dirname(__FILE__);
	include("{$curr_dir}/defaultLang.php");
	include("{$curr_dir}/language.php");
	include("{$curr_dir}/lib.php");
	
	include_once("$currDir/header.php");
	
	/* receive calling parameters */
	$table = $_REQUEST['table'];
	$ids = $_REQUEST['ids']; /* this is an array of IDs */
	
	/* a comma-separated list of IDs to use in the query */
	$cs_ids = '';
	foreach($ids as $id){
		$cs_ids .= "'" . makeSafe($id) . "',";
	}
	$cs_ids = substr($cs_ids, 0, -1); /* remove last comma */
	
	/* retrieve the records and display mail labels */
	$res = sql( "select * from {$table} " .
				"where id in ({$cs_ids})", $eo);
	while($row = db_fetch_assoc($res)){
		?>
		<b><?php echo $row['last_name']; ?></b><br>
		<i>C/O <?php echo $row['first_name']; ?></i><br>
		<?php echo $row['email']; ?><br>
		<?php echo $row['phone']; ?><br>
		<?php echo $row['birthdate']; ?>
		<?php echo $row['status']; ?><br>
		<br>
		<br>
		<hr>
		<?php
	}

