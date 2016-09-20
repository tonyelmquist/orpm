/* set rent_balance field to readonly to avoid user editing*/
$j('#rent_balance').prop('readonly', true);

/* recalculate Rent Balance on updating monthly rent, security deposit, other charges, rent_paid*/
$j('#monthly_rent, #security_deposit, #other_charges, #rent_paid').change(function(){
	var monthly_rent = parseFloat($j('#monthly_rent').val()) || 0;
	var security_deposit = parseFloat($j('#security_deposit').val()) || 0;
	var other_charges = parseFloat($j('#other_charges').val()) || 0;
	var rent_paid = parseFloat($j('#rent_paid').val()) || 0;

	var rent_balance = monthly_rent + security_deposit + other_charges - rent_paid; 
	$j('#rent_balance').val(rent_balance);

	/* Calculate rent_balance on opening the detail view form */
	//$j('#rent_paid').change();
});
