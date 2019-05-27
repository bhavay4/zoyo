		<?php
		 require "header3.php"; 

		 if($_SERVER['REQUEST_URI'] == '/zoyo/clogin.php?signup=success'){
		    echo "<div class='alert alert-success' role='alert'>
		          <p class='alertP'>User has been added successfully.</p>
		        </div>";
		  }
		  $url = explode('/',$_SERVER['HTTP_REFERER']);
		  $u1 = $url[4];
		  $u = '/'.$u1;
	
		?>

		<div class="container">

			<div class="signCard">
				<div class="row">
					<div class="col-sm-6" style="background-color:#ef5350;  height: 100%;">
						<h2 style="color: #fff; font-size: 80px; text-align: center; margin-top:300px;"><b>ZOYO</b></h2>
					</div>
					<form action="includes/login.inc.php" method="post" class="col-sm-6" style="margin-top:40px;">

						<h1 style="text-align: center;"><b>Log In</b></h1><br>
						<input type="hidden" name="prevPage" value="<?php echo $u; ?>">
						<h5><b>EMAIL</b></h5>
						<input type="text" name="mailuid" class="loginInput" placeholder="Enter email id"><br>
						<h5><b>PASSWORD</b></h5>
						<input type="password" name="pwd" class="loginInput" placeholder="Enter password">
						<?php
						if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php"){
							echo '<br><br><br>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a><br>
						<br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px; margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px;">Register</a>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php?"){
							echo '<br><br><br>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a>
						<br><br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px;  margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px;">Register</a>'; 
						} 
						else if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php?signup=success"){
							echo '<br><br><br>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-right: 26px;"><b>Login</b></button><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a>
						<br><br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px;  margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px; ">Register</a>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php?error=wrongpwd"){
							echo '<p style="color: red; font-size:15px; text-align: right;  margin-right:23px; ">Wrong Password.</p>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a>
						<br><br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px;  margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px; ">Register</a>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php?error=emptyfields"){
							echo '<p style="color: red; font-size:15px; text-align: right;  margin-right:23px; ">Please fill in the fields.</p>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a>
						<br><br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px; margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px; ">Register</a>'; 
						}
						else if($_SERVER['REQUEST_URI'] == "/zoyo/clogin.php?error=nouser"){
							echo '<p style="color: red; font-size:15px; text-align: right; margin-right:23px; ">No such user present.</p>
						<button type="submit" name="login-submit" class="btn btn-success" style="width: 200px; height: 40px; float: right; margin-top: 9px; margin-right: 26px;"><b>Login</b></button><br><br><br><p style="text-align: center; margin-top: 20px; font-size: 17px;"><b>New User?</b></p><a style="margin-left: 230px; font-size: 15px;" href="csignup.php"><b>Sign up</b></a>
						<br><br><hr style="border-top: 1px solid #BDBDBD; margin: 10px;">
						<h1 style="text-align: center; margin-top:30px;"><b>Corporate</b></h1><br>
						<a class="btn btn btn-primary" href="crlogin.php" type="button" style="width: 200px; margin-left: 50px;">Login</a>
						<a class="btn btn btn-primary" href="crsignup.php" type="button" style="width: 200px;">Register</a>'; 
						} ?>
						

					</form>
				</div>
			</div>
			
		</div>

		<script type="text/javascript">
			setTimeout(function(){
		          $('.alert').removeClass('alert').addClass('hide');
		        },2000);
		        
		</script>
		
	</body>
</html>