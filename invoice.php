<?php
$currDir = dirname(__FILE__);
include("$currDir/defaultLang.php");
include("$currDir/language.php");
include("$currDir/lib.php");

include_once("$currDir/header.php");

/* grant access to all logged users */
/*$mi = getMemberInfo();
 if(!$mi['username'] || $mi['username'] == 'guest'){
 echo "Access denied";
 exit;
 }
 */
 
/* grant access to all users who have access to the applicants_and_tenants table*/
$tenant_from = get_sql_from('applicants_and_tenants'); //AppGini function to select data from applicants_and_tenants table
if (!$tenant_from) exit(error_message('Access denied!', false));

/* get invoice*/
$id = intval($_REQUEST['id']);
if (!$id) exit(error_message('Invalid Tenant ID!', false));

/* retrieve tenant info */
$tenant_fields = get_sql_fields('applicants_and_tenants');
$res = sql("select {$tenant_fields} from {$tenant_from} and applicants_and_tenants.id = {$id}", $eo);
if (!($tenant = db_fetch_assoc($res))) exit(error_message('Tenant not found', false));

//var_dump($tenant);

/* retrieve tenant rental information */
$items = array();
$tenant_total = 0;
$item_fields = get_sql_fields('residence_and_rental_history');
$item_from = get_sql_from('residence_and_rental_history');
$res = sql("select {$item_fields} from {$item_from} and residence_and_rental_history.tenant={$id}", $eo);
while ($row = db_fetch_assoc($res)) {
	$row['LineTotal'] = $row['security_deposit'] + $row['monthly_rent'] + $row['other_charges'] + $row['rent_balance'] - $row['rent_paid'];	
	$items[] = $row;
	$tenant_total += $row['LineTotal'];	
}

//var_dump($items);

?>

<div class="row">
	<div class="col-sm-6">
		<!-- company info -->
		<h1>Rental Unit : <?php echo  $tenant['unit']; ?></h1>
		<h5><?php echo  $tenant['last_name']; ?>&nbsp;<?php echo  $tenant['first_name']; ?><br><?php echo  $tenant['email']; ?><br><?php echo  $tenant['phone']; ?><br>Nairobi</h5>
	</div>
	<div class="col-sm-6 text-right">
		<!-- invoice info -->
		<h1>INVOICE</h1>
		<h5>Date: <?php echo date('D, j M Y'); ?><br>
		Due Date: <?php echo $items['due_date, j M Y']; ?><br>
		Invoice No: <?php echo $id; ?></h5>
	</div>
</div>

<hr>

<!-- Payment Amounts -->

<table class="table table-striped table-bordered">
  <thead>
    <th class="text-center">Month</th>
    <th class="text-center">Fixed Deposit</th>
    <th class="text-center">Monthly Rent</th>
    <th class="text-center">Other Charges</th>
    <th class="text-center">Rent Paid</th>
    <th class="text-center">rent_balance</th>
    <th class="text-center">Total Amount To Pay</th>
  </thead>
  
  <tbody>
    <?php foreach ($items as $i => $item){?>
    	<tr>
    		<td class="text-center"><?php echo date('j M Y'); ?></td>
    		<td class="text-center"><?php echo $item['security_deposit']; ?></td>
    		<td class="text-right"><?php echo $item['monthly_rent']; ?></td>
    		<td class="text-right"><?php echo $item['other_charges']; ?></td>
    		<td class="text-right"><?php echo $item['rent_paid']; ?></td>
    		<td class="text-right"><?php echo $item['rent_balance']; ?></td>
    		<td class="text-right"><?php echo $item['LineTotal']; ?></td>
    	</tr>
    <?php } ?>
  </tbody>
  
  <tfoot>
  		<tr></tr>
  		<tr></tr>
  		<tr>
  			<th colspan="6" class="text-right">Total</th>
  			<th class="text-right">Kshs <?php echo $tenant_total ?></th>
  		</tr>
  </tfoot>
</table>


<?php
include_once("$currDir/footer.php");
?>