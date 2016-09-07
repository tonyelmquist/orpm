function send_rent_reminder(table_name, ids){

	var url = 'rentreminder.php?table=' + table_name;

	for(var i = 0; i < ids.length; i++){
			url = url + '&' 
				+ encodeURI('ids[]') + '=' 
				+ encodeURIComponent(ids[i]);
		}
	window.open(url);
}
function generate_rent_Invoice(table_name, ids){
	
	var url = 'reportico/run.php?execute_mode=PREPARE&project=rentals&xmlin=invoice.xml&target_format=HTML';	
	
		window.open(url);
}
function generate_rent_receipt(table_name, ids){

	var url = 'reportico/run.php?execute_mode=PREPARE&project=rentals&xmlin=receipt.xml&target_format=HTML';	
	
		window.open(url);
}
function late_rent_notice(table_name, ids){
	var url = 'laterent.php?table=' + table_name;

	for(var i = 0; i < ids.length; i++){
			url = url + '&' 
				+ encodeURI('ids[]') + '=' 
				+ encodeURIComponent(ids[i]);
		}
	window.open(url);
}
function tenant_balance_history(table_name, ids){
	var url = 'tenantbalancehistory.php?table=' + table_name;

	for(var i = 0; i < ids.length; i++){
			url = url + '&' 
				+ encodeURI('ids[]') + '=' 
				+ encodeURIComponent(ids[i]);
		}
	window.open(url);
}
function tenant_rent_record(table_name, ids){
	//alert("IDs selected from " + table_name + ": " + ids);
	var title = '<?php echo ; ?>';
}