<?php 

session_start();

?>

<!DOCTYPE html>
<html >

<head>
	<title>Sign-In</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	
</head>

<body>
	<!-- /login-section -->
	<section class="w3l-login-6 card">
		<div class="login-hny">
			<div class="form-content">
				<div class="form-right">
					<div class="overlay">
					
					
					</div>
				</div>
				<div class="form-left">
					<div class="middle">
						<h4>Sign-In</h4>
						<p>Create Your Account, It's Free.</p>
					</div>
					<form action="includes/signin.inc.php" method="post" class="signin-form">
							
							<div class="form-input">
								<label>Username</label>
								<input type="text" name="mailuid" placeholder=""  required autofocus/>
							</div>
							<div class="form-input">
								<label>Password</label>
								<input type="password" name="pwd" placeholder=""  required />
							</div>
							
							
							<button class="btn " type="submit" name="login-submit" >Log in</button>
					</form>
					
					<span>New To Siri? Get new one by <a href="sign-up.php">signing-up </a></span>

				</div>
				
			</div>
			
		</div>
	</section>

	<footer>
			<p class="white123">
				Creating account you accept our terms and policy.
				<a target="_blank" href="https://github.com/mehulsatardekar">Mehul.ai</a>
				
			</p>
		</footer>
	<!-- //login-section -->
</body>

</html>