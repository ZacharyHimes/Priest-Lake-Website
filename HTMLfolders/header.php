

<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="login.css" rel="stylesheet" type="text/css">
	
</head>
	<form action="../includes/login.php" method="post">
	
	   <div class="box">
			  <div class="img">
				<img src="../SiteImages/cabinLogo.png" width="356" height="223" alt=""/>
			  </div>

			  <div class="login">

							<input type="text" id="username" name="mailuid" placeholder="Username/E-mail">

							<div>
								<input type="password" id="pass" name="pwd" placeholder="Passsword">
							</div>

						<button><input type="button" value="Log in" name="login-submit">Login</button>
				</div>
		</div>
	</form>
	<a href="signup.php">Signup</a>
	<form action="includes/logout.php" method="post">
		
		<button type="submit" name="logout-submit">Logout</button>
	
	
	</form>
<body>

</body>

