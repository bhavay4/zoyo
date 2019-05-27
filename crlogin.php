<?php include('header3.php'); ?>

		<div class="container">

			<div class="signCard">
				<div class="row">
					<div class="col-sm-6" style="background-color:#ef5350;  height: 100%;">
						<h2 style="color: #fff; font-size: 80px; text-align: center; margin-top:300px;"><b>ZOYO</b></h2>
					</div>
					<form action="includes/crlogin.inc.php" method="post" class="col-sm-6" style="margin-top:150px;">

						<h1 style="text-align: center;"><b>Corporate Log In</b></h1><br>
						<h5><b>EMAIL</b></h5>
						<input type="text" name="mailuid" class="loginInput" placeholder="Enter email id"><br>
						<h5><b>PASSWORD</b></h5>
						<input type="password" name="pwd" class="loginInput" placeholder="Enter password">
						

						<?php
						if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php"){
							echo '<br><br><br>
						<button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php?"){
							echo '<br><br><br><button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php?signup=success"){
							echo '<br><br><br><button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php?error=wrongpwd"){
							echo '<p style="color: red; font-size:15px; text-align: right;  margin-right:23px; ">Wrong Password.</p>
						<button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php?error=emptyfields"){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">Please fill in the fields.</p>
						<button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/crlogin.php?error=nouser"){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">No such user present.</p>
						<button class="btn btn-success" type="submit" name="login-submit" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br>'; 
						} ?>
						
						
					</form>
				</div>
			</div>
			
		</div>
		
	</body>
</html>