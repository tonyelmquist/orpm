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
	// var url = 'repo/run.php?execute_mode=PREPARE&project=rentals&xmlin=invoice.xml&target_format=HTML';	
	var url = 'repo/noadmin.php?execute_mode=PREPARE&project=rentals&xmlin=invoice.xml&target_format=HTML';	
	
	window.open(url);
}

function generate_rent_receipt(table_name, ids){

	var url = 'repo/noadmin.php?execute_mode=PREPARE&project=rentals&xmlin=receipt.xml&target_format=HTML';	
	
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

function tenant_statement(table_name, ids){

	var populate_new_owner_dropdown = function(callback){

		jQuery.ajax({
		    type: "GET",  
		    contentType: "application/json; charset=utf-8",
		    url: 'getTenantsBalance.php',
			dataType: 'json',
			data: {table:table_name ,ids: ids},
	        success: function (response) {
	        	var my_tenants = response.results;
	        	var tenantrow = jQuery('<div />');
	        		jQuery.each(my_tenants,function( i ,item ) {
					   	tenantrow.append(		              
		                '<table class="table table-striped">'+
				            '<thead>'+
				              '<tr>'+
				              	'<th>Month</th>'+
				                '<th>Tenant Name</th>'+
				                '<th>Email Address</th>'+
				                '<th>Mobile No.</th>'+
				                '<th>Rent Balance</th>'+
				              '</tr>'+
				            '</thead>'+
				            '<tbody>'+
				              '<tr>'+
				              '<td>' + my_tenants[i].month + '</td>'+
				                '<td>' + my_tenants[i].last_name + ' ' + my_tenants[i].first_name + '</td>'+
				                '<td>' + my_tenants[i].email + '</td>'+
				                '<td>' + my_tenants[i].rent_balance + '</td>'+
				                '<td class="text-danger">5000</td>'+
				              '</tr>'+				              
				            '</tbody>'+
				          '</table>'
		                );  	

					});
				setTimeout(function(){			  		
				  	jQuery('#tenants_section').html(tenantrow);
				}, 10);	
				console.log(tenantrow);
	        	var confirm_title = 'Tenant Statement';
				
				modal_window({
					message: '<div id="tenants_section">' + response.success + '</div>',
					title: confirm_title,
					footer: [
								{
									label: '<i class="glyphicon glyphicon-remove"></i> <?php echo "Cancel"; ?>',
									bs_class: 'warning'
								}
							]
						});
	        },
	        error: function (response) {
	 
	            console.log(response);
	        }
	   }); 
	}
	populate_new_owner_dropdown();	
}

/*function tenant_rent_record(table_name, ids){	

	var populate_new_owner_dropdown = function(callback){

		jQuery.ajax({
		    type: "GET",  
		    contentType: "application/json; charset=utf-8",
		    url: 'getTenants.php',
			dataType: 'json',
			//cache: true,
			data: {table:table_name ,ids: ids},
			//data: function(term, page){ return { s: term, p: page, t: t }; },
			//results: function(resp, page){ return resp; }
	        success: function (response) {
	        	var my_tenants = response.results;
	        	//console.log(response.results);
	        	var tenantrow = jQuery('<div />');
	        		jQuery.each(my_tenants,function( i ,item ) {
					   	tenantrow.append(		              
		                '<table class="table table-striped">'+
				            '<thead>'+
				              '<tr>'+
				              	'<th>Month</th>'+
				                '<th>Tenant Name</th>'+
				                '<th>Email Address</th>'+
				                '<th>Mobile No.</th>'+
				                '<th>Date Paid</th>'+
				                '<th>Status</th>'+
				                // '<th class="text-right">Mean</th>'+
				              '</tr>'+
				            '</thead>'+
				            '<tbody>'+
				              '<tr>'+
				              '<td>August</td>'+
				                '<td>' + my_tenants[i].last_name + ' ' + my_tenants[i].first_name + '</td>'+
				                '<td>' + my_tenants[i].email + '</td>'+
				                '<td>' + my_tenants[i].phone + '</td>'+
				                '<td>' + my_tenants[i].birth_date + '</td>'+
				                '<td class="text-danger">PAID</td>'+
				                // '<td class="text-right">45001</td>'+
				              '</tr>'+				              
				            '</tbody>'+
				          '</table>'
		                );  	

					});
				setTimeout(function(){
			  		//console.log(tenantrow);
				  	//
				  	jQuery('#tenants_section').html(tenantrow);
				}, 10);	
				console.log(tenantrow);			
	        	//return response;
	        	var confirm_title = 'Tenant Rent Record';

				// request tenant records
				modal_window({
					message: '<div id="tenants_section">' + response.success + '</div>',
					title: confirm_title,
					footer: [
								{
									label: '<i class="glyphicon glyphicon-remove"></i> <?php echo "Cancel"; ?>',
									bs_class: 'warning'
								}
							]
						});
	        },
	        error: function (response) {
	 
	            console.log(response);
	        }
	   });  

	}
	populate_new_owner_dropdown();	
}*/

/*function tenant_id(table_name, ids){
	alert('selected table = ' + table_name + 'selected ids = ' + ids );
}*/

/*function test_record(table_name, ids){
	//alert('selected table = ' + table_name + 'selected ids = ' + ids );
	var url = 'getTenantsBalance.php?table=' + table_name;

	for(var i = 0; i < ids.length; i++){
			url = url + '&' 
				+ encodeURI('ids[]') + '=' 
				+ encodeURIComponent(ids[i]);
		}
	window.open(url);
}*/