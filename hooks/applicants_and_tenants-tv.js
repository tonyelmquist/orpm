function print_mail_labels(table_name, ids){
	//alert("IDs selected from " + table_name + ": " + ids);
	/* 
	  we'll open the mail labels page in a new window
	  that page is a server-side PHP script named mail-labels.php
	  but first, let's prepare the parameters to send to that script
	*/
	var url = 'mail-labels.php?table=' + table_name;
	for(var i = 0; i < ids.length; i++){
		url = url + '&' 
			+ encodeURI('ids[]') + '=' 
			+ encodeURIComponent(ids[i]);
	}
	
	window.open(url);
}