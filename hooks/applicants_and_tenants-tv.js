// function send_rent_Invoice(table_name, ids){
// 	alert("IDs selected from " + table_name + ": " + ids);
// 	/* 
// 	  we'll open the mail labels page in a new window
// 	  that page is a server-side PHP script named mail-labels.php
// 	  but first, let's prepare the parameters to send to that script
// 	*/
// /*	var url = 'mail-labels.php?table=' + table_name;
// 	for(var i = 0; i < ids.length; i++){
// 		url = url + '&' 
// 			+ encodeURI('ids[]') + '=' 
// 			+ encodeURIComponent(ids[i]);
// 	}
	
// 	window.open(url);*/
// }

// function send_rent_reminder(table_name, ids){	
// 	// ******** Send email if checkbox is checked *********
// 	$recipient = $data['emailto'];
// 	$CC = "";
// 	$sendemail=sqlValue("SELECT first_name, last_name, late_rent_reminder_date, emailto, balance FROM `applicants_and_tenants` JOIN `residence_and_rental_history` ON `applicants_and_tenants`.`id` = `residence_and_rental_history`.`tenant` WHERE `applicants_and_tenants`.`id`='{$data['selectedID']}'");
// 	if($sendemail!=0){

// 	$resetMail=@mail(
// 	// To
// 	$recipient,

// 	// Subject
// 	"Rent Reminder Date",

// 	// Content
// 	"Just add whatever content and fields you want to the email.\n" .
// 	"Account No.: {$data['contract']}\n" .
// 	"Name: {$data['name']}\n" .
// 	"Our Job No.: {$data['id']}\n" .
// 	"Current Job Status: {$data['status']}\n",

// 	// From
// 	"From: no-reply@yourdomain.com"
// 	);
// 	// then update the send email checkbox back to default of 0
// 	if(resetMail){
// 	sql("update jobs set emailadvice=0 where ourref='{$data['selectedID']}'", $abc);
// 	}
// 	}
// 	// ******** End send email if checkbox is checked *******	
// }

// /*function send_rent_Invoice(table_name, ids){
// 	alert("IDs selected from " + table_name + ": " + ids);
// 		var url = 'admin/pageMail.php?table=' + table_name;
// 		for(var i = 0; i < ids.length; i++){
// 			url = url + '&' 
// 				+ encodeURI('ids[]') + '=' 
// 				+ encodeURIComponent(ids[i]);
// 		}
		
// 		window.open(url);
// }*/
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
	alert("IDs selected from " + table_name + ": " + ids);
}