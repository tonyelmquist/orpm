<?php

	$script_name = basename($_SERVER['PHP_SELF']);
	if($script_name == 'index.php' && isset($_GET['signIn'])){
		?>
		 <style>
			body{
				background: url("images/background.jpg") no-repeat fixed center center / cover;
				
			}
		</style>
	<!--	<div class="alert alert-primary" id="benefits">
			Benefits of becoming a member:
			<ul>
				<li> You'll be awesome!
				<li> We'll be richer!
			</ul>
		</div> 
		
		<script>
			$j(function(){
				$j('#benefits').appendTo('#login_splash');
			})
		</script>   -->
		<?php
	}
	if($script_name == 'index.php' && isset($_GET['loginFailed'])){
		?>
			 <style>
				body{
					background: url("images/background.jpg") no-repeat fixed center center / cover;
					
				}
			</style>
		<!--	<div class="alert alert-primary" id="benefits">
				Benefits of becoming a member:
				<ul>
					<li> You'll be awesome!
					<li> We'll be richer!
				</ul>
			</div> 
			
			<script>
				$j(function(){
					$j('#benefits').appendTo('#login_splash');
				})
			</script>   -->
			<?php
		}
	if($script_name == 'membership_signup.php'){
		?>
			 <style>
				body{
					background: url("images/background.jpg") no-repeat fixed center center / cover;					
				}
			</style>
			<?php
		}
?>

<div class="navbar-fixed-bottom hidden-print alert alert-info">
	Powered By : <a href="https://www.google.com/" target = "_blank">VirtualDev Software Solutions</a>&nbsp; || &nbsp;
	<a href="resources/docs/smartLandlord.pdf" target = "_blank">smartLandlord  Documentation / Online Help</a>&nbsp; || &nbsp; CONTACT US : +254723223005, +254722944615&nbsp; || &nbsp;EMAIL : ndech90@gmail.com, maingiwachira@yahoo.com
	<div class="pull-right">
	<?php echo date('D, j M Y T'); ?>
	</div>	
</div>