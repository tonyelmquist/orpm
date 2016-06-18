<?php

	$script_name = basename($_SERVER['PHP_SELF']);
	if($script_name == 'index.php' && isset($_GET['signIn'])){
		?>
		 <style>
			body{
				background: url("images/MenuMDIImageold.jpg") no-repeat fixed center center / cover;
				
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
					background: url("images/MenuMDIImageold.jpg") no-repeat fixed center center / cover;
					
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
					background: url("images/MenuMDIImageold.jpg") no-repeat fixed center center / cover;					
				}
			</style>
			<?php
		}
?>

<div class="navbar-fixed-bottom hidden-print alert alert-info">
	Powered By : <a href="#" target = "_blank">VirtualDev Software Solutions</a>
	<div class="pull-right">
	<?php echo date('D, j M Y T'); ?>
	</div>	
</div>