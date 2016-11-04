<div class="page-header"><h2><img src="resources/table_icons/account_balances.png"> Search tenants</h2></div>

<div style="margin-top: 20px;">
	<label>Monthly Rent Status</label>
	<div style="max-width: 550px;"><span id="StatusDropDown"></span></div>

	<!-- <input type="hidden" name="FilterAnd[3]" value="and"> -->

	<input type="hidden" name="FilterField[1]" value="13">
	<input type="hidden" name="FilterOperator[1]" value="equal-to">
	<input type="hidden" name="FilterValue[1]" id="current_month_rent_status" value="<?php echo htmlspecialchars($FilterValue[1]); ?>">
</div>

<div style="margin-top: 20px;">
	<label>Property</label>
	<div style="max-width: 550px;"><span id="PropertyDropDown"></span></div>

	<input type="hidden" name="FilterAnd[2]" value="and">

	<input type="hidden" name="FilterField[2]" value="8">
	<input type="hidden" name="FilterOperator[2]" value="equal-to">
	<input type="hidden" name="FilterValue[2]" id="property" value="<?php echo htmlspecialchars($FilterValue[2]); ?>">
</div>

<div style="margin-top: 20px;">
	<label>Unit</label>
	<div style="max-width: 550px;"><span id="unitDropDown"></span></div>

	<input type="hidden" name="FilterAnd[3]" value="and">

	<input type="hidden" name="FilterField[3]" value="9">
	<input type="hidden" name="FilterOperator[3]" value="equal-to">
	<input type="hidden" name="FilterValue[3]" id="unit" value="<?php echo htmlspecialchars($FilterValue[3]); ?>">
</div>

<script>
	$j(function(){
		/* display a dropdown of current_month_rent_status that populates its contents from ajax_combo.php */
		$j('#StatusDropDown').select2({
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page){ return { s: term, p: page, t: 'applicants_and_tenants', f: 'current_month_rent_status' }; }, /*parameters ajax_combo.php expects (4 parameters) - s: term - searchterm the user is searching for, t: - tablename f: - fieldname*/
				results: function(resp, page){ return resp; }
			},
			width: 550
		}).on('change', function(e){
			$j('#current_month_rent_status').val(e.added.text);
		});

		/* preserve the applied current_month_rent_status filter and show it when re-opening the filters page */
		if ($j('#current_month_rent_status').val().length) {
			$j.ajax({
				url: 'ajax_combo.php',
				dataType: 'json',
				data: { s: $j('#current_month_rent_status').val(), p: 1, t: 'applicants_and_tenants', f: 'current_month_rent_status'}
			}).done(function(resp){
				if (resp.results.length) {
					$j('#StatusDropDown').select2('data', {
						id: resp.results[1].id,
						text: resp.results[1].text
					});
				}
			});
		}

		/* display a dropdown of property that populates its contents from ajax_combo.php */
		$j('#PropertyDropDown').select2({
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page){ return { s: term, p: page, t: 'applicants_and_tenants', f: 'property' }; }, /*parameters ajax_combo.php expects (4 parameters) - s: term - searchterm the user is searching for, t: - tablename f: - fieldname*/
				results: function(resp, page){ return resp; }
			},
			width: 550
		}).on('change', function(e){
			$j('#property').val(e.added.text);
		});

		/* preserve the applied property filter and show it when re-opening the filters page */
		if ($j('#property').val().length) {
			$j.ajax({
				url: 'ajax_combo.php',
				dataType: 'json',
				data: { s: $j('#property').val(), p: 1, t: 'applicants_and_tenants', f: 'property'}
			}).done(function(resp){
				if (resp.results.length) {
					$j('#PropertyDropDown').select2('data', {
						id: resp.results[1].id,
						text: resp.results[1].text
					});
				}
			});
		}

		/* display a dropdown of unit that populates its contents from ajax_combo.php */
		$j('#unitDropDown').select2({
			ajax: {
				url: 'ajax_combo.php',
				dataType: 'json',
				cache: true,
				data: function(term, page){ return { s: term, p: page, t: 'applicants_and_tenants', f: 'unit' }; }, /*parameters ajax_combo.php expects (4 parameters) - s: term - searchterm the user is searching for, t: - tablename f: - fieldname*/
				results: function(resp, page){ return resp; }
			},
			width: 550
		}).on('change', function(e){
			$j('#unit').val(e.added.text);
		});

		/* preserve the applied unit filter and show it when re-opening the filters page */
		if ($j('#unit').val().length) {
			$j.ajax({
				url: 'ajax_combo.php',
				dataType: 'json',
				data: { s: $j('#unit').val(), p: 1, t: 'applicants_and_tenants', f: 'unit'}
			}).done(function(resp){
				if (resp.results.length) {
					$j('#unitDropDown').select2('data', {
						id: resp.results[1].id,
						text: resp.results[1].text
					});
				}
			});
		}
	})
</script>

<div style="margin-top: 10px;"><button class="btn btn-success btn-lg">Apply</button></div>