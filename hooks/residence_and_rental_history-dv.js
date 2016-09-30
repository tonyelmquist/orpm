/* set unit, tenant-container, monthly_rent, rent_balance, security_deposit, other_charges fields to readonly to avoid user editing */
	$j('#unit').prop('readonly', true);
	$j('#tenant-container').prop('readonly', true);
	$j('#monthly_rent').prop('readonly', true);
	$j('#rent_balance').prop('readonly', true);
	$j('#security_deposit').prop('readonly', true);
	$j('#other_charges').prop('readonly', true);
	$j('#status').prop('readonly', true);

$j(function(){
	/* on change tenant, retrieve unit number from units table and populate unit field */
	$j('#tenant').on('change', function(){	
		var tid = $j('#tenant').val();

		if (tid == '{empty_value}') {
			$j('#unit').val('');
		}else{
			$j.ajax({
				url: 'hooks/ajax-tenant-unit.php',
				data: { tid: tid },
				success: function(data){
					$j('#unit').val(data);
				}
			});
		}
	});

	/* on change tenant, retrieve monthly_rent from units table and populate monthly_rent field */
		$j('#tenant').on('change', function(){	
		var tid = $j('#tenant').val();

		if (tid == '{empty_value}') {
			$j('#monthly_rent').val('');
		}else{
			$j.ajax({
				url: 'hooks/ajax-tenant-monthlyrent.php',
				data: { tid: tid },
				success: function(data){
					$j('#monthly_rent').val(data);
				}
			});
		}
	});

	/* on change tenant, retrieve security_deposit from units table and populate security_deposit field */
		$j('#tenant').on('change', function(){	
		var tid = $j('#tenant').val();

		if (tid == '{empty_value}') {
			$j('#security_deposit').val('');
		}else{
			$j.ajax({
				url: 'hooks/ajax-tenant-securitydeposit.php',
				data: { tid: tid },
				success: function(data){
					$j('#security_deposit').val(data);
				}
			});
		}
	});

	/* on change tenant, retrieve other_charges from units table and populate other_charges field */
		$j('#tenant').on('change', function(){	
		var tid = $j('#tenant').val();

		if (tid == '{empty_value}') {
			$j('#other_charges').val('');
		}else{
			$j.ajax({
				url: 'hooks/ajax-tenant-othercharges.php',
				data: { tid: tid },
				success: function(data){
					$j('#other_charges').val(data);
				}
			});
		}
	});

	/* Set Unit on opening the detail view form */
		//$j('#tenant').change();

	/* recalculate Rent Balance on updating monthly rent, security deposit, other charges, rent_paid*/
	$j('#monthly_rent, #security_deposit, #other_charges, #rent_paid').change(function(){
		var monthly_rent = parseFloat($j('#monthly_rent').val()) || 0;
		var security_deposit = parseFloat($j('#security_deposit').val()) || 0;
		var other_charges = parseFloat($j('#other_charges').val()) || 0;
		var rent_paid = parseFloat($j('#rent_paid').val()) || 0;

		var rent_balance = monthly_rent + security_deposit + other_charges - rent_paid; 
		$j('#rent_balance').val(rent_balance);	

		if ( rent_balance == 0.0 ) {
			$j('#status').val('PAID');
		} else if ( rent_balance < 0.0 ) {		
			$j('#status').val('OVERPAYMENT');
		} else if ( rent_balance > 0.0 ) {		
			$j('#status').val('BALANCE');
		} 	
	});

	/* Calculate rent_balance & Status on opening the detail view form */
		$j('#tenant').change();
});




