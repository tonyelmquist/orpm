			<!-- Add footer template above here -->
			<div class="clearfix"></div>
			<?php if(!$_REQUEST['Embedded']){ ?>
				<div style="height: 70px;" class="hidden-print"></div>
			<?php } ?>

		</div> <!-- /div class="container" -->
		<?php if(is_file(dirname(__FILE__) . '/hooks/footer-extras.php')){ include(dirname(__FILE__).'/hooks/footer-extras.php'); } ?>
	</body>
</html>