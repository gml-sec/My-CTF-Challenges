<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ezsql</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--[if IE]>
		<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="jq22-container" style="padding-top:100px">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<div class="login-form">
					<form action="login.php" method="post">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Username</label>
								<input id="username" name="username" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="password" name="password" type="password" class="input" data-type="password">
							</div>
							<!-- <div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Keep me Signed in</label>
							</div> -->
							<div class="group">
								<input type="submit" class="button" value="Sign In">
							</div>
							<div class="hr"></div>
							<!-- <div class="foot-lnk">
								<a href="#forgot">Forgot Password?</a>
							</div> -->
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>

