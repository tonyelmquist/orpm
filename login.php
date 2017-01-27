<?php if(!isset($Translation)){ @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>

<?php if($_GET['loginFailed']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>


<?php if($_GET['username']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>


<div class="container">
	<div class="login-form">
		<h1 class="login-headline"> Sign in to LTS</h1>
			<div class="panel-body">
				<form method="post" action="index.php">
					<div class="form-group">
						<label class="control-label" for="username"><?php echo $Translation['email']; ?></label>
						<input class="form-control login-control" name="username" id="username" type="text" placeholder="<?php echo $Translation['username']; ?>" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="password"><?php echo $Translation['password']; ?></label>
						<input class="form-control login-control" name="password" id="password" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
						<span class="help-block"><?php echo $Translation['forgot password']; ?></span>
					</div>
					<div class="checkbox">
						<label class="control-label" for="rememberMe">
							<input type="checkbox" name="rememberMe" id="rememberMe" value="1">
							<?php echo $Translation['remember me']; ?>
						</label>
					</div>

					<div class="row">
						<div class="col-sm-offset-3 col-sm-6">
							<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block"><?php echo $Translation['sign in']; ?></button>
						</div>
					</div>
				</form>
			</div>

		</div>
</div>


<?php

	if($_GET['username']){
		$userName = $_GET['username'];
		$pwd = $_GET['password'];
 	}
?>

<script src="/resources/initializr/js/vendor/backstretch.min.js"></script>
<script>

	jQuery(document).ready(function($) {
		$.backstretch([
			"bg1.jpg",
			"bg2.jpg",
			"bg3.jpg"
		], {duration: 3000, fade: 750});

	});
</script>

<script>document.getElementById('username').focus();</script>
<footer class="white navbar-fixed-bottom">
	Don't have an account yet? <a href="membership_signup.php" class="btn btn-primary">Register Now</a> - It's FREE.
</footer>
