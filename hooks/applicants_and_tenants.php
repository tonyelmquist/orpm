<?php
	// For help on using hooks, please refer to http://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function applicants_and_tenants_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function applicants_and_tenants_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function applicants_and_tenants_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function applicants_and_tenants_after_delete($selectedID, $memberInfo, &$args){

	}

	function applicants_and_tenants_dv($selectedID, $memberInfo, &$html, &$args){
		/*If this is the print preview, dont modify the detail view */
		if (isset($_REQUEST['dvprint_x'])) return ;
		
		ob_start(); ?>
		
		 <script>
			$j(function(){
				<?php if($selectedID){ ?>
				$j('#applicants_and_tenants_dv_action_buttons .btn-toolbar').append(
				   '<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
						'<button type="button" class="btn btn-primary btn-lg" onclick="print_invoice()">' +
					       '<i class="glyphicon glyphicon-print"></i>View Invoice</button>' + 
					'</div>'
						);
				<?php } ?>
			});

			function print_invoice()
			{
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.open('invoice.php?id=' + selectedID, '_blank');
			}

		 </script>
		
		<?php 
		$form_code = ob_get_contents();
		ob_end_clean();
		
		$html .= $form_code;

	}

	function applicants_and_tenants_csv($query, $memberInfo, &$args){

		return $query;
	}
	function applicants_and_tenants_batch_actions(&$args){

		return array(
			
			array(
			'title' => 'Send Rent Reminders',
			'function' => 'send_rent_reminder',
			'icon' => 'calendar'
			),

			array(
			'title' => 'Generate Rent Invoices',
			'function' => 'generate_rent_Invoice',
			'icon' => 'list-alt'
			),

			array(
			'title' => 'Generate Rent Receipts',
			'function' => 'generate_rent_receipt',
			'icon' => 'list-alt'
			),

			array(
			'title' => 'Send Late Rent Notices',
			'function' => 'late_rent_notice',
			'icon' => 'time'
			),

			array(
			'title' => 'View Tenant Balance History',
			'function' => 'tenant_balance_history',
			'icon' => 'minus'
			),
			
			array(
			'title' => 'View Tenant Rent Record',
			'function' => 'tenant_rent_record',
			'icon' => 'paperclip'
			)

			/*array(
			'title' => 'Test Records',
			'function' => 'test_record',
			'icon' => 'paperclip'
			)*/
		);
	}
