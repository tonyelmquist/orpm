/* set current_month_rent_status field to readonly to avoid user editing*/
$j('#current_month_rent_status').prop('readonly', true);

$j(function(){
	/* update rent total automatically every 5 seconds */
	if ($j('[name=SelectedID]').val().length) {
		setInterval(update_rent_total, 5000);
	}

	/* load rent total on loading the page */
	update_rent_total();
});

function update_rent_total(){
	$j('#total_rent_due').load('hooks/ajax-rent-total.php', { id: $j('[name=SelectedID]').val() });
}
